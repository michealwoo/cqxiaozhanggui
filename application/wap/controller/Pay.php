<?php

namespace app\wap\controller;

use data\service\Config;
use data\service\Member as MemberService;
use data\service\Order;
use data\service\UnifyPay;
use data\service\WebSite;
use think\Controller;
use think\Log;
use data\service\Pay\UnionPay;
use data\service\Pay\WeiXinPay;
use data\service\Pay\PayParam;

\think\Loader::addNamespace('data', 'data/');

/**
 * 支付控制器
 *
 * @author Administrator
 *        
 */
class Pay extends Controller
{

    public $style;

    public $shop_config;

    public function __construct()
    {
        parent::__construct();
        $this->web_site = new WebSite();
        $config = new Config();
        $web_info = $this->web_site->getWebSiteInfo();
        $this->assign("web_info", $web_info);
        $this->assign("shopname", $web_info['title']);
        $this->assign("title", $web_info['title']);
        
        // 使用那个手机模板
        $use_wap_template = $config->getUseWapTemplate(0);

        if (empty($use_wap_template))
        {
            $use_wap_template['value'] = 'default_new';
        }
        // 检查模版是否存在
        if (! checkTemplateIsExists("wap", $use_wap_template['value']))
        {
            $this->error("模板配置有误,请联系商城管理员");
        }
        
        $this->style = "wap/" . $use_wap_template['value'] . "/";
        $this->assign("style", "wap/" . $use_wap_template['value']);
        $seoConfig = $config->getSeoConfig(0);
        // 购物设置
        $this->shop_config = $config->getShopConfig(0);
        $this->assign("shop_config", $this->shop_config);
        $this->assign("seoconfig", $seoConfig);
        // 获取会员昵称
        $member = new MemberService();
        $member_info = $member->getMemberDetail();
        $unpaid_goback = "";
        if (isset($_SERVER['HTTP_REFERER'])) 
        {
            if (strpos($_SERVER['HTTP_REFERER'], "paymentorder")) 
            {
                // 如果上一个界面是待付款订单，则直接返回当前的订单详情
                $unpaid_goback = isset($_SESSION['unpaid_goback']) ? $_SESSION['unpaid_goback'] : '';
            } else {
                $unpaid_goback = $_SERVER['HTTP_REFERER'];
            }
        }
        $this->assign("unpaid_goback", $unpaid_goback); // 返回到订单
        $this->assign('member_info', $member_info);
    }
    
    /* 演示版本 */
    public function demoVersion()
    {
        return view($this->style . 'Pay/demoVersion');
    }

    /**
     * 获取支付相关信息
     */
    public function getPayValue()
    {
        $out_trade_no = request()->get('out_trade_no', '');

        if (empty($out_trade_no)) 
        {
            $this->error("没有获取到支付信息");
        }

        $pay = new UnifyPay();
        $pay_config = $pay->getPayConfig();
        $this->assign("pay_config", $pay_config);
        $pay_value = $pay->getPayInfo($out_trade_no);
        
        if (empty($pay_value)) 
        {
            $this->error("订单主体信息已发生变动!", __URL(__URL__ . "/member/index"));
        }
        
        if ($pay_value['pay_status'] != 0) 
        {
            // 订单已经支付
            $this->error("订单已经支付或者订单价格为0.00，无需再次支付!");
        }
        if ($pay_value['type'] == 1) 
        {
            // 订单
            $order_status = $this->getOrderStatusByOutTradeNo($out_trade_no);
            // 订单关闭状态下是不能继续支付的
            if ($order_status == 5) 
            {
                $this->error("订单已关闭");
            }
        }
        
        $zero1 = time(); // 当前时间 ,注意H 是24小时 h是12小时
        $zero2 = $pay_value['create_time'];
        if ($zero1 > ($zero2 + ($this->shop_config['order_buy_close_time'] * 60))) 
        {
            $this->error("订单已关闭");
        } 
        else 
        {
            $this->assign('pay_value', $pay_value);
            if (request()->isMobile()) 
            {
                return view($this->style . 'Pay/getPayValue'); // 手机端
            } 
            else
            {
                return view($this->style . 'Pay/pcOptionPaymentMethod'); // PC端
            }
        }

    }
    
