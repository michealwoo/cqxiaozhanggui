<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"template/wap/default_new/Login/login.html";i:1548472904;s:38:"template/wap/default_new/urlModel.html";i:1545820113;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo lang('member_login'); if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/login_base.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/login_wap.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<style>
.footer {
    margin: 100px 0 0 0;
    padding: 0;
    min-height: 1px;
    text-align: center;
    line-height: 16px;
    background: #fff;
}
.ft-copyright {
	padding: 50px 0 20px;
	margin: 0 15px;
	font-size: 12px;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png") no-repeat center 15px;
	background-size: 110px 30px;
}
.ft-copyright a {
    padding-top: 45px;
    color: #ccc;
}
</style>
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script type="text/javascript">
var APPMAIN='APP_MAIN';
var STATIC = "__STATIC__";
	$(function() {
		$('.nk_cell').click(function() {
			if (!$(this).is('.active')) {
				$('.nk_cell').removeClass('active');
				$(this).addClass('active');
				var oDiv1 = $('#nk_text1');
				var oDiv2 = $('#nk_text2');
				if (oDiv1.css('display') == "block") {
					oDiv1.hide();
					oDiv2.show();
				} else {
					oDiv2.hide();
					oDiv1.show();
				}
			}
		});
		$('.right_login_user').click(function() {
			$("#username").val("");
		});
		$('.right_login_pass').click(function() {
			$("#password").val("");
			$("#password_mobile").val("");
		})
		$('.right_login_mobile').click(function() {
			$("#mobile").val("");
		})
		//找回密码弹窗
		$('#msgback').click(function(){
			$('#mask-layer-login').show();
			$('#layui-layer').show();
		})
		$('#mask-layer-login').click(function(){
			$('#mask-layer-login').hide();
			$('#layui-layer').hide();
		})
	})
	function check(){
		
		var username = $("#username").val();
		var password = $("#password").val();
		if(username == ''){
			layer.msg("<?php echo lang('account_cannot_be_empty'); ?>");
			return false;
		}else if(password == ''){
			layer.msg("<?php echo lang('password_cannot_empty'); ?>");
			return false;
		}
		
		$.ajax({
			type : "post",
			url : "<?php echo __URL('APP_MAIN/Login/index'); ?>",
			async : true,
			data : {
				"username" : username,
				"password" : password
			},
			success : function(data) {
				 if(data["code"] > 0 ){
					 if(data["code"] == 1){
					 	var tag = "findPasswd";
					 	if (data['url'].indexOf(tag) ==-1 ) {
						 	setTimeout(function(){location.href = data['url']},1000);	
						 }else{
						 	setTimeout(function(){location.href = "<?php echo __URL('APP_MAIN/member/index'); ?>"},1000);
						 }					 
					 }else{
						 setTimeout(function(){location.href = "<?php echo __URL('APP_MAIN/member/index'); ?>"},1000);
					 }
				}else{
					layer.msg(data["message"]);
				} 
			}
		});
	}

