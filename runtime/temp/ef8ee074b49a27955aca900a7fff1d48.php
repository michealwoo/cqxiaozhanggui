<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"template/shop/blue/Login/findPasswd.html";i:1545820112;s:34:"template/shop/blue/Login/base.html";i:1545820112;s:32:"template/shop/blue/urlModel.html";i:1545820112;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?> </title>

<link rel="shortcut icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_login_common.css" />
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/passport.css" />
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.validate.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/messages_zh222.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/placeholder.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.json.js"></script>

<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/base_common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/user.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>

<!-- logo样式 -->
<link type="text/css" rel="stylesheet" href="__STATIC__/shop_css_logo/shop_logo.css" />
</head>
<body>
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
<script>
var APPMAIN='APP_MAIN';//外置JS调用
var STATIC = "__STATIC__";
function erweima1(obj, sType) { var oDiv = document.getElementById(obj); if (sType == 'show') {oDiv.style.display = 'block';} if (sType == 'hide') {oDiv.style.display = 'none';} }
</script>

<style type="text/css">
.header {
    width: 990px;
    min-width: 990px;
    height: 90px;
    padding: 0px;
}
.header .logo-info {
    width: 430px;
    height: 80px;
    line-height: 80px;
    float: left;
}
.header .logo-info a.logo {
	display: block;
	max-width: 240px;
	height: 80px;
	float: left;
	overflow: hidden;
}
.header .logo-info a.logo img {
    max-width: 100%;
    max-height: 100%;
    vertical-align: middle;
}
.logo-info span.findpw {
    border-left: 1px #eee solid;
    width: auto;
    height: 44px;
    line-height: 44px;
    font-size: 28px;
    margin: 18px 0px 0px 15px;
    float: left;
    padding: 0px 15px;
    color: #333;
}
.error {
    background: #FFFDEE;
    border: 1px #EDD28B solid;
    color: #666;
    width: auto;
    max-width: 260px;
     padding: 5px 10px; 
    margin-left: 10px;
    display: inline-block;
    font-size: 12px;
    color: #999;
}
#web_gov_record a span{
    position: relative;
    top:-5px;
}
</style>


     
<div class="header w990">
	<div class="logo-info">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="web-logo-a"><img alt="logi" src="<?php echo __IMG($web_info['logo']); ?>" style="margin-top:5px;" class="weblogo"/></a>
	</div>
</div>