    /**
     * VIP会员微信支付
     */
    public function payvip()
    {
        $uid =input('uid');

        if(empty($uid))
        {
            $this->error("参数为空");
        }

        $user = db('sys_user')
              ->where(array('uid'=>$uid))
              ->find();

        if(empty($user))
        {
            $this->error("请注册或登录账号");
        }

        $member_level = db('ns_member')
                      ->where(array('uid'=>$uid))
                      ->value('member_level');

        if($member_level==48)
        {
            $this->error("该用户已经是VIP账号");
        }

        //$out_trade_no = request()->get('no', '');
        
        // if (! is_numeric($out_trade_no)) 
        // {
        //     $this->error("没有获取到支付信息");
        // }
        
        $pay_value['out_trade_no'] = 'V'.date('YmdHis',time());
        $pay_value['product_id'] = $out_trade_no;
        $pay_value['pay_body'] = '重庆校掌柜平价超市订单';
        $pay_value['pay_detail'] ='重庆校掌柜平价超市订单';
        $pay_value['pay_money'] = 30;
        $pay_value['create_time'] = time();
        $pay_value['uid'] = $uid;
        $this->assign('pay_value',$pay_value);
        
        if (request()->isMobile())
        {
        	if(!isWeixin()){
        		$this->error("请用微信登录");
        	}
            return view($this->style . 'Pay/getPayVipValue'); // 手机端
        } 
        else
        {
        	$this->error("请用微信登录");
            return view($this->style . 'Pay/pcOptionVipPaymentMethod'); // PC端
        }

        
    }
    //微信支付VIP会员
    public function vipwechatpay($out_trade_no,$uid)
    {
        $out_trade_no =input('get.out_trade_no');
        $uid =input('get.uid');

        db('ns_vipmember_payment')->insert([
            'out_trade_no'=>$out_trade_no,
            'status'=>0,
            'uid'=>$uid,
            'createtime'=>time(),
        ]);

        $pay = new UnifyPay();
        $weixin_pay = new WeiXinPay();

        $red_url = str_replace("/index.php", "", __URL__);
        $red_url = str_replace("index.php", "", $red_url);
        $red_url = $red_url . "/weixinpay.php";

        $product_id = $out_trade_no;
        $pay_body = '重庆校掌柜平价超市订单';
        $pay_detail ='重庆校掌柜平价超市订单';
        $pay_money = 30;  //=>0.02

        if (! isWeixin())
        {
        	$this->error("请用微信登录");
            $openid='';
            // 扫码支付
            $res = $weixin_pay->setWeiXinPay($pay_body,$pay_detail,$pay_money*100,$out_trade_no,$red_url,'NATIVE',$openid, $product_id);

            if ($res["return_code"] == "SUCCESS")
            {
                if (empty($res['code_url'])) 
                {
                    $code_url = "生成支付二维码失败!";
                } 
                else 
                {
                    $code_url = $res['code_url'];
                }
                if (! empty($res["err_code"]) && $res["err_code"] == "ORDERPAID" && $res["err_code_des"] == "该订单已支付") 
                {
                    $this->redirect(__URL(__URL__ . "/index/index"));
                }
            } else {
                $code_url = "生成支付二维码失败!";
            }
            $path = getQRcode($code_url, "upload/qrcode/pay", $out_trade_no);
            $this->assign("path", __ROOT__ . '/' . $path);
            $pay_value['pay_money'] = 12;
            $pay_value['out_trade_no'] = $out_trade_no;
            //$pay_value = $pay->getPayInfo($out_trade_no);
            $this->assign('pay_value', $pay_value);
            return view($this->style . "Pay/pcWeChatPay");
            
        } 
        else 
        {
            $openid = $weixin_pay->get_openid();
            // jsapi支付
            $res = $weixin_pay->setWeiXinPay($pay_body, $pay_detail, $pay_money*100, $out_trade_no, $red_url,'JSAPI', $openid, $product_id);
            if (! empty($res["return_code"]) && $res["return_code"] == "FAIL" && $res["return_msg"] == "JSAPI支付必须传openid") {
                $this->redirect(__URL(__URL__ . "/wap/index/index"));
            } else {
                $retval = $weixin_pay->GetJsApiParameters($res);
                $this->assign("out_trade_no", $out_trade_no);
                $this->assign('jsApiParameters', $retval);
                return view($this->style . 'Pay/weixinPay');
            }
        }
    }
    /**
     * 支付完成后回调界面
     *
     * status 1 成功
     *
     * @return \think\response\View
     */
    public function payCallback()
    {
        $out_trade_no = request()->get('out_trade_no', ''); // 流水号
        $msg = request()->get('msg', ''); // 测试，-1：在其他浏览器中打开，1：成功，2：失败
        $this->assign("status", $msg);
        $order_no = $this->getOrderNoByOutTradeNo($out_trade_no);
        $this->assign("order_no", $order_no);
        file_put_contents('123.txt',"\r\n payCallback: $out_trade_no",FILE_APPEND);
        if (request()->isMobile()) {
            return view($this->style . "Pay/payCallback");
        } else {
            return view($this->style . "Pay/payCallbackPc");
        }
    }

