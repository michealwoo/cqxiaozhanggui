<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:43:"template/wap/default_new/Pay/weixinPay.html";i:1545820112;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo lang('in_payment'); ?>...</title>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript">
//调用微信JS api 支付
function jsApiCall(){
	WeixinJSBridge.invoke('getBrandWCPayRequest', <?php echo $jsApiParameters; ?>,
		function(res){
			WeixinJSBridge.log(res.err_msg);
			if(res.err_msg == "get_brand_wcpay_request:ok" ) {
				window.location.href="<?php echo __URL('APP_MAIN/pay/wchatpayresult?msg=1&out_trade_no='.$out_trade_no); ?>";
			}else if(res.err_msg == "get_brand_wcpay_request:fail"){
				alert(JSON.stringify(res));
				window.location.href="<?php echo __URL('APP_MAIN/pay/wchatpayresult?msg=0&out_trade_no='.$out_trade_no); ?>";
			}else{
				window.location.href="<?php echo __URL('APP_MAIN/pay/wchatpayresult?msg=0&out_trade_no='.$out_trade_no); ?>";
			}
			// 使用以上方式判断前端返回,微信团队郑重提示：res.err_msg 将在用户支付成功后返回 ok，但并不保证它绝对可靠。
		}
	);
}

function WeixinPay(){
	var retval = <?php echo $jsApiParameters; ?>;
	if(retval !=null && retval.return_code == "FAIL"){
		alert(JSON.stringify(retval));
	}else{
		if(typeof WeixinJSBridge == "undefined"){
			if(document.addEventListener ){
				document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
			}else if (document.attachEvent){
				document.attachEvent('WeixinJSBridgeReady', jsApiCall);
				document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
			}
		}else{
			jsApiCall();
		}
	}
}
WeixinPay();
</script>
</head>
<body></body>
</html>