//发送验证码
function sendOutCode(){
	var mobile = $("#mobile").val();
	//var vertification = $("#captcha").val();
	//验证手机号格式是否正确
	if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
		$("#mobile").trigger("focus");
		layer.msg("<?php echo lang('member_enter_correct_phone_format'); ?>");
		return false;
	}
	// if(vertification == ''){
	// 	$("#captcha").trigger("focus");
	// 	layer.msg("<?php echo lang('please_enter_verification_code'); ?>");
	// 	return false;
	// }
	//验证手机号是否已经注册
	$.ajax({
		type: "post",
		url: "<?php echo __URL('APP_MAIN/login/checkMobileIsHas'); ?>",
		data: {"mobile":mobile},
		async: false,
		success: function(data){
			if(data == 0){
				layer.msg("<?php echo lang('current_phone_number_not_registered_yet'); ?>");
				$("#mobile_is_has").val(0);
				return false;
			}else{
				$("#mobile_is_has").val(1);
		 		//判断输入的验证码是否正确 
				$.ajax({
					type: "POST",
					url: "<?php echo __URL('APP_MAIN/Login/sendSmsRegisterCode'); ?>",
					//data: {"mobile":mobile,"vertification":vertification},
					data: {"mobile":mobile},
					success: function(data){
						if(data['code']==0){
							layer.msg("<?php echo lang('send_successfully'); ?>");
							time();
						}else{
							layer.msg(data["message"]);
							$(".verifyimg").attr("src",'<?php echo __URL('SHOP_MAIN/captcha'); ?>');
							return false;
						}
					}
				});
			}
		} 
	});
}
var wait=60; 
function time() { 
        if (wait == 0) {
        	$("#sendOutCode").removeAttr("disabled");  
        	$("#sendOutCode").css("border", "1px solid #FF5073");  
        	$("#sendOutCode").css("color", "#ff6a88"); 
        	$("#sendOutCode").val("<?php echo lang('get_validation_code'); ?>"); 
            wait = 120; 
        } else { 
        	$("#sendOutCode").attr("disabled", 'disabled');
        	$("#sendOutCode").css("border", "1px solid #ccc");  
        	$("#sendOutCode").css("color", "#ccc"); 
        	$("#sendOutCode").val(wait+"s<?php echo lang('post_resend'); ?>"); 
            wait--; 
            setTimeout(function() { 
                time() 
            }, 
            1000)
        }
} 
function check_mobile(){
	var mobile = $("#mobile").val();
	var captcha = $("#captcha").val();
	var sms_captcha = $("#sms_captcha").val();
	var mobile_is_has = $("#mobile_is_has").val();
	if(mobile == ''){
		$("#mobile").trigger("focus");
		layer.msg("<?php echo lang('phone_number_cannot_empty'); ?>");
		return false;
	}else if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
			$("#mobile").trigger("focus");
			layer.msg("<?php echo lang('member_enter_correct_phone_format'); ?>");
		return false;
	}else if(mobile_is_has == 0){
		layer.msg("<?php echo lang('current_phone_number_not_registered_yet'); ?>");
		return false;
	}else if(captcha == ''){
		layer.msg("<?php echo lang('verification_code_cannot_be_null'); ?>");
		return false;
	}else if(sms_captcha == ''){
		layer.msg("<?php echo lang('dynamic_code_cannot_be_empty'); ?>");
		return false;
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/Login/index'); ?>",
		async : true,
		data : {
			"mobile" : mobile,
			"sms_captcha" : sms_captcha
		},
		success : function(data) {
			 if(data["code"] > 0 ){
				 if(data["code"] == 1){
					 setTimeout(function(){location.href = data['url']},1000);						 
				 }else{
					 setTimeout(function(){location.href="<?php echo __URL('APP_MAIN/member/index'); ?>"},1000);
				 }	 
			}else if(data["code"] == -10){
				layer.msg("<?php echo lang('dynamic_error_code'); ?>");
			}else{
				layer.msg(data["message"]);
			} 
		}
	});
}
</script>
<style>
.content{
	max-width: 648px;
	margin: 0 auto;
}
.login_wei_three{
	margin: 1rem 42.5%;
}
.verify{width:30%;float:right;height:36px;line-height:34px;padding-right:7px;}
#sendOutCode{
	border: 1px solid #FFC105;
    padding: 4px 7px;
    color: #FFC105;
    height: 25px;
    font-weight: bold;
    float: right;
    margin: 10px 4px 4px 4px;
    border-radius: 4px;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	width:30%;
	background:#fff;
	border-top-left-radius: 12px;
	border-top-right-radius: 12px;
	border-bottom-right-radius:12px; 
	border-bottom-left-radius:12px; 
}
.nk_logo .back-home{
	position: absolute;
	z-index: 80;
	width: 30px;
	height: 25px;
	line-height: 25px;
	background: #fff;
	top: 15px;
	padding-right: 8px;
	border-top-right-radius: 18px;
	border-bottom-right-radius: 18px;
	text-align: center;
}
.nk_logo .back-home span.data-home{
	height: 20px;
	width: 20px;
	display: block;
	background:url("__TEMP__/<?php echo $style; ?>/public/images/home_check.png") center no-repeat;
	background-size: 20px 20px;
	margin: 2px 0 0 8px;
}
.clear{clear: both;}
.findback{
	text-align: center;
	background: #FFF;
	display: none;
	z-index: 19891015; 
	position: fixed;
	top: 35%;
	width: 70%;
	margin-left: 10%;
	padding: 0% 5%;
	border-radius:10px;
}
.findback a{
	display: block!important;
	float: left!important;
	padding: 10% 8%;
	width: 30%;
	color: black;
	font-size: 17px;
}
.findback img{
	position: relative;
	width: 70%!important;
}
.findback p{
	height: 30px;
	line-height: 30px;
	margin-top: 5px;
	font-size: 14px;
}
</style>
</head>
<body>
<div class="content">
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
	<!--      <section class="head">
		<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title">会员登录</div>
	</section>  -->
	<div class="nk_logo">
		<img src="<?php echo __IMG($register_adv['adv_image']); ?>" />
		<a href="<?php echo __URL('APP_MAIN'); ?>">
			<div class="back-home"><span class="data-home"></span></div>
		</a>
	</div>
	<!-- <a href="APP_MAIN/login"><div class="banner_login">
		<span >登录</span>
	</div></a>
	<a href="APP_MAIN/login/register"><div class="banner_register">
		<span>注册</span>
	</div></a> -->
	<div class="nk_top">
		<div class="<?php if($loginConfig['mobile_config']['is_use'] == 1): ?>nk_cell<?php else: ?>nk_cell_one<?php endif; ?> active">
			<span><?php echo lang("account_login"); ?></span>
		</div>
		<?php if($loginConfig['mobile_config']['is_use'] == 1): ?>
		<div class="nk_cell">
			<span><?php echo lang("mobile_phone_dynamic_code_login"); ?></span>
		</div>
		<?php endif; ?>
	</div>
	<div class="log-wp">
		<div class="log-box">