    /**
     * 订单微信支付
     */
    public function wchatPay()
    {
        $out_trade_no = request()->get('no', '');
        
        if (! is_numeric($out_trade_no)) {
            $this->error("没有获取到支付信息");
        }
        
        $red_url = str_replace("/index.php", "", __URL__);
        $red_url = str_replace("index.php", "", $red_url);
        $red_url = $red_url . "/weixinpay.php";
        $pay = new UnifyPay();
        
        if (! isWeixin())
        {
            // 扫码支付
            $res = $pay->wchatPay($out_trade_no, 'NATIVE', $red_url);
            if ($res["return_code"] == "SUCCESS") {
                if (empty($res['code_url'])) {
                    $code_url = "生成支付二维码失败!";
                } else {
                    $code_url = $res['code_url'];
                }
                if (! empty($res["err_code"]) && $res["err_code"] == "ORDERPAID" && $res["err_code_des"] == "该订单已支付") {
                    $this->redirect(__URL(__URL__ . "/member/index"));
                }
            } else {
                $code_url = "生成支付二维码失败!";
            }
            $path = getQRcode($code_url, "upload/qrcode/pay", $out_trade_no);
            $this->assign("path", __ROOT__ . '/' . $path);
            $pay_value = $pay->getPayInfo($out_trade_no);
            $this->assign('pay_value', $pay_value);
            return view($this->style . "Pay/pcWeChatPay");
            
        } else {
            // jsapi支付
            $res = $pay->wchatPay($out_trade_no, 'JSAPI', $red_url);
            if (! empty($res["return_code"]) && $res["return_code"] == "FAIL" && $res["return_msg"] == "JSAPI支付必须传openid") {
                $this->redirect(__URL(__URL__ . "/wap/member/index"));
            } else {
                $retval = $pay->getWxJsApi($res);
                $this->assign("out_trade_no", $out_trade_no);
                $this->assign('jsApiParameters', $retval);
                return view($this->style . 'Pay/weixinPay');
            }
        }
    }

