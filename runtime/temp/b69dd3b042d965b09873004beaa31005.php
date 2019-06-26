<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"template/wap/default_new/Login/findPasswd.html";i:1545820112;s:34:"template/wap/default_new/base.html";i:1548429462;s:38:"template/wap/default_new/urlModel.html";i:1545820113;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var UPLOADCOMMENT = '<?php echo UPLOAD_COMMENT; ?>';// 存放评论
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	img_lazyload();
});

//页面底部选中
function bottomActive(event){
	clearButton();
	if(event == "#bottom_home"){
		$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#bottom_classify"){
		$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#bottom_stroe"){
		$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//图片懒加载
function img_lazyload(){
	$("img.lazy_load").lazyload({
		threshold : 0,
		effect : "fadeIn", //淡入效果
		skip_invisible : false
	})
}
</script>
<!-- 百度商桥 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?bd227c33b73e30ea946e96913ad30574";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<style>
body{max-width: 640px;}
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
<?php if($isvip == 0): ?>
.sub-nav.nav-b5 dd{-width:25%;font-size:14px;}
<?php else: ?>
.sub-nav.nav-b5 dd{width:25%;font-size:14px;}
<?php endif; ?>

</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<meta class="foundation-data-attribute-namespace">
<meta class="foundation-mq-xxlarge">
<meta class="foundation-mq-xlarge">
<meta class="foundation-mq-large">
<meta class="foundation-mq-medium">
<meta class="foundation-mq-small">
<style  type="text/css">
.button-submit{width:90%;margin:50px auto 0;}
.button-submit button{color:#FFF;background-color:#E03115;font-size:15px;border:none;line-height:40px;height:40px;}
.mt-55.mlr-15 input{box-shadow: none;margin: 0;height: 35px;border: none;max-width: 72%;min-width: 60%;display: inline-block;font-size: 14px;}
.mt-55.mlr-15>div{line-height:50px;padding-left:15px;overflow: hidden;background: #fff;}
.mt-55.mlr-15>div:first-child{margin-top:45px;}
.mt-55.mlr-15>div>span{width: 28%;font-size: 14px;display: block;float:left;}
.mt-55.mlr-15>div>span.left-img{width: 16%;}
.mt-55.mlr-15>div>span>img{width: 26px;height:auto;float: left;margin-top: 16px;}
.border_right{border-right: 1px solid #ddd;height: 24px;width: 2px;float: left;margin-top: 16px;margin-left: 14px;}
.mt-55.mlr-15 input:focus{background: #fff;}
.personal-center .value{font-size: 12px;color: #999;}
.personal-center .value.touxiang{display: block;width: 40px;height: 40px;line-height: 40px;text-align: center;border-radius: 50%;border: 1px solid #e6e6e6;overflow: hidden;}
.personal-center .value img{max-width:100%;max-height: 100%;width:auto;height:auto;vertical-align: middle;    display: block;}
.personal-center .arrow, .personal-center .head-arrow{margin-top: 10px;}
.personal-center .set_a{color: #29afe4;}
.mt-55.mlr-15>div.threeBind{padding-left: 0;border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;margin-top: 54px;}

.sendOutCode{border: 1px solid #E03115!important;color: #E03115;padding:0;width: 30px;background: #fff;border-radius: 4px;min-width: 25% !important;height: 25px;font-size: 12px;margin-left: 20px;}
</style>

</head>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
/**
 * 处理图片路径
 */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray" style="margin:auto;">
	
<section class="head">
	<a class="head_back" id="backoutapp" href="<?php echo __URL('APP_MAIN/login'); ?>"><i class="icon-back"></i></a>
	<div class="head-title" id="title">忘记密码</div>
</section>

	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<!-- 密码修改 -->
<?php if($type == 1): ?>
<!-- 手机 -->
<form class="mt-55 mlr-15" id="editpassword" style="background-color:#fff;margin:45px 0 0 0;">
	<div>
		<span>手机号：</span>
		<input type="text" name="mobile" id="mobile" style="margin:0;height:50px;border-bottom:none;" placeholder="输入11位手机号" >
	</div>
	<div>
		<span>验证码</span>
		<input type="text" id="mobile-code" name="mobile-code" placeholder="请输入手机验证码" style="max-width: 32%;min-width: 30%;"/>
		<input type="button" class="sendOutCode sendcode" id="send_mobile" value="获取验证码" style="height: 30px;margin-left: 20px;">
	</div>
	<div><span><?php echo lang('member_new_password'); ?>：</span>
		<input type="text" id="mobile-pass" name="mobile-pass" style="box-shadow:none;margin:0;height:35px;border:none;width:auto;display:inline-block;" placeholder="<?php echo lang('member_new_password'); ?>" onfocus="$(this).attr('type','password')"/>
		<span><?php echo lang('confirm_new_password'); ?>：</span>
		<input type="text" id="mobile-new-pass" name="mobile-new-pass" placeholder="<?php echo lang('confirm_new_password'); ?>" onfocus="$(this).attr('type','password')">
	</div>
</form>
<?php else: ?>
<!-- 邮箱 -->
<form class="mt-55 mlr-15" id="editpassword" style="background-color:#fff;margin:45px 0 0 0;">
	<div>
		<span>邮箱号：</span>
		<input type="text" name="email" id="email" style="margin:0;height:50px;border-bottom:none;" placeholder="输入注册邮箱号" >
	</div>
	<div>
		<span>验证码</span>
		<input type="text" id="email-code" name="email_code" placeholder="请输入邮箱验证码" style="max-width: 32%;min-width: 30%;"/>
		<input type="button" class="sendOutCode sendcode" id="send_mobile" value="获取验证码" style="height: 30px;margin-left: 20px;">
	</div>
	<div><span><?php echo lang('member_new_password'); ?>：</span>
		<input type="text" id="email-pass" name="email-pass" style="box-shadow:none;margin:0;height:35px;border:none;width:auto;display:inline-block;" placeholder="<?php echo lang('member_new_password'); ?>" onfocus="$(this).attr('type','password')"/>
		<span><?php echo lang('confirm_new_password'); ?>：</span>
		<input type="text" id="email-new-pass" name="email-new-pass"
		 placeholder="<?php echo lang('confirm_new_password'); ?>" onfocus="$(this).attr('type','password')">
	</div>
</form>
<?php endif; ?>

<div id="saveBtn" class="button-submit">
	<a href="javascript:void(0)">
		<button  id="btn_submit"><?php echo lang('member_preservation'); ?></button>
	</a>
</div>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
var sendtype = <?php echo $type; ?>;
$(document).ready(function(){
	//检测手机手机是否已注册
	$("#mobile").change(function(){
		var mobile = $("#mobile").val();
		$.ajax({
			type: "GET",
			url: "<?php echo __URL('APP_MAIN/login/findpasswd'); ?>",
			data: {"info":mobile,"type":"mobile"},
			success: function(data){
				//alert(JSON.stringify(data));
				if(data){
				}else{
					layer.msg('该手机号未注册');
					$("#mobile").focus();
					return false;
				}
			}
		});
	});
	
	//检测邮箱是否存在
	$("#email").change(function(){
		var email = $("#email").val();
		$.ajax({
			type: "GET",
			url: "<?php echo __URL('APP_MAIN/login/findpasswd'); ?>",
			data: {"info":email,"type":"email"},
			success: function(data){
				if(data){
				}else{
					layer.msg('该邮箱未注册');
					$("#email").focus();
					return false;
				}
			}
		});
	});

	//发送手机邮箱验证码
	$(".sendcode").click(function(){
		if(sendtype == 1){
			var mobile = $("#mobile").val();
			/*var vertification = $("#captcha-mobile").val();*/
			var type ="sms";
			//验证手机号格式是否正确
			if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
				layer.msg('请输入正确的手机格式');
				$("#mobile").focus();
				return false;
			}
		}else{
			var mobile = $("#email").val();
			/*var vertification = $("#captcha-email").val();*/
			var type ="email";
			//验证手机号格式是否正确
			if(mobile.search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/) == -1){
				layer.msg('请输入正确的邮箱格式');
				$("#email").focus();
				return false;
			}
		}
		//验证手机号邮箱是否已经注册
		$.ajax({
			type: "post",
			url: "<?php echo __URL('APP_MAIN/login/forgotvalidation'); ?>",
			data: {"type":type,"send_param":mobile},
			async: false,
			success: function(data){
				if (data['code'] == 0) {
					if(sendtype == 1){
						layer.msg(data.message);
						$("#mobile").attr("disabled",true);
					}else{
						layer.msg(data.message);
						$("#email").attr("disabled",true);
					}
					time();
				}else{
					layer.msg(data.message);
					return false;
				}
			}
		});
	});
});

var wait=120; 
function time() { 
	if (wait == 0) {
		$(".sendcode").removeAttr("disabled");
		$(".sendcode").val("获取验证码"); 
		wait = 120;
	} else { 
		$(".sendcode").attr("disabled", 'disabled');
		$(".sendcode").val(wait+"s后重新发送"); 
		wait--;
		setTimeout(function() {time()},1000);
	}
}

$("#btn_submit").click(function(){
	if(sendtype == 1){
		var type = "mobile";
		var mobile = $("#mobile").val();
			var mobile_code = $("#mobile-code").val();
			var mobile_pass = $("#mobile-pass").val();
			var mobile_new_pass = $("#mobile-new-pass").val();
			if(mobile.length==0){
				layer.msg("请输入您注册的手机号码");
				$("#mobile").focus();
				return false;
			}
			var result = '';
			if(mobile_code.length==0){
				layer.msg("请输入手机验证码");
				$("#mobile-code").focus();
				return false;
			}else{
				$.ajax({
					type : "post",
					url : "<?php echo __URL('APP_MAIN/login/check_find_password_code'); ?>",
					async : false,
					data : {"send_param" : mobile_code},
					success : function(data){
						if(data['code']==0){
						}else{
							layer.msg(data.message);
							$("#mobile-code").focus();
							result = true;
						}
						return result;
					}
				})
			}
			if(result){
				return false;
			}
			if(mobile_pass.length<6){
				layer.msg('登录密码不能少于 6 个字符');
				$("#mobile-pass").focus();
				return false;
			}
			if(mobile_new_pass != mobile_pass){
				layer.msg('两次输入的密码不一致');
				$("#mobile-new-pass").focus();
				return false;
			}
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/login/setnewpasswordbyemailormobile'); ?>",
				data : {"userInfo":mobile,"password":mobile_pass,"type":"mobile"},
				success : function(data){
					if(data['code'] == 1){
						location.href=__URL("APP_MAIN/login");
					}else{
						layer.msg(data['message']);
						setTimeout(function(){
							location.reload()
						},2000);
					}
				}
			})
		}else{
			var type = "email";
			var email = $("#email").val();
			var email_code = $("#email-code").val();
			var email_pass = $("#email-pass").val();
			var email_new_pass = $("#email-new-pass").val();
			if(email.length==0){
				layer.msg('请输入您注册的邮箱');
				$("#email").focus();
				return false;
			}
			var result = '';
			if(email_code.length==0){
				layer.msg('请输入邮箱验证码');
				$("#email-code").focus();
				return false;
			}else{
				$.ajax({
					type : "post",
					url : "<?php echo __URL('APP_MAIN/login/check_find_password_code'); ?>",
					async : false,
					data : {"send_param" : email_code},
					success : function(data){
						if(data['code']==0){
						}else{
							layer.msg(data['message']);
							$("#email-code").focus();
							result = true;
						}
						return result;
					}
				})
			}
			if(result){
				return false;
			}
			if(email_pass.length<6){
				layer.msg('登录密码不能少于 6 个字符');
				$("#email-pass").focus();
				return false;
			}
			if(email_new_pass != email_pass){
				layer.msg('两次输入的密码不一致');
				$("#email-new-pass").focus();
				return false;
			}
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/login/setnewpasswordbyemailormobile'); ?>",
				data : {"userInfo":email,"password":email_pass,"type":"email"},
				success : function(data){
					if(data['code'] == 1){
						location.href=__URL("APP_MAIN/login");
					}else{
						layer.msg(data['message']);
							setTimeout(function(){
							location.reload()
						},2000);
					}
				}
			})
		}
});
</script>

</body>
</html>