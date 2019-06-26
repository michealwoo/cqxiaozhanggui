<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"template/wap/default_new/Pay/payCallback.html";i:1545820112;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title><?php echo lang('pay'); ?></title>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
body{padding:0;margin:0;}
article{
	text-align: center;
	margin:20px auto;
}
article h3{
	font-weight: normal;
	color:#373737;
	font-family: "<?php echo lang('microsoft_yahei'); ?>", "Helvetica Neue", Helvetica, Arial,sans-serif;
}
article p{
	color:#00C12C;
	font-family: "<?php echo lang('microsoft_yahei'); ?>", "Helvetica Neue", Helvetica, Arial,sans-serif;
}
article button{
	border:0;
	background: #01C12D;
	color:#ffffff;
	border-radius: 3px;
	padding:10px;
	width:90%;
	font-size:16px;
	outline: none;
	font-family: "<?php echo lang('microsoft_yahei'); ?>", "Helvetica Neue", Helvetica, Arial,sans-serif;
	margin:15px 0;
}
.other-view{max-width: 90%;width:90%;margin-top:30px;}
</style>
</head>
<body>
<?php if($status==-1): ?>
<div style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,0.8);text-align: center;">
<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/other_view.png" class="other-view "/>
</div>
<?php else: ?>
<article>
	<?php if($status==1): ?>
		<div class="pay-block">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_success.png"/>
		</div>
		<h3><?php echo lang('the_payment_successful'); ?></h3>
		<?php if(!(empty($order_no) || (($order_no instanceof \think\Collection || $order_no instanceof \think\Paginator ) && $order_no->isEmpty()))): ?>
		<p><?php echo lang('order_number'); ?><?php echo $order_no; ?></p>
		<?php endif; else: ?>
		<div class="pay-block">
			<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_error.png"/>
		</div>
		<h3><?php echo lang('payment_failed'); ?></h3>
		<?php if(!(empty($order_no) || (($order_no instanceof \think\Collection || $order_no instanceof \think\Paginator ) && $order_no->isEmpty()))): ?>
		<p style="color:#FF3C3C;"><?php echo lang('order_number'); ?><?php echo $order_no; ?></p>
		<?php endif; endif; ?>
	<button onclick="enterOrderList()"><?php echo lang('access_member_center'); ?></button>
<?php endif; ?>
</article>
<script>
function enterOrderList(){
	if($(window).width()<768){
		//手机端
		location.href = '<?php echo __URL('APP_MAIN/member'); ?>';
	}else{
		//PC端
		location.href = '<?php echo __URL('SHOP_MAIN/member'); ?>';
	}
}

</script>
</body>
</html>