    /**
     * (non-PHPdoc)
     * @see \data\api\IUnifyPay::getWxJsApi()
     */
    public function getWxJsApi($UnifiedOrderResult)
    {
        $weixin_pay = new WeiXinPay();
        $retval = $weixin_pay->GetJsApiParameters($UnifiedOrderResult);
        return $retval;
    }
    /**
     * 微信支付异步回调（只有异步回调对订单进行处理）
     */
    public function wchatUrlBack()
    {
        $postStr = file_get_contents('php://input');
        $date = date('Y-m-d H:i:s',time());
        
        if (! empty($postStr)) 
        {
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $pay = new UnifyPay();
            $check_sign = $pay->checkSign($postObj, $postObj->sign);

            if ($postObj->result_code == 'SUCCESS' && $check_sign == 1) 
            {
                $retval = $pay->onlinePay($postObj->out_trade_no, 1, '');
                $this->vipback($postObj->out_trade_no);
                $xml = "<xml>
                    <return_code><![CDATA[SUCCESS]]></return_code>
                    <return_msg><![CDATA[支付成功]]></return_msg>
                </xml>";
                echo $xml;
            } else {
                $xml = "<xml>
                    <return_code><![CDATA[FAIL]]></return_code>
                    <return_msg><![CDATA[支付失败]]></return_msg>
                </xml>";
                echo $xml;
            }
        }
    }
    /**
     * 充值成为VIP会员 回调
     */
    public function vipback($out_trade_no)
    {
        $info = db('ns_vipmember_payment')
              ->where('out_trade_no',['like','%'.$out_trade_no.'%'])
              ->find();
        $uid = $info['uid'];
        file_put_contents('log.txt',"\r\n uid: \r\n $uid; \r\n $out_trade_no",FILE_APPEND);
        if($uid)
        {
            db('ns_member')->where('uid',$uid)->update(array('member_level'=>48));
            db('ns_vipmember_payment')
            ->where('out_trade_no',['like','%'.$out_trade_no.'%'])
            ->update(array(
                'status'=>1,
                'updatetime'=>time()
            ));
        }
        return true;
    }
    /**
     * 微信支付同步回调（不对订单处理）
     */
    public function wchatPayResult()
    {
        $out_trade_no = request()->get('out_trade_no', '');
        $msg = request()->get('msg', '');
        $this->assign("status", $msg);
        $order_no = $this->getOrderNoByOutTradeNo($out_trade_no);
        $this->assign("order_no", $order_no);
        if (request()->isMobile()) {
            return view($this->style . "Pay/payCallback");
        } else {
            return view($this->style . "Pay/payCallbackPc");
        }
    }

    /**
     * 微信二维码支付状态
     */
    public function wchatQrcodePay()
    {
        if (request()->isAjax()) 
        {
            $out_trade_no = request()->post("out_trade_no", "");
            $pay = new UnifyPay();
            $payResult = $pay->getPayInfo($out_trade_no);
            if ($payResult['pay_status'] > 0) 
            {
                return $retval = array(
                    "code" => 1,
                    "message" => ''
                );
            }
        }
    }

    /**
     * 支付宝支付
     */
    public function aliPay()
    {
        $out_trade_no = request()->get('no', '');
        if (! is_numeric($out_trade_no)) {
            $this->error("没有获取到支付信息");
        }
        if (! isWeixin()) {
            $notify_url = str_replace("/index.php", '', __URL__);
            $notify_url = str_replace("index.php", '', $notify_url);
            $notify_url = $notify_url . "/alipay.php";
            $return_url = __URL(__URL__ . '/wap/Pay/aliPayReturn');
            $show_url = __URL(__URL__ . '/wap/Pay/aliUrlBack');
            $pay = new UnifyPay();
            Log::write("支付宝------------------------------------" . $notify_url);
            $res = $pay->aliPay($out_trade_no, $notify_url, $return_url, $show_url);
            echo "<meta charset='UTF-8'><script>window.location.href='" . $res . "'</script>";
        } else {
            // echo "点击右上方在浏览器中打开";
            $this->assign("status", - 1);
            $order_no = $this->getOrderNoByOutTradeNo($out_trade_no);
            $this->assign("order_no", $order_no);
            if (request()->isMobile()) {
                return view($this->style . "Pay/payCallback");
            } else {
                return view($this->style . "Pay/payCallbackPc");
            }
        }
    }

