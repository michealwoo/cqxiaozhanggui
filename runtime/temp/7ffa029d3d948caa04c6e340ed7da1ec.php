<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"template/adminblue/Order/printDeliveryPreview.html";i:1548412397;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>打印预览</title>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/common.css">
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/logistics.css">
<link rel="shortcut  icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
<style type="text/css">
*{margin: 0;padding: 0;}
.handlerA{width: 200px;height: 25px;line-height: 25px;overflow: hidden;color: #fff;background: #aaa;border: 1px solid #aaa;text-align: center;}
.handlerB{width: 200px;margin: 0 auto;height: 120px;border: 1px solid #ccc;background:#ccc;}
.confirmPrintBtn{background: #0096ff;border: 1px solid #0096ff;color: #fff;padding: 6px 20px;font-weight: bold;font-size: 12px;vertical-align: middle;}
.cancelPrintBtn{background: #999;border: 1px solid #999;color: white;padding: 6px 20px;font-weight: bold;font-size: 14px;vertical-align: middle;}
.printSuccessBtn {background: #0096ff;border: 1px solid #0096ff;color: #fff;padding: 4px 15px;font-weight: bold;font-size: 12px;vertical-align: middle;}
.printFailBtn{background: #0096ff;border: 1px solid #0096ff;color: #fff;padding: 4px 18px;font-weight: bold;font-size: 14px;vertical-align: middle;}
.inv-page-print{margin:auto;width:980px;background:#fff;}
.inv-info .inv-table{border-bottom: none;border-right: none;}
.inv-info .inv-table td{border-bottom: 1px solid #333;}
</style>
<style type="text/css" media="print">
body{margin:0;padding:0;}
.order-print{position:relative;width:500px;height:500px;margin:auto;}
.order-print img{width:100%;}
@media print{.order-print{background:none;}}
</style>
</head>
<body style="color: #333;">
<div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div style="cursor: move; display: block;" class="aui_title"></div><a style="display: block;" class="aui_close" href="javascript:/*artDialog*/;">×</a></div></td></tr><tr><td style="display: none;" class="aui_icon"><div style="background: transparent none repeat scroll 0% 0%;" class="aui_iconBg"></div></td><td style="width: auto; height: auto;" class="aui_main"><div style="padding: 0px;" class="aui_content"></div></td></tr><tr><td colspan="2" class="aui_footer"><div style="display: none;" class="aui_buttons"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td style="cursor: auto;" class="aui_se"></td></tr></tbody></table></div></div>
    <div id="PrintContent" class="order-print">
    	<?php if(is_array($order_print) || $order_print instanceof \think\Collection || $order_print instanceof \think\Paginator): if( count($order_print)==0 ) : echo "" ;else: foreach($order_print as $key=>$orderdata): ?>
    	<div class="inv-info"> 
    	<h2 style="margin-top:2%;">重庆校掌柜感谢您的惠顾</h2> 
    	<ul class="rowcol2" style=" margin-left: -40px;margin-top: 5%;">
    	    <li>订单编号：<?php echo $orderdata['order_no']; ?></li>
    	    <li>订单时间：<?php echo getTimeStampTurnTime($orderdata['create_time'] ); ?></li>
    	    <li>收件人：<?php echo $orderdata['receiver_name']; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            收件电话：<?php echo $orderdata['receiver_mobile']; ?></li>
            <?php if(!(empty($orderdata['fixed_telephone']) || (($orderdata['fixed_telephone'] instanceof \think\Collection || $orderdata['fixed_telephone'] instanceof \think\Paginator ) && $orderdata['fixed_telephone']->isEmpty()))): ?>
            <li>固定电话：<?php echo $orderdata['fixed_telephone']; ?></li>
            <?php endif; ?>
    	</ul>
    	<ul class="rowcol1" style=" margin-left: -40px;">
    		<li>收货地址：<?php echo $orderdata['address']; ?></li>
    		<li>买家留言：<?php echo $orderdata['buyer_message']; ?></li>
    	</ul>
    	<table class="inv-table table" width="100%" cellspacing="0" cellpadding="0">
    		<colgroup>
	    		<col style="width:40%">
                <col style="width:25%;">
	    		<col style="width:20%;">
	    		<col style="width:15%">
	    		<!-- <col style="width:13%"> -->
    		</colgroup>
    		<tbody>
	    		<tr>
	    		<td>商品名称</td><td>商品规格</td><td>商品编码</td><td>数量</td><!-- <td>金额</td> -->
	    		</tr>
	    		<?php if(is_array($orderdata['order_goods']) || $orderdata['order_goods'] instanceof \think\Collection || $orderdata['order_goods'] instanceof \think\Paginator): if( count($orderdata['order_goods'])==0 ) : echo "" ;else: foreach($orderdata['order_goods'] as $key=>$data): ?>
	    		<if condition="$data.orderId eq $orderdata.orderId ">
	    		<tr>
	    		<td style="text-align:left"><?php echo $data['goods_name']; ?></td><td><?php echo $data['sku_name']; ?></td><td><?php echo $data['code']; ?></td><td><?php echo $data['num']; ?></td><!-- <td><?php echo $data['goods_money']; ?></td> -->
	    		</tr>
				<else />
                </if>
	    		<?php endforeach; endif; else: echo "" ;endif; ?>
	    		<!-- <tr>
	    		<td colspan="4" style="text-align:right">
	    		<notempty name="orderdata.goods_money">
	    		商品总额：<?php echo $orderdata['goods_money']; ?>&nbsp;&nbsp;&nbsp;
	    		</notempty>
	    		<notempty name="orderdata.discount_money">
	    		优惠金额：<?php echo $orderdata['promotion_money']; ?>&nbsp;&nbsp;&nbsp;
	    		</notempty>
	    		<notempty name="orderdata.ajust_money">
	    		商家优惠：--&nbsp;&nbsp;&nbsp;
	    		</notempty>
	    		运费：<?php echo $orderdata['shipping_money']; ?>&nbsp;&nbsp;&nbsp;
	    		总金额：<?php echo $orderdata['pay_money']; ?>
	    		</td>
	    		</tr> -->
    		</tbody>
    	</table>
		<ul class="rowcol2"  style=" margin-left: -40px;">
    		<li>联系电话：<?php echo $receive_address['seller_mobile']; ?></li>
            <br />
    		<li>发货地址：<?php echo $receive_address['shop_address']; ?></li>
    	</ul>
    	<ul class="rowcol1"  style=" margin-left: -40px;">
    		<li>卖家备注： <?php echo $orderdata['seller_memo']; ?></li>
    	</ul>
    	</div>
    	<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
    <div class="extraElement">
        <input id="expressIDs" value="1677,1676,1675" type="hidden">
         <input id="ShopName" value="1" type="hidden">
        <div id="popA" style="width: 202px; opacity: 0.8; position: absolute; top: 262px; left: 850.5px; cursor: move;">
       <!--      <div class="handlerA">
                <span>操作</span></div> -->
            <div class="handlerB">
                <table>
                    <tbody><tr style="height: 30px;line-height:30px;">
                        <td colspan="4" style="text-align:center;background:#999;color:#fff;">
                       	 操作
                        </td>
                    </tr>
                    <tr style="height: 40px;"></tr>
                    <tr>
                        <td style="width: 50px;">
                        </td>
                        <td>
                            <input class="confirmPrintBtn" value="打印" onclick="javascript: printIt();" id="print" style="cursor: pointer;" type="button">
                        </td>
                        <td>
                            <input class="cancelPrintBtn" onclick="javascript: printCancel();" value="取消" style="cursor: pointer;" type="button">
                        </td>
                        <td style="width: 50px;">
                        </td>
                    </tr>
                </tbody></table>
            </div>
        </div>
        <div id="popB" style="width: 202px;opacity: 0.9;display: none;position: fixed;top: 200px;left: 42%;">
            <div class="handlerA" style="width:202px;text-align:center;background: #999;height: 28px;line-height: 28px;">
                <span style="color: red;font-size: 14px;">反馈您的打印结果【非常重要】</span></div>
            <div class="handlerB">
                <table>
                    <tbody><tr style="height: 50px;">
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td style="width: 60px;">
                        </td> -->
                        <td>
                            <input class="printSuccessBtn" value="打印成功" onclick="javascript: printSuccess();" style="cursor: pointer;" type="button">
                        </td>
                        <td>
                            <input class="printFailBtn" value="打印失败" onclick="javascript: printFail();" style="cursor: pointer;" type="button">
                        </td>
                     <!--    <td style="width: 60px;">
                        </td> -->
                    </tr>
                </tbody></table>
            </div>
        </div>
    </div>

<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></div>
<script src="__STATIC__/js/jquery-1.8.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="ADMIN_JS/easydrag.js"></script>
<script type="text/javascript">
var expressArrayIDs = new Array();
$(function () {
	var expressArrayIDs = $("#expressIDs").val()
	var ShopName = $("#ShopName").val()

	showDiv($("#popA"));
	$("#popA").easydrag();
	showDiv($("#popB"));
	$("#popB").easydrag();
	function showDiv(obj) {
		center(obj);
		$(window).scroll(function () {
			center(obj);
		});
		$(window).resize(function () {
			center(obj);
		});
	}
	
	function center(obj) {
		var windowWidth = document.documentElement.clientWidth;
		var windowHeight = document.documentElement.clientHeight;
		var popupHeight = $(obj).height();
		var popupWidth = $(obj).width();
		$(obj).css({
			"position": "absolute",
			"top": (windowHeight - popupHeight) / 2 + $(document).scrollTop() - 150,
			"left": (windowWidth - popupWidth) / 2
		});
	}
})

// 打印成功后【当用户确定打印成功后才会修改订单的打印状态】
function printSuccess() {
	var isOk = false;
	// 打印完成后执行
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/orderform/changeorderprintstate'); ?>",
		data: { "orderIDs": JSON.stringify(expressArrayIDs) }, // 必须是json格式传到后台才会被AppHelper.JsonDeserialize解析
		async: false, // 让它同步执行
		type: "post",
		success: function (successdata) {
			if (successdata == "ok") {
				isOk = true;
			}
		}
	});
	
	if (isOk = true) {
		window.close();
	}
}

// 打印失败
function printFail() {
	$("#popA").css("display", "block");
	$("#popB").css("display", "none");
};

// 打印
function printIt() {
// 打印 【IE 和 google默认打印浏览器打印后才往下执行，firefox 会另开一个线程。但是都无法判断是否已打印】
	$("#popA").css("display", "none");
	window.print();
	setTimeout(function () {
		$("#popB").css("display", "block");
	}, 1000);
}

// 取消打印
function printCancel() {
	window.close();
}
</script>
</body>
</html>