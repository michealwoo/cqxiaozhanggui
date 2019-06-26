<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"template/adminblue/Member/newPath.html";i:1545820112;s:28:"template/adminblue/base.html";i:1545820112;s:45:"template/adminblue/controlCommonVariable.html";i:1545820112;s:32:"template/adminblue/urlModel.html";i:1545820112;s:34:"template/adminblue/pageCommon.html";i:1545820112;s:34:"template/adminblue/openDialog.html";i:1545820112;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="shortcut icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<link rel="stylesheet" type="text/css" href="ADMIN_CSS/selectric.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #126AE4;border-color: #126AE4;}
	#copyright_meta a{color:#333;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/layer/layer.js"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<script src="ADMIN_JS/jquery.selectric.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
	
	<script>
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var ADDONS = "__ADDONS__";
	var STATIC = "__STATIC__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
	var UPLOADGOODSVIDEO = "<?php echo constant('GOODS_VIDEO_PATH'); ?>";//存放商品视频
	var UPLOADFILE = "<?php echo constant('UPLOAD_FILE'); ?>";//存放文件
	var UPLOADWATERMARK = "<?php echo constant('UPLOAD_WATERMARK'); ?>";//存放水印图片
</script>
	
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap/css/bootstraps.css"></script>
<style>
.cal-wrapper{position:fixed;_position:absolute;z-index:10000000;width:100%;top:0}
.cal-wrapper .cal{margin:10px auto;width:913px;padding:27px;color:#666;background:#fff;box-shadow:0 0 10px #999;font-family:"Microsoft YaHei",tahoma,arial,'Hiragino Sans GB','\5b8b\4f53',sans-serif}
.cal-wrapper .cal h2{position:relative;margin-bottom:15px;line-height:1;font-size:16px}
.cal-wrapper .cal-close{position:absolute;width:19px;height:19px;right:0;top:0;background:url(//img.alicdn.com/tps/i4/TB1rRjfGpXXXXXDXpXXOuD4FpXX-19-19.png) no-repeat 0 0;cursor:pointer}
.cal-wrapper .cal-table{margin:0 1px;overflow:hidden}
.cal-wrapper .cal-table table{width:913px;margin:0 0 -1px -1px}
.cal-wrapper .cal th{height:26px;line-height:26px;border-bottom:2px solid #A5a5a5;font-style:normal;font-family:tahoma,arial,'Hiragino Sans GB','\5b8b\4f53',sans-serif}
.cal-wrapper .cal td{width:129px;height:129px;border:1px solid #D2D2D2;text-align:center}
.cal-wrapper .cal-item{position:relative;width:123px;height:123px;margin:3px;cursor:pointer}
.cal-wrapper .no-record .cal-item{cursor:auto}
.cal-wrapper .first-row .cal-item:after{content:' ';position:absolute;z-index:2;right:-5px;top:-3px;width:2px;height:21px;background:#fff}
.cal-wrapper td img{float:left;width:123px;height:123px}
.cal-wrapper .multi-pics img{width:61px;height:61px}
.cal-wrapper .multi-pics .multi-img1{margin:0 1px 1px 0}
.cal-wrapper .multi-pics .multi-img2{margin:0 0 1px 0}
.cal-wrapper .multi-pics .multi-img3{margin:0 1px 0 0}
.cal-wrapper .cal-day{position:absolute;z-index:2;left:42px;top:42px;width:37px;height:37px;line-height:37px;text-align:center;font-family:Arial;font-size:20px;border-radius:20px;color:#DDD;background:url(//img.alicdn.com/tps/i2/TB1m46wGFXXXXc9XVXX7spZGFXX-38-38.png) no-repeat 0 0;background:rgba(255,255,255,.7)}
.cal-wrapper .today .cal-day{width:50px}
.cal-wrapper .last-thirty .cal-day{color:#333}
.cal-wrapper .cal-day span{color:#F95726;font-size:20px;font-weight:700;font-family:"Microsoft YaHei",tahoma,arial,'Hiragino Sans GB','\5b8b\4f53',sans-serif}
.cal-wrapper .cal-count{position:absolute;z-index:3;left:-6px;top:-6px;width:135px;height:135px;color:#fff;background:url(//img.alicdn.com/tps/i3/TB1gTDRGFXXXXagXXXX301JJFXX-4-4.png) 0 0;background:rgba(0,0,0,.5);cursor:pointer;pointer-events:none;font-family:simsun;transition:opacity .4s ease-in;font-family:Helvetica,Tahoma,Arial,STXihei,"华文细黑","Microsoft YaHei","微软雅黑",SimSun,"宋体",Heiti,"黑体",sans-serif;display:none}
.cal-wrapper .cal-item:hover .cal-count{display:block}
.cal-wrapper .cal-count span{display:block;font-family:Arial;font-size:36px;text-indent:-3px}
.cal-wrapper .cal-count .cal-date{height:42px;font-size:12px;overflow:hidden;line-height:42px;text-shadow:0 0 5px #fff,0 0 10px #fff,0 0 15px #fff,0 0 5px #F95726,0 0 5px #F95726}

#content{background-color:#f7f7f7}
.ie6-notice{background:#FFFEB8;line-height:23px;color:#333;text-align:center}
.site-nav .site-nav-bd{width:1190px;margin:0 auto;white-space:nowrap}

.no-data{background:url(//img.alicdn.com/tps/i2/TB1N9VqFVXXXXa2XFXXMKAcVXXX-1200-424.png) no-repeat 50% 50%;height:424px;width:100%;margin-top:40px;margin-bottom:40px}
.data-loading{width:50px;height:50px;margin:0 auto;background:url(//img.alicdn.com/tps/i1/T1cKm3XkRpXXXXXXXX-48-48.gif) no-repeat center bottom}
.g_price span{color:#f40;margin-right:1px}
.g_price strong{font-family:verdana,arial}
.g_price strong b{font-weight:700;margin-left:3px}
.g_price-highlight span{color:#f40}
.g_price-reversed span,.g_price-reversed strong{color:#fff}
.g_price-original span{color:#b0b0b0}
.g_price-original strong{color:#b0b0b0;font-weight:400}
.g_price-original strong{text-decoration:line-through}
#server-num{color:#fff;text-align:center;font-size:12px}
.clearfix{*zoom:1}
.clearfix:after,.clearfix:before{display:table;content:"";line-height:0}
.clearfix:after{clear:both}
.filter-bar.fixed{position:fixed;z-index:10;top:0;left:0}
.filter-bar{top:103px;width:100%;border-bottom:1px solid #DFDFDF;background-color:#fff}
.filter-bar .filter-bar-wrap{margin:0 auto;height:50px;font-size:16px;line-height:50px;color:#3c3c3c}
.filter-bar .filter-bar-wrap div{position:relative}
.filter-bar .split-v{position:absolute;z-index:1;top:16px;left:13px;height:17px;width:1px;background:#A0A0A0}
.filter-bar .cal-mode{float:left;padding-right:16px}
.filter-bar .cal-mode-btn{text-decoration:none;cursor:pointer;padding-right:20px;background:url(//img.alicdn.com/tps/i3/TB1CMmdGFXXXXXfaXXXF4HM.VXX-13-15.png) no-repeat right center}
.filter-bar .cat-selector{float:left;padding-right:15px;cursor:pointer;width:161px;*z-index:100}
.filter-bar .cat-selector .current-cat{padding-left:12px;padding-right:30px;height:45px;line-height:40px;margin-top:3px;background:#fff;position:relative;border:1px solid #fff;text-align:center}
.filter-bar .cat-selector .current-cat .name{white-space:nowrap;display:block;overflow:hidden;text-overflow:ellipsis;text-align:left;padding:0 25px}
.filter-bar .cat-selector .current-cat .arrow{background:url(//img.alicdn.com/tps/i3/TB1jEKuFVXXXXXPXVXXkplFWXXX-205-267.png) no-repeat 0 -248px;width:9px;height:5px;display:block;position:absolute;right:40px;top:17px;*overflow:hidden}
.filter-bar .cat-selector .cats{visibility:hidden;position:absolute;border:1px solid #ccc;width:159px;margin-top:-1px;background:#fff;z-index:11}
.filter-bar .cat-selector .cats .J_Scroll_Cats{overflow:auto; min-height:0; max-height:200px;width:159px;}
.filter-bar .cat-selector .cats .J_Scroll_Cats::-webkit-scrollbar{width: 1px; height: 10px; background-color: #ccc;}  
/*定义滚动条轨道 内阴影+圆角*/  
.filter-bar .cat-selector .cats .J_Scroll_Cats::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1); background-color: #c1e2f1;}  
/*定义滑块 内阴影+圆角*/  
.filter-bar .cat-selector .cats .J_Scroll_Cats::-webkit-scrollbar-thumb {-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3); background-color: #1f7ebe;}

.filter-bar .cat-selector .cats .J_Scroll_Cats:last-child{padding-bottom: 17px;}
.filter-bar .cat-selector .cats .cat{display:block;color:#666;text-decoration:none;height:30px;line-height:30px;padding:0 18px;margin:0 5px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.filter-bar .cat-selector .cats .cat:hover{background:#c7e9ff;color:#0689e1}
.filter-bar .cat-selector.checked .current-cat{z-index:20;color:#0689e1;border:1px solid #ccc;border-bottom:0;margin-bottom:-1px}
.filter-bar .cat-selector.checked .current-cat .arrow{background-position:0 -262px}
.filter-bar .cat-selector.checked .cats{visibility:visible}
.filter-bar .all-date{display:none;float:left;margin-left:30px;cursor:pointer}
.filter-bar .all-date .split-v{left:-21px}
.filter-bar .promotion-box{float:left;padding-left:25px;cursor:pointer}
.filter-bar .promotion-box .split-v{left:-26px}
.filter-bar .promotion-box .check-box{position:absolute;width:16px;height:16px;background:url(//img.alicdn.com/tps/i3/TB1jEKuFVXXXXXPXVXXkplFWXXX-205-267.png) no-repeat 0 -127px;margin-top:16px;margin-left:-25px;*margin-top:2px}
.filter-bar .promotion-box.checked{color:#ff4403}
.filter-bar .promotion-box.checked .check-box{background-position:0 -80px}
.filter-bar .enter-del{display:block;float:right;width:83px;height:30px;line-height:30px;margin-top:10px;padding-left:37px;font-size:16px;background:url(//img.alicdn.com/tps/i2/TB18.KGFVXXXXatXFXXa0iIFXXX-15-79.png) no-repeat 18px 7px;color:#999;*overflow:hidden;text-decoration:none}
.edit-status .filter-bar .enter-del,.filter-bar .enter-del:hover{color:#fff;background-color:#999;background-position:18px -53px}
.filter-bar .del-icon{width:170px;height:23px;display:block}
.cal-mode .cat-selector{display:none}
.cal-mode .promotion-box{display:none}
.cal-mode .all-date{display:inline-block}

.side-area-box{display:none;position:absolute;top:0;right:0;width:115px;border:1px solid #D2D2D2;border-top:none;color:#666;background:#fff}
.side-area-box .tab-nav{background:#E5E5E5}
.side-area-box .tab-nav li{position:relative;float:left;width:57px;border:1px solid #E5E5E5;border-bottom-color:#D2D2D2;text-align:center;height:25px;line-height:25px;margin-left:-1px;margin-right:-1px}
.side-area-box .tab-nav li.selected{width:58px;z-index:2;background:#fff;border-color:#D2D2D2 #D2D2D2 #fff #D2D2D2}
.side-area-box .tab-nav li a{color:#666;text-decoration:none}
.side-area-box dl{line-height:1;padding:15px 2px 4px 2px;margin:0 3px;-webkit-font-smoothing:auto}
.side-area-box dl dt{margin-bottom:13px}
.side-area-box dl dd{position:relative}
.side-area-box dl dd a{position:relative;display:block}
.side-area-box dl dd a .similar-link{position:absolute;display:none;left:0;bottom:0;height:24px;line-height:24px;width:100%;text-align:center;color:#fff;background:#3E3E3E}
.side-area-box dl dd a:hover .similar-link{display:block}
.side-area-box dl dd img{width:105px;height:105px}
.side-area-box dl dd .read-num{display:block;margin:7px 0;color:#999}
.side-area-box dl dd .price{display:block;margin-bottom:15px;font-family:Verdana}
.side-area-box dl+dl{border-top:1px solid #D2D2D2}
.cal-mode .side-area-box{display:none}

.has-sidebar #J_miniCartPlugin{display:none}
.goods-page{position:relative; color:#999;padding-bottom: 40px;} /* margin:19px auto 0;width:1190px; */
.goods-page.more-top{margin-top:70px}
.goods-page .update-info{color:#666;width:1190px;margin:0 auto 10px;font-size:12px;font-family:simsun,aria}
.goods-page .update-info span{display:inline-block;margin-left:16px;height:22px;line-height:22px;background:#F1904B;color:#fff;padding:0 10px;border-radius:10px}
.goods-page .update-info a{margin-left:10px;color:#fff}
.goods-page .goods-delete i{display:block;width:17px;height:22px;position:absolute;left:14px;top:9px;background:url(//img.alicdn.com/tps/i3/TB1jEKuFVXXXXXPXVXXkplFWXXX-205-267.png) no-repeat -33px -103px}
.goods-page .goods .goods-date{position:relative;height:40px;line-height:40px;font-family:arial;font-size:12px;color:#666}
.goods-page .goods .goods-date span{padding-right:10px;background:#f7f7f7;position:relative;z-index:2;white-space:nowrap}
.goods-page .goods .goods-date .date-desc{font-size:16px;font-weight:700}
.goods-page .goods .goods-date i{font-style:normal;color:#333;vertical-align:0}
.goods-page .goods .goods-date .month-lite{font-size:24px}
.goods-page .goods .goods-date .day-lite{font-size:24px;position:relative}
.goods-page .goods .goods-date .day-lite del{position:absolute;display:none;left:100%;width:78px;top:4px;height:22px;line-height:22px;background:url(//img.alicdn.com/tps/i3/TB1gTDRGFXXXXagXXXX301JJFXX-4-4.png) 0 0;background:rgba(0,0,0,.7);color:#fff;font-size:12px;text-align:center;text-decoration:none;cursor:pointer}
.goods-page .goods .goods-date .day-lite del:hover{background:#ff4501}
.goods-page .goods .goods-date s.line{position:absolute;top:23px;right:0;width:231px;height:1px;line-height:1px;background:#ccc}
.goods-page .goods .first-box .goods-date span{right:36px;padding-left:36px;zoom:1}
.goods-page .goods .good-title{font-size:13px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.goods-page .goods .good-title a{color:#666;text-decoration:none}
.goods-page .goods .good-desc-location{height:20px;overflow:hidden}
.goods-page .goods-price{position:relative}
.goods-page .goods-price .icon{display:block;height:12px;font-family:simsun,arial;float:right;background:#f38300;color:#fff;line-height:12px;padding:1px 2px;overflow:hidden;text-decoration:none;white-space:nowrap;width:58px;position:absolute;right:0}
.goods-page .goods-price .icon.icon-mob{width:58px;background-color:#5da500}
.goods-page .goods-price .icon:hover{width:auto}
.goods-page .goods-price .icon .yen{font-family:arial,sans-serif;padding:0 1px}
.goods-page .goods.first-child .goods-date span{line-height:17px;top:4px;*line-height:32px}
.goods-page .goods.first-child .goods-date .month-lite{font-size:30px;font-weight:700}
.goods-page .goods.first-child .goods-date .day-lite{font-size:30px;font-weight:700}
.goods-page .goods.first-child .goods-date .day-lite del{top:9px;width:85px;margin-left:-1px}
.goods-delete-mask{display:none}
.cal-mode .edit-status .goods-page .goods .goods-date .day-lite del{display:none}
.no-batch-delete .edit-status .goods-page .goods .goods-date .day-lite del{display:none}
.edit-status .date-info{margin-top:-46px;*margin-top:0}
.edit-status .goods-page .goods .goods-date .day-lite del{display:block}
.edit-status .goods-delete{z-index:2;right:76px;top:76px;cursor:pointer;visibility:visible!important}
.edit-status .goods-delete-mask{content:' ';position:absolute;display:block;left:0;top:0;width:100%;height:100%;background:#fff;opacity:.5;pointer-events:none;cursor:pointer}

.goods-area-box{position:relative;overflow:hidden;} /* width:1056px; */
.goods-area-box .line-mask{position:absolute;left:0;*top:0;width:16px;background:#f7f7f7;pointer-events:none;height:100%;z-index:3}
.goods-area-box .goods{position:relative;float:left;_display:inline;width:195px;height:280px;margin-left:16px;text-align:left;margin-bottom:25px}
.goods-area-box *{-webkit-backface-visibility:hidden}
.goods-area-box .goods-pic{width:100%;height:195px;background:#fff;position:relative;overflow:hidden}
.goods-area-box .goods-pic .goods-delete,.goods-area-box .goods-pic .goods-status{visibility:hidden}
.goods-area-box .goods-pic .goods-status-show{visibility:visible}
.goods-area-box .goods-pic-hover .goods-status-show{visibility:hidden}
.goods-area-box .goods-pic-hover .cat-only-status,.goods-area-box .goods-pic-hover .goods-delete{visibility:visible}
.goods-area-box .goods-pic-box{display:table}
.goods-area-box .goods-pic-link{display:table-cell;width:195px;height:195px;vertical-align:middle;*font-size:196px;text-align:center;zoom:1}
.goods-area-box .goods-img{max-width:195px;max-height:195px;margin:0 auto;margin:0\9}
.goods-area-box .goods-delete,.goods-area-box .goods-status{position:absolute}
.goods-area-box .goods-delete{top:0;right:0;z-index:2;display:inline-block;height:44px;width:44px;background:url(//img.alicdn.com/tps/i3/TB1gTDRGFXXXXagXXXX301JJFXX-4-4.png) 0 0;background:rgba(0,0,0,.6);color:#fff}
.goods-area-box .goods-delete:hover{background-color:#0689e1}
.goods-area-box .goods-status{left:0;bottom:0;color:#666;height:30px;line-height:30px;width:100%;filter:progid:DXImageTransform.Microsoft.gradient(enabled='true', startColorstr='#CCFFFFFF', endColorstr='#CCFFFFFF');background:rgba(255,255,255,.8);*background:#fff;_filter:Alpha(opacity=80)}
:root .goods-area-box .goods-status{filter:progid:DXImageTransform.Microsoft.gradient(enabled='true', startColorstr='#00FFFFFF', endColorstr='#00FFFFFF')}
.goods-area-box .goods-status .desc{display:block;text-align:center;color:#333;text-decoration:none;height:30px;overflow:hidden}
.goods-area-box .goods-status .view_count{display:inline-block;_zoom:1;_display:inline;color:#414141;background:#fff;opacity:.7;filter:alpha(opacity=70);width:98px;overflow:hidden;text-align:center}
.goods-area-box .cat-only-status{z-index:10}
.goods-area-box .goods-status .cat-only{cursor:pointer;display:inline-block;_zoom:1;_display:inline;text-align:center;color:#fff;text-decoration:none;background-color:#ea6021;opacity:.7;filter:alpha(opacity=70);width:97px;text-overflow:ellipsis;white-space:nowrap}
.goods-area-box .goods-status .morelink{color:#f57a69;float:right;margin-right:15px}
.goods-area-box .goods-attr{height:50px;padding:10px 10px 10px 10px;line-height:20px;background:#fff}
.goods-area-box .goods-attr .hongbao2015{float:right;width:16px;height:16px;background-position:0 0;background:url(//img.alicdn.com/tps/TB174bnJFXXXXbHXFXXXXXXXXXX-16-16.png) no-repeat;background-image:-webkit-image-set(url(//img.alicdn.com/tps/TB174bnJFXXXXbHXFXXXXXXXXXX-16-16.png) 1x,url(//img.alicdn.com/tps/TB1VWbwJFXXXXbYXpXXXXXXXXXX-32-32.png) 2x);background-image:-moz-image-set(url(//img.alicdn.com/tps/TB174bnJFXXXXbHXFXXXXXXXXXX-16-16.png) 1x,url(//img.alicdn.com/tps/TB1VWbwJFXXXXbYXpXXXXXXXXXX-32-32.png) 2x);background-image:-ms-image-set(url(//img.alicdn.com/tps/TB174bnJFXXXXbHXFXXXXXXXXXX-16-16.png) 1x,url(//img.alicdn.com/tps/TB1VWbwJFXXXXbYXpXXXXXXXXXX-32-32.png) 2x);background-image:-o-image-set(url(//img.alicdn.com/tps/TB174bnJFXXXXbHXFXXXXXXXXXX-16-16.png) 1x,url(//img.alicdn.com/tps/TB1VWbwJFXXXXbYXpXXXXXXXXXX-32-32.png) 2x)}
.goods-area-box .g_price{color:#F64000;font-size:14px;font-family:Verdana;float:left}
.goods-area-box .goods-attr .g_price-original{font-family:Verdana;font-size:12px;margin-left:5px}
.goods-area-box .goods-num{color:#b0b0b0;padding-top:7px}
.goods-area-box .goods-num .dealing{float:left}
.goods-area-box .goods-num .match-recom{text-align:center}
.goods-area-box .goods-num .match-recom a{display:inline-block;*display:inline;*zoom:1;width:65px;height:20px;line-height:20px;text-align:center;color:#999;font-size:12px;border:1px solid #D7D7D7;text-decoration:none}
.goods-area-box .goods-num .match-recom-item:hover{border-color:#FF4600;background-color:#FF4600;color:#fff}
.goods-area-box .goods-attr .address{display:inline-block}
.goods-area-box .goods-attr .extra-icon{margin-right:25px}
</style>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<article class="ns-base-article">

	<header class="ns-base-header">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-search">
			<div class="nav-menu js-nav">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" />
			</div>
			<div class="ns-navigation-management">
				<div class="ns-navigation-title">
					<h4>导航管理</h4>
					<span>x</span>
				</div>
				<div style="height:40px;"></div>
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
				<dl>
					<dt><?php echo $nav['data']['module_name']; ?></dt>
					<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
					<dd>
						<a href="<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>"><?php echo $nav_sub['module_name']; ?></a>
					</dd>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="ns-search-block">
				<i class="fa fa-search" title="搜索"></i>
				<span>搜索</span>
				<div class="mask-layer-search">
					<input type="text" id="search_goods" placeholder="搜索" />
					<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
				</div>
			</div>
		</div>
		<nav>
			<ul>
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div class="ns-base-tool">
			<i class="i-home"  title="前台首页"><a href="<?php echo __URL('SHOP_MAIN'); ?>" target="_blank"></a></i>
			<i class="i-close" title="退出登录"><a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>"></a></i>
			<i class="ns-vertical-bar"></i>
			<div class="ns-help">
				<div class="logo">
				<?php if($user_headimg != ''): ?>
				<img src="<?php echo __IMG($user_headimg); ?>"/>
				<?php else: ?>
				<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
				<?php endif; ?>
				</div>
				<span><?php echo $user_name; ?></span>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li>
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
					</li>
					<li title="清理缓存" onclick="delcache()">
						<img src="__STATIC__/blue/img/clear_the_cache.png"/>
						<a href="javascript:;">清理缓存</a>
					</li>
					<li title="加入收藏" onclick="addFavorite()">
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="javascript:;">加入收藏</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<aside class="ns-base-aside">
		<div class="ns-main-block">
			
			<h3 style="margin-top:50px;">
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<span class="<?php echo $per['module_name']; ?>"><?php echo $per['module_name']; ?></span>
					<i class="fa fa-caret-down"></i>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</h3>
			
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- 快捷菜单列表 -->
					<?php if($is_show_shortcut_menu == 1): if(is_array($shortcut_menu_list) || $shortcut_menu_list instanceof \think\Collection || $shortcut_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shortcut_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$menu['url']); ?>';" title="<?php echo $menu['module_name']; ?>"><?php echo $menu['module_name']; ?></li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
				<!-- 快捷菜单设置按钮 -->
				<?php if($is_show_shortcut_menu == 1): ?>
				<div class="shortcut-menu" onclick="show_shortcut_menu()">
					<span></span>
					常用功能
				</div>
				<?php endif; ?>
			</nav>
			
			<div style="height:50px;"></div>
			
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
<!-- 					<p> -->
<!-- 						<span id="copyright_desc"></span> -->
<!-- 						<br/> -->
<!-- 						<a id="copyright_companyname" style="color: #333" target="_blank"></a> -->
<!-- 						<br/> -->
<!-- 						<span id="copyright_meta"></span> -->
<!-- 					</p> -->
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		
		
		
		<div style="position:relative;margin:0;">
			<!-- 面包屑导航 -->
			<?php if(!isset($is_index)): ?>
			<div class="breadcrumb-nav">
				<a href="<?php echo __URL('ADMIN_MAIN'); ?>"><?php echo $title_name; ?></a>
				<?php if($frist_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<a href="<?php echo __URL('ADMIN_MAIN/'.$frist_menu['url']); ?>"><?php echo $frist_menu['module_name']; ?></a>
				<?php endif; if($secend_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
					<a href="javascript:;" style="color:#999;"><?php echo $secend_menu['module_name']; ?></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- 三级导航菜单 -->
			
				<?php if(count($child_menu_list) > 1): ?>
				<nav class="ns-third-menu">
					<ul>
					<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
							<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php else: ?>
							<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</nav>
				<?php endif; ?>
			
			<div class="right-side-operation">
				<ul>
					
					
<!-- 					<?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?> style="display:block;" -->
					<li>
						<a class="js-open-warmp-prompt" href="javascript:;" data-menu-desc=''><i class="fa fa-question-circle"></i>&nbsp;提示</a>
						<div class="popover">
							<div class="arrow"></div>
							<div class="popover-content">
								<div>
									<?php if($secend_menu['desc']): ?>
									<h4>操作提示</h4>
									<p><?php echo $secend_menu['desc']; ?></p>
									<hr/>
									<?php endif; ?>
									<h4>功能提示</h4>
									<p class="function-prompts"></p>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		
		<!-- 操作提示 -->
		
<!-- 		<?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?> -->
		<div class="ns-warm-prompt" style="display:none;">
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
<!-- 					{1block name="alert_info"} -->
<!-- 					<i class="fa fa-info-circle"></i> -->
<!-- 					<span class="operating-hints">操作提示</span> -->
<!-- 						<?php if($secend_menu['desc']): ?> -->
<!-- 						<span><?php echo $secend_menu['desc']; ?></span> -->
<!-- 						<?php endif; ?> -->
<!-- 					{1/block} -->
				</h4>
			</div>
		</div>
		
		
		<div class="ns-main">
			
<div id="page">
	<div id="content" class="main-cont clearfix">
		<div class="filter-bar">
			<div class="filter-bar-wrap">
<!-- 				<div class="cal-mode"> -->
<!-- 					<a class="cal-mode-btn" data-spm-click="gostr=/tbgltjph;locaid=d1">足迹日历</a> -->
<!-- 				</div> -->
				<div class="cat-selector check3ed clearfix">
					<div class="current-cat">
						<span class="name">全部类目</span>
<!-- 						<span class="arrow"></span> -->
					</div>
					<div class="cats">
						<p class="J_Scroll_Cats"></p>
					</div>
<!-- 					<i class="split-v"></i> -->
				</div>
				<div class="all-date J_back_allDate">全部日期<i class="split-v"></i></div>
				<a href="#" class="enter-del J_EditBtn">批量删除</a>
			</div>
		</div>

		<div class="main-data goods-page">
			<div class="side-area-box" id="newhot" style="display: none;">
				<ul class="tab-nav ks-switchable-nav clearfix">
					<li class="tab1 selected"><a href="#">最热</a></li>
					<li class="tab2"><a href="#">最新</a></li>
				</ul>
				<div class="tab-content ks-switchable-content">
					<div class="tab-pannel" style="display: block;">
				
					</div>
				</div>
			</div>
			<div class="main-data-wrap goods-area-box">
					<div class="line-mask"></div>
			</div>
		</div>
		<div class="data-loading" style="display: none;"></div>
	</div>
</div>
<input type="hidden" id="member_id" value="<?php echo $member_id; ?>"/>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
 	//console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
 			//console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

 		//console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
//		console.error(e);
 		//console.log("当前页面没有分页，进行还原操作");
 		//console.log($.cookie('page_cookie'));
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
	
</article>

<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="tip-container">
		<span class="inner"></span>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
			msgType : type
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
			msgType : type
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
	window.onload = function(){

	}
$(function(){
	
	$(".ns-third-menu ul .btn-more").toggle(
		function(){
			$(".ns-third-menu ul").animate({height:"84px"},300);
		},
		function(){
			$(".ns-third-menu ul").animate({height:"42px"},300);
		}
	);
	
	//公共下拉框
	$('.select-common').selectric();
	
	//公共复选框点击切换样式
	$(".checkbox-common").live("click",function(){
		var checkbox = $(this).children("input");
		if(checkbox.is(":checked")) $(this).addClass("selected");
		else $(this).removeClass("selected");
	});
	
	//鼠标浮上查看预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseover",function(){
		var curr = $(this);
		var src = curr.attr("data-src");
		if(src){
			//alert(src);
			var contents = '<img src="'+src+'" style="width: 100px;height: auto;display:block;margin:0 auto;">';
			//鼠标每次浮上图片时，要销毁之前的事件绑定
			curr.popover("destroy");
			
			//重新配置弹出框内容
			curr.popover({ content : contents });

			//显示
			curr.popover("show");
		}
	});
	
	//鼠标离开隐藏预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseout",function(){
		var curr = $(this);
		//隐藏
		if($(".popover.top").is(":visible") && curr.attr("data-src")) curr.popover("hide");
	});

	//公共单选框点击切换样式
	$(".radio-common").live("click",function(){
		var radio = $(this).children("input");
		var name = radio.attr("name");
		if(radio.is(":checked")){
			$(".radio-common>input[type='radio'][name='" + name + "']").parent().removeClass("selected");
			$(this).addClass("selected");
		}else{
			$(this).removeClass("selected");
		}
	});

	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>

<script type="text/javascript">
$(function(){
	LoadingClass();
})
// 足记日历的显示与隐藏
$(".cal-mode-btn").bind('click',function(){
	$(".cal-wrapper").show();
})

$(".cal-close").bind('click',function(){
	$(".cal-wrapper").hide();
})

// 分类列表的出现与消失
$(".cat-selector").bind('mouseover',function(){
	$(".cat-selector").addClass("checked");
})

$(".cat-selector").bind('mouseout',function(){
	$(".cat-selector").removeClass("checked");
})

// 相关操作的显示与隐藏
function show_more(element){
	$(element).addClass('goods-pic-hover');
}

function hide_more(element){
	$(element).removeClass('goods-pic-hover');
}

// 批量操作的出现与消失
$(".enter-del").bind('click',function(){
	
	var status = $("#page").hasClass('edit-status');
	
	if(status == false){
		$("#page").addClass('edit-status');
	}else{
		$("#page").removeClass('edit-status');
	}
})

var category_id = '';
var current_date = '';
var uid = "<?php echo $uid; ?>";
function LoadingClass(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/newPath'); ?>",
		data : {'category_id':category_id, 'uid':uid},
		success : function(data) {
			var category_list = data['category_list'];
			var category_html = '';

			for(var j = 0;j < category_list.length;j++){
				category_html += '<a href="javascript:" class="cat cat-item-link cat-item-all" onclick="category_select('+category_list[j]['category_id'] +')">'+ category_list[j]['category_name'] +'</a>';		
			}
			
			$(".J_Scroll_Cats").html(category_html);
			
		}
	});
}

function LoadingInfo(page_index){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/newPath'); ?>",
		data : { "page_index" : page_index, "page_size" : $("#showNumber").val(), 'category_id':category_id , 'uid':uid},
		success : function(data) {
			var list = data['data'];
			var day = '';
			if (data["data"].length > 0) {

				$(".goods-area-box").empty();
				for(var i = 0;i < list.length;i++){
					
					if(list[i]['goods_info']['goods_name'] != undefined){
						var html = '';
						html += '<div class="goods "  id="browse-'+ list[i]['browse_id'] +'">';
							html += '<div class="goods-box">';
								html += '<div class="goods-date">';
									if(list[i]['day'] != day){
										day = list[i]['day'];
										html += '<span>';
											html += '<i class="month-lite">'+ list[i]['month'] +'</i>月';
											html += '<i class="day-lite">'+	 list[i]['day'] +'</i>日';
											html += '<i class="date-desc"></i>';
											html += '<i class="count"></i>';
										html += '</span>';
									}
									html += '<s class="line"></s>';
								html += '</div>';
								
								html += '<div class="goods-pic J_GoodsPic" onmouseover="show_more(this)" onmouseout="hide_more(this)">';
									html += '<div class="goods-pic-box">';
										html += '<a class="goods-pic-link" target="_blank" href="'+ __URL('SHOP_MAIN/goods/goodsinfo?goodsid=' + list[i]['goods_id']) +'" title="'+ list[i]['goods_info']['goods_name'] +'">';
											if(list[i]['goods_info']['picture_info'] != null){
												html += '<img src="'+ __IMG(list[i]['goods_info']['picture_info']['pic_cover']) +'" class="lazy_load goods-img" data-original="'+ __IMG(list[i]['goods_info']['picture_info']['pic_cover']) +'">';
											}else{
												html += '<img src="'+ __IMG(list[i]['goods_info']['picture_info']['pic_cover']) +'" class="lazy_load goods-img" data-original="">';
											}
										html += '</a>';
									html += '</div>';
										html += '<a class="goods-delete" href="javascript:;" onclick="del_by_id(this)"  browse_id="'+ list[i]['browse_id'] +'" ><i></i></a>';
										html += '<div class="goods-delete-mask"></div>';
								html += '</div>';
								
								html += '<div class="goods-attr">';
									html += '<div class="goods-price clearfix">';
										html += '<span class="g_price">';
											html += '<span>¥</span><strong>'+ list[i]['goods_info']['promotion_price'] +'</strong>';
										html += '</span>';
									html += '</div>';
									
									html += '<div class="good-title">';
										html += '<a class="title" href="'+ __URL('SHOP_MAIN/goods/goodsinfo?goodsid=' + list[i]['goods_id']) +'" target="_blank">'+ list[i]['goods_info']['goods_name'] +'</a>';
									html += '</div>';
									
								html += '</div>';
								
							html += '</div>';
							
						html += '</div>';
						$(".goods-area-box").append(html);
	
					}
				}
			
		} else {
			var html = '<div class="goods ">暂无符合条件的数据记录</div>';
			$(".goods-area-box").html(html);
		}
		initPageData(data["page_count"],data['data'].length,data['total_count']);
		$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
			
			// //加载现有商品分类
			// var category_list = data['category_list'];
			// var category_html = '';

			// for(var j = 0;j < category_list.length;j++){
			// 	category_html += '<a href="javascript:" class="cat cat-item-link cat-item-all" onclick="category_select('+category_list[j]['category_id'] +')">'+ category_list[j]['category_name'] +'</a>';
			// }
			
			// $(".J_Scroll_Cats").append(category_html);
			img_lazyload();
		}
	});
}

function del_by_id(element){
	var type = 'browse_id';
	var value = $(element).attr('browse_id');
	delMyPath(type, value)
}

function delMyPath(type, value){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('SHOP_MAIN/member/delMyPath'); ?>",
		data : { "type" : type, "value" : value },
		success : function(data) {
			if(data['code'] > 0){
				$("#browse-"+value).remove();
			}
		}
	});
}

/* 通过分类筛选 */
function category_select(id){
	category_id = id;
	LoadingInfo(1);
}
</script>

</body>
</html>