<div class="w990">
	<div id="find-pw">
		<div class="find-con">
			<div id="find-box" class="uc-box">
				<div class="find-pwd-con">
					<!-- <form action="SHOP_MAIN/login/findpasswd2" method="post" id="fpForm" name="fpForm"> -->
					<input type="hidden" name="action" value="check_username" />
					<div id="error_container"></div>
					<div class="item">
						<label style="margin-left:-15px;"><?php echo lang('authentication_method'); ?></label>
						<label for="wayback1" class="wayback"><input type="radio" name="wayback" id="wayback1" checked="chcked"><?php echo lang('mobile_verification'); ?></label>
						<label for="wayback2" class="wayback"><input type="radio" name="wayback" id="wayback2"><?php echo lang('mailbox_validation'); ?></label>
					</div>
					<div id="mobile-box">
						<div class="item">
							<label><?php echo lang('cell_phone_number'); ?></label>
							<input name="mobile" id="mobile" type="text" tabindex="1" placeholder="<?php echo lang('enter_registered_mobile_number'); ?>" class="text" />
							<span id="mobileyz"></span>
							<input type="hidden" value="<?php echo lang('existence'); ?>" id="isset_mobile"/>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="item">
							<label><?php echo lang('member_verification_code'); ?></label>
							<input type="text" id="captcha-mobile" name="captcha" tabindex="2" placeholder="<?php echo lang('please_enter_verification_code'); ?>" autocomplete="off" class="text text-te" />
							<label class="img" style="margin-left: 5px">
								<img class="verifyimg" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;" />
							</label>
							<span id="captcha-mobile-yz"></span>
						</div>
						<?php endif; ?>
						<div class="item v_mobile_phone v_item">
							<label style="margin-left: -70px;"><?php echo lang('member_enter_mobile_verification_code'); ?></label>
							<input type="text" id="mobile-code" name="mobile-code" class="text text-te2" />
							<input type="button" value="<?php echo lang('member_get_mobile_verification_code'); ?>" class="code sendcode" />
							<span id="mobile-code-yz"></span>
						</div>
						<div class="item v_mobile_phone v_item">
							<label style="margin-left: -28px;"><?php echo lang('set_new_password'); ?></label>
							<input type="password" id="mobile-pass" name="mobile-pass" class="text" />
							<span  id="mobile-pass-yz"></span>
						</div>
						<div id="c_mobile_code" class="item v_mobile_phone v_item">
							<label style="margin-left: -28px;"><?php echo lang('confirm_new_password'); ?></label>
							<input type="password" id="mobile-new-pass" name="mobile-new-pass" class="text" />
							<span  id="mobile-new-pass-yz"></span>
						</div>
					</div>
					<div id="email-box" style="display: none;">
						<div class="item">
							<label style="margin-left: 13px;"><?php echo lang('mailbox'); ?></label>
							<input name="email" id="email" type="text" tabindex="1" placeholder="<?php echo lang('enter_registered_email_account'); ?>" class="text" />
							<span id="emailyz"></span>
							<input type="hidden" value="<?php echo lang('existence'); ?>" id="isset_email"/>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="item">
							<label><?php echo lang('member_verification_code'); ?></label>
							<input type="text" id="captcha-email" name="captcha" tabindex="2" placeholder="<?php echo lang('please_enter_verification_code'); ?>" autocomplete="off" class="text text-te" />
							<label class="img" style="margin-left: 5px">
								<img class="verifyimg" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" alt="captcha" style="vertical-align: middle; cursor: pointer; height: 35px;" />
							</label>
							<span id="captcha-email-yz"></span>
						</div>
						<?php endif; ?>
						<div id="c_mobile_code" class="item v_mobile_phone v_item">
							<label style="margin-left: -70px;"><?php echo lang('member_enter_mailbox_verification_code'); ?></label>
							<input type="text" id="email-code" name="eamil_code" class="text text-te2" />
							<input id="sendcode" type="button" value="<?php echo lang('member_gets_mailbox_validation_codet'); ?>" class="code sendcode" />
							<span id="email-code-yz"></span>
						</div>
						<div id="c_mobile_code" class="item v_mobile_phone v_item">
							<label style="margin-left: -28px;"><?php echo lang('set_new_password'); ?></label>
							<input type="password" id="email-pass" name="email-pass" class="text" />
							<span  id="email-pass-yz"></span>
						</div>
						<div id="c_mobile_code" class="item v_mobile_phone v_item">
							<label style="margin-left: -28px;"><?php echo lang('confirm_new_password'); ?></label>
							<input type="password" id="email-new-pass" name="email-new-pass" class="text" />
							<span id="email-new-pass-yz"></span>
						</div>
					</div>
					<div class="item">
						<label></label>
						<input type="button" id="btn_submit" class="btn_next" value="<?php echo lang('immediate_authentication'); ?>" />
						<input type="hidden" name="act" value="check_username" />
					</div>
					<div class="item">
						<h2 class="find_pw_tit">
							<span><?php echo lang('forget_your_account_name'); ?><a href="<?php echo __URL('SHOP_MAIN/login/register'); ?>" title="<?php echo lang('register_immediately'); ?>" style="color:#0689e1;"><?php echo lang('re_registration'); ?>&gt;&gt;</a></span>
						</h2>
					</div>
				<!--</form> -->
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	
	//点击切换方式
	$("#wayback1").click(function(){
		$("#mobile-box").show();
		$("#email-box").hide();
	});
	
	$("#wayback2").click(function(){
		$("#email-box").show();
		$("#mobile-box").hide();
	});
	
	//检测手机手机是否已注册
	$("#mobile").change(function(){
		var mobile = $("#mobile").val();
		$.ajax({
			type: "get",
			url: "<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>",
			data: { "username" : mobile },
			success: function(data){
				//alert(JSON.stringify(data));
				if(data){
					$("#mobile").css("border","1px solid #ccc");
					$("#mobileyz").hide();
				}else{
					$("#mobile").css("border","1px solid red");
					$("#mobileyz").addClass("error").text("<?php echo lang('phone_numbe_not_registered'); ?>").show();
					$("#isset_mobile").attr("value","<?php echo lang('non_existent'); ?>");
					return false;
				}
			} 
		});
	});
	
	//检测邮箱是否存在
	$("#email").change(function(){
		var email = $("#email").val();
		$.ajax({
			type: "get",
			url: "<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>",
			data: { "username" : email },
			success: function(data){
				//alert(JSON.stringify(data));
				if(data){
					$("#email").css("border","1px solid #ccc");
					$("#emailyz").hide();
				}else{
					$("#email").css("border","1px solid red");
					$("#emailyz").addClass("error").text("<?php echo lang('mailbox_is_not_registered'); ?>").show();
					$("#isset_email").attr("value","<?php echo lang('non_existent'); ?>");
					return false;
				}
			} 
		});
	});

	//发送手机邮箱验证码
	$(".sendcode").click(function(){
		if($("#wayback1").is(":checked")){
			var mobile = $("#mobile").val();
			var vertification = $("#captcha-mobile").val();
			var type ="sms";
			//验证手机号格式是否正确
			if(mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
	 			$("#mobile").trigger("focus");
	 			$('#mobile').css("border","1px solid red");
				$("#mobileyz").css("color","red").text("<?php echo lang('member_enter_correct_phone_format'); ?>");
				return false;
			}
		}else{
			var mobile = $("#email").val();
			var vertification = $("#captcha-email").val();
			var type ="email";
			//验证邮箱格式是否正确
			if(mobile.search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/) == -1){
				$("#email").trigger("focus");
				$('#email').css("border","1px solid red");
				$("#emailyz").css("color","red").text("<?php echo lang('member_enter_correct_email_format'); ?>");
				return false;
			}
		}
		//验证手机号邮箱是否已经注册
		$.ajax({
			type: "post",
			url: "<?php echo __URL('SHOP_MAIN/login/forgotvalidation'); ?>",
			data: {"type":type,"send_param":mobile,"vertification":vertification},
			async: false,
			success: function(data){

				if (data['code'] == 0) {
					if($("#wayback1").is(":checked")){
						$("#mobileyz").css("color","red").text("<?php echo lang('send_successfully'); ?>");
						$("#mobile").attr("disabled",true);
					}else{
						$("#emailyz").css("color","red").text("<?php echo lang('send_errorfully'); ?>");
						$("#email").attr("disabled",true);
					}
					time();
				}else{
					layer.msg("请检查配置是否正确");
					$(".verifyimg").attr("src","<?php echo __URL('SHOP_MAIN/captcha'); ?>");
					return false;
				}
			}
		});
	});
	
});