<!-- 			<form id="LoginForm" action="APP_MAIN/Login/" method="post" onsubmit="return check()"> -->
				<div id="nk_text1" style="display: block;">
					<div class="log-cont">
						<label class="log-txt" for="username">
						<span class="username"><?php echo lang("account_number"); ?></span>
						<input class="" type="text" name="username" id="username" placeholder="<?php echo lang("enter_your_account_number"); ?>"> 
						</label>
					</div>
					<div class="log-cont">
						<label for="password"><span class="password"><?php echo lang("password"); ?></span>
						<input class="" type="password" name="password" id="password" placeholder="<?php echo lang("please_input_password"); ?>">
						</label>
					</div>
					<!-- 	<div class="hide" id="verify">
					<div class="half pos">
						<div class="log-cont">
							<i class="icon-captcha"></i>
							<label class="half" for="code">
				                <input class="" type="text" name="code" placeholder="请输入验证码">
				            </label>
						</div>
					</div>
				</div> -->
					<button id="login-button" class="lang-btn" onclick="check()" style="margin-top: 30px;"><?php echo lang("login"); ?></button>
					<a href="<?php echo __URL('APP_MAIN/login/register'); ?>">
					<button class="lang-btn register_immediately"><?php echo lang("register_immediately"); ?></button></a>
					<div class="msg cl">
					    <a  href="javascript:;" style="color:#F34048;" id="msgback">忘记密码？</a>
						<!-- <input type="checkbox" />记住密码 
						<a class="y"  href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register_immediately"); ?></a> -->
					</div>
				</div>
<!-- 			</form> -->
<!-- 			<form id="LoginForm" action="APP_MAIN/Login/" method="post" onsubmit="return check_mobile()"> -->
				<div id="nk_text2" style="display: none;">
					<div class="nk-cont">
						<label> <?php echo lang("cell_phone_number"); ?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="mobile"
							name="mobile" placeholder="<?php echo lang("please_enter_your_cell_phone_number"); ?>">
						</label>
					</div>
					<!-- <div class="nk-cont">
						<label> <?php echo lang("member_verification_code"); ?>&nbsp;&nbsp;&nbsp;&nbsp;<input class="" type="text" id="captcha" name="captcha" placeholder="<?php echo lang("please_enter_verification_code"); ?>">
						 <div class="verify"><img class="verifyimg" src=" <?php echo __URL('SHOP_MAIN/captcha'); ?>" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha'); ?>'"  alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;width:30%;" /></div>
						</label>
					</div> -->
					<div class="nk-cont">
						<label><?php echo lang("dynamic_code"); ?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
							id="sms_captcha" name="sms_captcha" placeholder="<?php echo lang("please_enter_the_dynamic_code"); ?>">
<!-- 							<a href="javascript:;" id="sendOutCode" onclick="sendOutCode()">获取动态码</a>  -->
							<input type="button" id="sendOutCode" onclick="sendOutCode()" value="<?php echo lang("get_dynamic_code"); ?>">
						</label>
					</div>
					<input type="hidden" id="mobile_is_has" value="1">
					<button id="login-button" class="lang-btn" onclick="check_mobile()"><?php echo lang("login"); ?></button>
					<a class="lang-btn register_immediately"  href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register_immediately"); ?></a>
					<!-- <div class="msg cl">
						<a class="y" href="APP_MAIN/login/reg">忘记密码？</a>
						<a class="y"  href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register_immediately"); ?></a>
					</div> -->
				</div>
