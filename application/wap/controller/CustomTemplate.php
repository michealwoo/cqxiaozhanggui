<?php

namespace app\wap\controller;

use data\service\Config;
use data\service\Member;
\think\Loader::addNamespace('data', 'data/');

/**
 * 手机端自定义模板控制器
 *
 * @author Administrator
 *        
 */
class CustomTemplate extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function customTemplateIndex()
    {
        if ($this->custom_template_is_enable == 0) {
            // 没有开启自定义模板，跳转到首页
            $this->redirect(__URL(\think\Config::get('view_replace_str.APP_MAIN') . "/Index/index"));
        }
        $id = request()->get("id", 0);
        $config = new Config();
        $member = new Member();
        $custom_template_info = $config->getFormatCustomTemplate($id);
        
        // if (empty($custom_template_info)) {
        // 没有查询到自定义模板，跳转到首页
        // $this->redirect(__URL(\think\Config::get('view_replace_str.APP_MAIN') . "/Index/index"));
        // }
        
        // 分享
        $ticket = $this->getShareTicket();
        $this->assign("signPackage", $ticket);
        $this->assign("custom_template", $custom_template_info);
        
        // 首页优惠券
        $coupon_list = $member->getMemberCouponTypeList($this->instance_id, $this->uid);
        $this->assign('coupon_list', $coupon_list);
        
        // 公众号配置查询
        $wchat_config = $config->getInstanceWchatConfig($this->instance_id);
        
        // 网站信息
        $web_info = $this->web_site->getWebSiteInfo();
        $is_subscribe = 0; // 标识：是否显示顶部关注 0：[隐藏]，1：[显示]
        if ($web_info["is_show_follow"] == 1) {
            // 检查是否配置过微信公众号
            if (! empty($wchat_config['value'])) {
                if (! empty($wchat_config['value']['appid']) && ! empty($wchat_config['value']['appsecret'])) {
                    // 如何判断是否关注
                    if (isWeixin()) {
                        if (! empty($this->uid)) {
                            // 检查当前用户是否关注
                            $user_sub = $this->user->checkUserIsSubscribeInstance($this->uid, $this->instance_id);
                            if ($user_sub == 0) {
                                // 未关注
                                $is_subscribe = 1;
                            }
                        }
                    }
                }
            }
        }
        $this->assign("is_subscribe", $is_subscribe);
        
        $this->assign('web_info', $web_info);
        // 公众号二维码获取
        $source_user_name = "";
        $source_img_url = "";
        $source_uid = request()->get('source_uid', '');
        if (! empty($source_uid)) {
            $_SESSION['source_uid'] = $source_uid;
            $user_info = $member->getUserInfoByUid($_SESSION['source_uid']);
            if (! empty($user_info)) {
                $source_user_name = $user_info["nick_name"];
                if (! empty($user_info["user_headimg"])) {
                    $source_img_url = $user_info["user_headimg"];
                }
            }
        }
        
        // 首页公告
        $this->assign('source_user_name', $source_user_name);
        $this->assign('source_img_url', $source_img_url);
        
        if ($id == 0) {
            return view($this->style . 'CustomTemplate/customTemplateIndex');
        } else {
            return view($this->style . 'CustomTemplate/customTemplateControl');
        }
    }
}