    /**
     * 支付宝支付异步回调
     */
    public function aliUrlBack()
    {
        Log::write("支付宝------------------------------------进入回调用");
        $pay = new UnifyPay();
        $verify_result = $pay->getVerifyResult('notify');
        if ($verify_result) { // 验证成功
            $out_trade_no = request()->post('out_trade_no', '');
            // 支付宝交易号
            $trade_no = request()->post('trade_no', '');
            
            // 交易状态
            $trade_status = request()->post('trade_status', '');
            
            Log::write("支付宝------------------------------------交易状态：" . $trade_status);
            if ($trade_status == 'TRADE_FINISHED') {
                // 判断该笔订单是否在商户网站中已经做过处理
                // 如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                // 如果有做过处理，不执行商户的业务程序
                // 注意：
                // 退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
                
                // 调试用，写文本函数记录程序运行情况是否正常
                // logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
                $retval = $pay->onlinePay($out_trade_no, 2, $trade_no);
                Log::write("支付宝------------------------------------retval：" . $retval);
                // $res = $order->orderOnLinePay($out_trade_no, 2);
            } else 
                if ($trade_status == 'TRADE_SUCCESS') {
                    // 判断该笔订单是否在商户网站中已经做过处理
                    // 如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                    // 如果有做过处理，不执行商户的业务程序
                    
                    // 注意：
                    // 付款完成后，支付宝系统发送该交易状态通知
                    $retval = $pay->onlinePay($out_trade_no, 2, $trade_no);
                    Log::write("支付宝------------------------------------retval：" . $retval);
                    // $res = $order->orderOnLinePay($out_trade_no, 2);
                    // 调试用，写文本函数记录程序运行情况是否正常
                    // logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
                }
            
            // ——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            
            echo "success"; // 请不要修改或删除
                                
            // $this->assign("status", 1);
            // $this->assign("out_trade_no", $out_trade_no);
            // return view($this->style . "Pay/payCallback");
        } else {
            // 验证失败
            echo "fail";
            // $this->assign("status", 2);
            // $this->assign("out_trade_no", $out_trade_no);
            // return view($this->style . "Pay/payCallback");
            // 调试用，写文本函数记录程序运行情况是否正常
        } // logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }

    /**
     * 支付宝支付同步会调（页面）（不对订单进行处理）
     */
    public function aliPayReturn()
    {
        $out_trade_no = request()->get('out_trade_no', '');
        
        $order_no = $this->getOrderNoByOutTradeNo($out_trade_no);
        $this->assign("order_no", $order_no);
        $pay = new UnifyPay();
        $verify_result = $pay->getVerifyResult('return');
        if ($verify_result) {
            $trade_no = request()->get('trade_no', '');
            $trade_status = request()->get('trade_status', '');
            
            if ($trade_no == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') {
                // return view($this->style . 'Pay/pay_success');
                // echo "<h1>支付成功</h1>";
                $this->assign("status", 1);
                if (request()->isMobile()) {
                    return view($this->style . "Pay/payCallback");
                } else {
                    return view($this->style . "Pay/payCallbackPc");
                }
            } else {
                echo "trade_status=" . $trade_status;
            }
            $this->assign("orderNumber", $out_trade_no);
            $this->assign("msg", 1);
        } else {
            $this->assign("orderNumber", $out_trade_no);
            $this->assign("msg", 0);
            // echo "<h1>支付失败</h1>";
            $this->assign("status", 2);
            if (request()->isMobile()) {
                return view($this->style . "Pay/payCallback");
            } else {
                return view($this->style . "Pay/payCallbackPc");
            }
            // echo "验证失败";
        }
    }

    /**
     * 根据流水号查询订单编号，
     * 创建时间：2017年10月9日 18:36:54
     *
     * @param unknown $out_trade_no            
     * @return string
     */
    public function getOrderNoByOutTradeNo($out_trade_no)
    {
        $pay = new UnifyPay();
        $order = new Order();
        $pay_value = $pay->getPayInfo($out_trade_no);
        $order_no = "";
        if ($pay_value['type'] == 1) {
            // 订单
            $list = $order->getOrderNoByOutTradeNo($out_trade_no);
            if (! empty($list)) {
                foreach ($list as $v) {
                    $order_no .= $v['order_no'];
                }
            }
        } elseif ($pay_value['type'] == 4) {
            // 余额充值不进行处理
        }
        return $order_no;
    }

    /**
     * 根据外部交易号查询订单状态，订单关闭状态下是不能继续支付的
     * 创建时间：2017年10月13日 14:35:59 王永杰
     *
     * @param unknown $out_trade_no            
     * @return number
     */
    public function getOrderStatusByOutTradeNo($out_trade_no)
    {
        $order = new Order();
        $order_status = $order->getOrderStatusByOutTradeNo($out_trade_no);
        if (! empty($order_status)) {
            return $order_status['order_status'];
        }
        return 0;
    }


}