<!-- 			</form> -->
			<!-- <div class="nk_regist">
				没有账号？<a href="APP_MAIN/login/register">立即注册</a>
			</div>  -->
		<!-- <div class="login-title pt-60 pb-50">
			<h5 class="t-c f-24">使用以下账号登录</h5>
		</div> -->
		<?php if($loginCount != 0): ?>
		<img src="__TEMP__/<?php echo $style; ?>/public/images/assistant_member.png" style="width: 80% !important;margin-left: 10%;margin-top: 25px;"/>
		<?php endif; if($loginConfig['qq_login_config']['is_use'] != 1): ?>
		<div style="">
			<?php if($loginConfig['qq_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=QQLOGIN'); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/qq.png"/>
				<span>QQ</span>
				</a>
			</div>
			<?php endif; if($loginConfig['wchat_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php else: ?>login_wei_three<?php endif; ?>" style="width:100%;margin:0;margin-top:15px;">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=WCHAT'); ?>" style="display:block;">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weixin.png" style="max-width:48px;"/><br/>
					<span><?php echo lang("wechat"); ?></span>
				</a>
			</div> 
			<?php endif; ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>" style="display: none;">
				<a href="<?php echo __URL('APP_MAIN/login/wchatOauth'); ?>">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weibo.png"/>
					<span ><?php echo lang("microblog"); ?></span>
				</a>
			</div>
		</div>
		<?php elseif($loginConfig['wchat_login_config']['is_use'] != 1): ?>
		<div style="">
			<?php if($loginConfig['qq_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>" style="width:100%;margin:0;margin-top:15px;">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=QQLOGIN'); ?>" style="dispaly:block;">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/qq.png" style="max-width:48px;"/><br/>
				<span>QQ</span>
				</a>
			</div>
			<?php endif; if($loginConfig['wchat_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php else: ?>login_wei_three<?php endif; ?>">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=WCHAT'); ?>">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weixin.png" />
					<span><?php echo lang("wechat"); ?></span>
				</a>
			</div> 
			<?php endif; ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>" style="display: none;">
				<a href="<?php echo __URL('APP_MAIN/login/wchatOauth'); ?>">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weibo.png"/>
					<span ><?php echo lang("microblog"); ?></span>
				</a>
			</div>
		</div>
		<?php else: ?>
		<div style="margin: 0 10%;">
			<?php if($loginConfig['qq_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=QQLOGIN'); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/qq.png"/>
				<span>QQ</span>
				</a>
			</div>
			<?php endif; if($loginConfig['wchat_login_config']['is_use'] == 1): ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php else: ?>login_wei_three<?php endif; ?>">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=WCHAT'); ?>">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weixin.png" />
					<span><?php echo lang("wechat"); ?></span>
				</a>
			</div> 
			<?php endif; ?>
			<div class="<?php if($loginCount == 1): ?>login_wei<?php elseif($loginCount == 2): ?>login_wei_two<?php elseif($loginCount == 3): ?>login_wei_three<?php endif; ?>" style="display: none;">
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=WCHAT'); ?>">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weibo.png"/>
					<span ><?php echo lang("microblog"); ?></span>
				</a>
			</div>
		</div>
		<?php endif; ?>
		</div>
	</div>
	
	<div class="footer" style="min-height: 86px;" id="login_copyright">
		<div class="copyright">
			<div class="ft-copyright">
				<a href="http://www.vrccn.com" target="_blank" >重庆维尔汇科技有限公司&nbsp;提供技术支持</a>
			</div>
		</div>
	</div>
	<!-- 找回密码弹窗 -->
<div id="mask-layer-login" style="position: fixed; top: 0px; width: 100%; height: 100%; z-index: 999999; background: rgba(0, 0, 0, 0.75); display: none;"></div>
<div class="layui-layer layui-layer-page layer-anim findback" id="layui-layer" type="page" times="100002" contype="string">
	<a href="<?php echo __URL('APP_MAIN/Login/findPasswd','type=1'); ?>" style="margin-right: 5%;"><img src="__TEMP__/<?php echo $style; ?>/public/images/default/phone.png"/><p>手机找回</p></a>
	<a href="<?php echo __URL('APP_MAIN/Login/findPasswd','type=2'); ?>"><img src="__TEMP__/<?php echo $style; ?>/public/images/default/email.png"/><p>邮箱找回</p></a>
	<div class="clear"></div>
</div>
<!-- 结束 -->
</body>
</html>