var wait=120;
function time() {
	if (wait == 0) {
		if($("#wayback1").is(":checked")){
			$(".sendcode").removeAttr("disabled");
			$(".sendcode").val("<?php echo lang('get_validation_code'); ?>");
		}else{
			$(".sendcode").removeAttr("disabled");
			$(".sendcode").val("<?php echo lang('get_validation_code'); ?>");
		}
		wait = 120;
	} else { 
		if($("#wayback1").is(":checked")){
			$(".sendcode").attr("disabled", 'disabled');
			$(".sendcode").val(wait+"s<?php echo lang('post_resend'); ?>");
		}else{
			$(".sendcode").attr("disabled", 'disabled');
			$(".sendcode").val(wait+"s<?php echo lang('post_resend'); ?>");
		}
		wait--; 
		setTimeout(function() {time()},1000)
	}
}

$("#btn_submit").click(function(){
	if($("#wayback1").is(":checked")){
		//手机验证
		var type = "mobile";
		var mobile = $("#mobile").val();
		var captcha_mobile = $("#captcha-mobile").val();
		var mobile_code = $("#mobile-code").val();
		var mobile_pass = $("#mobile-pass").val();
		var mobile_new_pass = $("#mobile-new-pass").val();
		
		if(mobile.length==0){
			$("#mobile").css("border-color","red");
			$("#mobileyz").css("color","red").text("<?php echo lang('enter_registered_mobile_number'); ?>");
			return false;
		}else{
			$("#mobile").css("border-color","#ccc");
			$("#mobileyz").hide();
		}
		
		<?php if($login_verify_code['pc'] == 1): ?>
		if(captcha_mobile.length==0){
			$("#captcha-mobile").css("border-color","red");
			$("#captcha-mobile-yz").css("color","red").text("<?php echo lang('please_enter_verification_code'); ?>");
			return false;
		}else{
			$("#captcha-mobile").css("border-color","#ccc");
			$("#captcha-mobile-yz").hide();
		}
		<?php endif; ?>
		
		var result = false;
		if(mobile_code.length==0){
			$("#mobile-code").css("border-color","red");
			$("#mobile-code-yz").css("color","red").text("<?php echo lang('member_enter_mobile_verification_code'); ?>");
			return false;
		}else{
			$.ajax({
				type : "post",
				url: "<?php echo __URL('SHOP_MAIN/login/ckeck_find_password_code'); ?>",
				async : false,
				data : {"send_param" : mobile_code},
				success : function(data){
					if(data['code']==0){
						$("#mobile-code").css("border-color","#ccc");
						$("#mobile-code-yz").hide();
					}else{
						$("#mobile-code").css("border-color","red");
						$("#mobile-code-yz").css("color","red").text(data['message']);
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
			$("#mobile-pass").css("border-color","red");
			$("#mobile-pass-yz").css("color","red").text("<?php echo lang('login_password_less'); ?>");
			return false;
		}else{
			$("#mobile-pass").css("border-color","#ccc");
			$("#mobile-pass-yz").hide();
		}
		if(mobile_new_pass != mobile_pass){
			$("#mobile-new-pass").css("border-color","red");
			$("#mobile-new-pass-yz").css("color","red").text("<?php echo lang('member_password_inconsistent'); ?>");
			return false;
		}else{
			$("#mobile-new-pass").css("border-color","#ccc");
			$("#mobile-new-pass-yz").hide();
		}
		
		$.ajax({
			type : "post",
			url: "<?php echo __URL('SHOP_MAIN/login/setnewpasswordbyemailormobile'); ?>",
			data : {"userInfo":mobile,"password":mobile_pass,"type":"mobile"},
			success : function(data){
				if(data['code'] == 1){
					location.href=__URL("SHOP_MAIN/login");
				}else{
					layer.msg(data['message']);
					setTimeout(function(){
						location.reload()
					},2000);
				}
			}
		});
		
	}else{
		var type = "email";
		var email = $("#email").val();
		var captcha_email = $("#captcha-email").val();
		var email_code = $("#email-code").val();
		var email_pass = $("#email-pass").val();
		var email_new_pass = $("#email-new-pass").val();
		if(email.length==0){
			$("#email").css("border-color","red");
			$("#emailyz").css("color","red").text("<?php echo lang('enter_your_registered_mailbox'); ?>");
			return false;
		}else{
			$("#email").css("border-color","#ccc");
			$("#emailyz").hide();
		}
		<?php if($login_verify_code['pc'] == 1): ?>
		if(captcha_email.length==0){
			$("#captcha-email").css("border-color","red");
			$("#captcha-email-yz").css("color","red").text("<?php echo lang('please_enter_verification_code'); ?>");
			return false;
		}else{
			$("#captcha-email").css("border-color","#ccc");
			$("#captcha-email-yz").hide();
		}
		<?php endif; ?>
		var result = false;
		if(email_code.length==0){
			$("#email-code").css("border-color","red");
			$("#email-code-yz").css("color","red").text("<?php echo lang('member_enter_mailbox_verification_code'); ?>");
			return false;
		}else{
			$.ajax({
				type : "post",
				url: "<?php echo __URL('SHOP_MAIN/login/ckeck_find_password_code'); ?>",
				async : false,
				data : {"send_param" : email_code},
				success : function(data){
					if(data['code']==0){
						$("#email-code").css("border-color","#ccc");
						$("#email-code-yz").hide();
					}else{
						$("#email-code").css("border-color","red");
						$("#email-code-yz").css("color","red").text(data['message']);
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
			$("#email-pass").css("border-color","red");
			$("#email-pass-yz").css("color","red").text("<?php echo lang('login_password_less'); ?>");
			return false;
		}else{
			$("#email-pass").css("border-color","#ccc");
			$("#email-pass-yz").hide();
		}
		if(email_new_pass != email_pass){
			$("#email-new-pass").css("border-color","red");
			$("#email-new-pass-yz").css("color","red").text("<?php echo lang('member_password_inconsistent'); ?>");
			return false;
		}else{
			$("#email-new-pass").css("border-color","#ccc");
			$("#email-new-pass-yz").hide();
		}
		$.ajax({
			type : "post",
			url: "<?php echo __URL('SHOP_MAIN/login/setnewpasswordbyemailormobile'); ?>",
			data : {"userInfo":email,"password":email_pass,"type":"email"},
			success : function(data){
				if(data['code'] == 1){
					location.href=__URL("SHOP_MAIN/login");
				}else{
					layer.msg(data['message']);
					setTimeout(function(){
						location.reload()
					},2000);
				}
			}
		})
	}
})
</script>

<div class="site-footer">
	<div class="footer-related">
		<div class="footer-info">
			<div class="info-text">
				<!-- 底部导航 -->
				<div class="txt" id="bottom_copyright">
					<p style="color: #666;">
					<span id="copyright_desc"></span>
					<br><a href="http://www.niushop.com.cn" target="_blank" style="text-decoration: none;color:#666;" id="copyright_companyname"></a>
						<label id="copyright_meta"></label>
					</p>
                    <p style="display: none;" id="web_gov_record">
                        <a href="javascript:;" target="_blank"><img src="__STATIC__/images/gov_record.png" alt="" style="width: 20px;height: 20px;"><span style="height: 20px;line-height: 20px;display: inline-block;margin-left: 5px;font-size: 12px;"></span></a>
                    </p>
				</div>
			</div>
		</div>	
	</div>
</div>     
     
<!-- <div class="site-footer">
    <div class="footer-related">
  		    <div class="footer-info clearfix">
      <div class="info-text">
      	        <p class="nav_bottom">
                                    <a href="http://demo.coolhong.com/" target="_blank">关于我们</a><em >|</em>
                        <a href="http://demo.coolhong.com/" target="_blank">联系我们</a><em >|</em>
                        <a href="apply_index.php" >商家入驻</a><em >|</em>
                        <a href="#" >友情链接</a><em >|</em>
                        <a href="#" >手机商城</a><em >|</em>
                        <a href="#" >销售联盟</a><em >|</em>
                        <a href="#" >商城社区</a><em >|</em>
                        <a href="#" >企业文化</a><em >|</em>
                        <a href="help.php" >帮助中心</a><em >|</em>
                        <a href="message.php" >留言板</a><em style="display:none">|</em>
                                            </p>
                                                                                                                                           	</p>
      </div>
    </div>
<img src="api/cron.php?t=" alt="" style="width:0px;height:0px;display:none;" />

<script type="text/javascript">
Ajax.call('api/okgoods.php', '', '', 'GET', 'JSON');
//预售
Ajax.call('pre_sale.php?act=check_order', '', '', 'GET', 'JSON');
</script>
<script type="text/javascript" src="themes/ecshop_jdbuy/js/base.js" ></script>
  </div>
</div> -->

</body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
var username_chana = "- 用户名不能有中文。";
var msg_uname_length = "- 用户名不能超过 20 个字符。";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "- 用户名不能为空";
var msg_un_chine = "- 用户名不能为中文";
var msg_un_length = "- 用户名不得超过14个字符";
var msg_un_format = "- 用户名含有非法字符";
var msg_un_registered = "- 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "- 邮件地址不能为空";
var msg_email_registered = "- 邮箱已存在";
var msg_email_format = "- 邮件地址不合法";
var msg_mobile_phone_blank = "- 手机号码不能为空";
var msg_mobile_phone_registered = "- 手机号码已存在";
var msg_mobile_phone_format = "- 手机号码不是一个有效号码";
var msg_blank = "- 不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "* 密码中不能包含空格";
var msg_email_code_blank = "- 邮箱验证码不能为空";
var msg_mobile_phone_code_blank = "- 手机验证码不能为空";
var msg_captcha_blank = "- 验证码不能为空";
var msg_register_type_blank = "- 注册类型不能为空";
var username_exist = "用户名 %s 已经存在";
</script>
</html>
