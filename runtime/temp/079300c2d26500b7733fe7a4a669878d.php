<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"template/wap/default_new/Wchat/templateMessage.html";i:1545820112;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0111)http://mp.weixin.qq.com/s?__biz=MzA3OTExNjk4MA==&mid=212403169&idx=1&sn=09ffe258401d2541066cca35d77ea281#rd.com -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">
	var sampling = Math.random() < 0.001;
	var page_begintime = (+new Date());
	(sampling) && ((new Image()).src = "http://isdspeed.qq.com/cgi-bin/r.cgi?flag1=7839&flag2=7&flag3=8&15=1000&r=" + Math.random());

	var biz = "MzA3OTExNjk4MA==";
	var sn = "09ffe258401d2541066cca35d77ea281" || "";
	var mid = "212403169" || "";
	var idx = "1" || "";

	//辟谣需求
	var is_rumor = "" * 1;
	var norumor = "" * 1;
	if (!!is_rumor && !norumor) {
		if (!document.referrer || document.referrer.indexOf("mp.weixin.qq.com/mp/rumor") == -1) {
			location.href = "http://mp.weixin.qq.com/mp/rumor?action=info&__biz="
			+ biz
			+ "&mid="
			+ mid
			+ "&idx="
			+ idx
			+ "&sn="
			+ sn
			+ "#wechat_redirect";
		}
	}

	//原创需求，需要跳转到中间页
	/*
	var copyrightInfo = {
	    display_source : ""*1,
	    nocopyrightsource : ""*1
	};
	if (!!copyrightInfo.display_source&&!copyrightInfo.nocopyrightsource){
	  if (!document.referrer || document.referrer.indexOf("mp.weixin.qq.com/mp/reprint") == -1){
	    location.href = "http://mp.weixin.qq.com/mp/reprint?action=info&__biz=" + biz + "&mid=" + mid + "&idx=" + idx + "&sn=" + sn + "#wechat_redirect";
	  }
	}*/
</script>
<script src="__STATIC__/js/jquery-1.8.1.min.js" type="text/javascript"></script>
<link rel="dns-prefetch" href="http://res.wx.qq.com/">
<link rel="dns-prefetch" href="http://mmbiz.qpic.cn/">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/favicon22c41b.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<script type="text/javascript">
var uin = "";
var key = "";
var pass_ticket = "";
String.prototype.html = function(encode) {
	var replace = [ "&#39;", "'", "&quot;", '"', "&nbsp;", " ", "&gt;",
			">", "&lt;", "<", "&amp;", "&", "&yen;", "¥" ];
	if (encode) {
		replace.reverse();
	}
	for (var i = 0, str = this; i < replace.length; i += 2) {
		str = str.replace(new RegExp(replace[i], 'g'), replace[i + 1]);
	}
	return str;
};
pass_ticket = encodeURIComponent(pass_ticket.html(false).html(false) .replace(/\s/g, "+"));
</script>
<title><?php echo $info["media_item"]["title"]; ?></title>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/wchat/page_mp_article_improve265a3c.css">
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/page_mp_article_improve_pc2637ae.css">
<![endif]-->
<script type="text/javascript">
	//document.domain = "qq.com";
</script>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/wchat/not_in_mm2637ae.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/wchat/page_mp_article_improve_combo26590f.css">
</head>
<body id="activity-detail" class="zh_CN mm_appmsg not_in_mm" ontouchstart="">
<script type="text/javascript">
	var write_sceen_time = (+new Date());
	(sampling) && ((new Image()).src = "http://isdspeed.qq.com/cgi-bin/r.cgi?flag1=7839&flag2=7&flag3=8&16=1000&r=" + Math.random());
</script>
<div id="js_cmt_mine" class="discuss_container editing access" style="display: none;">
	<div class="discuss_container_inner">
		<h2 class="rich_media_title">sdfs</h2>
		<div class="frm_textarea_box_wrp">
			<span class="frm_textarea_box">
				<textarea id="js_cmt_input" class="frm_textarea" placeholder="<?php echo lang('the_comments_will_be_displayed_after_screening_by_the_public_account_visible_to_all'); ?>。"></textarea>
			</span>
		</div>
		<div class="discuss_btn_wrp">
			<a id="js_cmt_submit" class="btn btn_primary btn_discuss btn_disabled" href="javascript:;"><?php echo lang('member_submit'); ?></a>
		</div>
		<div class="discuss_list_wrp" style="display: none">
			<div class="rich_tips with_line title_tips discuss_title_line">
				<span class="tips"><?php echo lang('my_comments'); ?></span>
			</div>
			<ul class="discuss_list" id="js_cmt_mylist"></ul>
		</div>
		<div class="rich_tips tips_global loading_tips" id="js_mycmt_loading">
			<!-- 				<img src="images/icon_loading_white22c04a.gif" -->
			<!-- 					class="rich_icon icon_loading_white" alt="">  -->
			<span class="tips"><?php echo lang('in_load'); ?></span>
		</div>
		<div class="wx_poptips" id="js_cmt_toast" style="display: none;">
			<img alt="" class="icon_toast"
				src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGoAAABqCAYAAABUIcSXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyMTUxMzkxZS1jYWVhLTRmZTMtYTY2NS0xNTRkNDJiOGQyMWIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTA3QzM2RTg3N0UwMTFFNEIzQURGMTQzNzQzMDAxQTUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTA3QzM2RTc3N0UwMTFFNEIzQURGMTQzNzQzMDAxQTUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NWMyOGVjZTMtNzllZS00ODlhLWIxZTYtYzNmM2RjNzg2YjI2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIxNTEzOTFlLWNhZWEtNGZlMy1hNjY1LTE1NGQ0MmI4ZDIxYiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pmvxj1gAAAVrSURBVHja7J15rF1TFMbXk74q1ZKHGlMkJVIhIgg1FH+YEpEQJCKmGBpThRoSs5jVVNrSQUvEEENIhGiiNf9BiERICCFIRbUiDa2qvudbOetF3Tzv7XWGffa55/uS7593977n3vO7e5+199p7v56BgQGh0tcmvAUERREUQVEERREUQVEERREUQVEERREUQVEERREUQVEERREUQVEERVAUQVEERVAUQbVYk+HdvZVG8b5F0xj4RvhouB+eCy8KrdzDJc1RtAX8ILxvx98V1GyCSkN98Cx4z/95/Wn4fj6j6tUEeN4wkFSnw1MJqj5NhBfAuwaUHREUg4lqNMmePVsHll/HFhVfe1t3FwpJI8DXCCquDrCWNN4B6Tb4M3Z98aTPmTvh0YHl18PXw29yZiKejoPvcUD6E74yFBJbVDk6Bb7K8aP/Hb4c/tRzEYIqprPhSxzlf4Uvhb/0Xoig8qnHAJ3lqPMzfDH8XZ4LEpRf2sVdA5/sqPO9Qfop70UJyn+/boaPddT5yrq7VUUvTIVJI7q74MMddXR8NB1eXcYvhBpZm0s2w72/o86HFoKvLau/pYaXzjLMdUJ6y0LwtWV9CIIaXtvA8+G9HHV03u5q+K+yH47U0NoRngPv7KjzHDwTLj0bS1BDazfJJlcnOOostC6ysnCT+q80G/sIvFVgeW09D8FPVT0uoP7VfvAD8NjA8pqmuAN+OcYAjso0RbIZ8DGB5TVNcRO8JMaHY9SXSdfa3eeANJimWBLrA7JFiZwIXye+NMUV8CcxP2SRFjXefok7NRjSGZJlWUPvw2/wtNiQirSoXWyMsR28wR7AzzYM0oXw+Y7yK+CLJGeaoqjyrJSdZJD6Ov4+z5y6NJc0Az7NUecHydIUy+v60KNyQHoM3nKI1y7YCFiq0i7uBvgER52vDdKqWn9djhY1Dn4G3n6Ecqm2rF74dvgoR53S0hQxW9RJAZAGW5bSn58QJA27dQ7uIEedjywEX5NKVxCqsY6y+qA+LxFI4+yZ6oH0trWkNan80jygtIUsc5SflgAsDXgehfdx1KkkTRE76tN+Xue2jnTU0Ru1oIbvpt30bBtKhOp5yaaRkts0lic8V1i6dPcIRx2d/l8Y8XtNNEg7OOo8bl1kmmOKnDsO88CaYzejau0hWZqiL7C83oCH4SeTHvwV2BqqsHRVztSEYOmWF80NeXZT6Hd4KflResE9vCnBOlCyGfDNAstHTVPUDWoQ1t3iW+9WNizvlhfd4aerXd+ThqiMfNR6+9LvOOro5OY5JX2H4+F7HZD+kGzlamMgldWiirQsjcwWFbjmqZJteekJLK9pisvgL6RhKvuciZiwzrWWGapfrPy30kBVcSBIrw0aD3PU0XB6cehntq7rTMf7/2iQlktDVdXJLXlg6VjmiYBn6rWSTRCH6hvJ0hQrpcGq8oidsmHpTP8t8DGO9/vcWt9qabiqPgup1yKyQwvC2tSefZ73SSpNkUJ4PlLorlHZ+446nc8f3fIyywlJhwrTuwVSjBa1ccvSxN0hjjoK5xVrYZMd9V6XbFfgBukixTwGLg8sDam3dZR/wZ6L/dJlin1en8LS+bgpFbz3Ygvzu1J1HKxYNqxGpCmaCEo12rrBorD6LRp8UbpcdR5VWhTW35KlKd6QFqjuM2XzwlpnMxTvSkuUwuG/Xlg6NtPjbT6WFimF/VG6LEvXgn8QGDjMbBukVECFwhpoS+CQatfX2Q1q6H7wENHdrfCr0lKleEB9JyxNneus+VJpsVL9TwI6W65LovWIGl3KtVJaLv7LBwYTFEERFEVQFEERFEVQFEERFEVQFEERFEVQFEERFEVQFEERFFWq/hFgADUMN4RzT6/OAAAAAElFTkSuQmCC">
			<p class="toast_content"><?php echo lang('have_reviewed'); ?></p>
		</div>
	</div>
</div>
<div id="js_article" class="rich_media">
	<div id="js_top_ad_area" class="top_banner"></div>
	<div class="rich_media_inner">
		<div id="page-content">
			<div id="img-content" class="rich_media_area_primary">
				<h2 class="rich_media_title" id="activity-name"><?php echo $info["media_item"]["title"]; ?></h2>
				<div class="rich_media_meta_list">
					<em id="post-date" class="rich_media_meta rich_media_meta_text"><?php echo getTimeStampTurnTime($info["media_parent"]["create_time"] ); ?></em>
					<!-- 2015-07-07 -->
					<!--                    <em class="rich_media_meta rich_media_meta_text">{1$list["description"]} </em> -->
					<a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" href="javascript:void(0);" id="post-user"><?php echo $info["weixin_auth"]["nick_name"]; ?></a>
					<span class="rich_media_meta rich_media_meta_text rich_media_meta_nickname"><?php echo $info["weixin_auth"]["nick_name"]; ?></span>
					<div id="js_profile_qrcode" class="profile_container" style="display: none;">
						<div class="profile_inner">
							<strong class="profile_nickname"><?php echo lang('province'); ?></strong>
							<img class="profile_avatar" id="js_profile_qrcode_img" src="" alt="">
							<p class="profile_meta">
								<label class="profile_meta_label"><?php echo lang('wechat'); ?></label>
								<span class="profile_meta_value">qq6394788</span>
							</p>
							<p class="profile_meta">
								<label class="profile_meta_label"><?php echo lang('functions'); ?></label>
								<span class="profile_meta_value"><?php echo lang('personal_platform'); ?></span>
							</p>
						</div>
						<span class="profile_arrow_wrp" id="js_profile_arrow_wrp">
							<i class="profile_arrow arrow_out"></i>
							<i class="profile_arrow arrow_in"></i>
						</span>
					</div>
				</div>
				<div class="rich_media_thumb_wrp" id="media">
					<script>
						/*                            (function(){
						 var cover = "http://mmbiz.qpic.cn/mmbiz/MWWK1mWcsGcvH9QNpU9YiaEcKUxYBUkvdcSEJpEDzBNUfoKCENo8HxvicmqUyChFCia0TJQFqSc9Ue4okQrQJoUXg/0?wx_fmt=jpeg";
						 document.write('<img class="rich_media_thumb" id="js_cover" onerror="this.parentNode.removeChild(this)" data-src="' + cover + '" />');
						 })();*/
					</script>
					<img class="rich_media_thumb" id="js_cover"
						onerror="this.parentNode.removeChild(this)" data-s="300,640"
						src="">
					<script>
						//         						if({1$status} == 1)
						//         						{
						//         							$("#js_cover").css("display","block");
						// //        							$("#js_cover").attr("src","http://klht2.wicp.net/attachment/shop/{1$list['thumb']}.jpg");
						//         						}else
						//         						{
						//         							$("#js_cover").css("display","none");
						//         						}
					</script>
				</div>
				<div class="rich_media_content" id="js_content">
					<p><?php echo $info["media_item"]["content"]; ?></p>
				</div>
				<script type="text/javascript">
					var first_sceen__time = (+new Date());
				</script>
				<div class="rich_media_tool" id="js_toobar">

					<?php if($info['media_item']['content_source_url'] !=''): ?> <a
						class="media_tool_meta meta_primary" style="color: #8c8c8c;"
						id="js_view_source" href="<?php echo $info['media_item']['content_source_url']; ?>"><?php echo lang('read_the_text'); ?></a>
					<?php endif; ?>
					<div id="js_read_area"
						class="media_tool_meta tips_global meta_primary"
						style="display: block;">
						<?php echo lang('read'); ?> <span id="readNum"><?php echo $info["media_item"]["hits"]; ?></span>
					</div>
					<span style="display: none;"
						class="media_tool_meta meta_primary tips_global meta_praise"
						id="like"> <i class="icon_praise_gray"></i><span
						class="praise_num" id="likeNum"></span>
					</span> <a id="js_report_article" style="display: block;"
						class="media_tool_meta tips_global meta_extra"
						href="javascript:void(0);"><?php echo lang('report'); ?></a>
				</div>
			</div>
			<div class="rich_media_area_extra">
				<div class="mpda_bottom_container" id="js_bottom_ad_area"></div>
				<div id="js_iframetest" style="display: none;"></div>
			</div>
		</div>
		<div id="js_pc_qr_code" class="qr_code_pc_outer"
			style="display: block;">
			<div class="qr_code_pc_inner">
				<div class="qr_code_pc">
					<img id="js_pc_qr_code_img" class="qr_code_pc_img" src="<?php echo __IMG($website_info['web_qrcode']); ?>">
					<p><?php echo lang('wechat_sweep'); ?><br><?php echo lang('pay_attention_to_the_public_number'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
window.moon_map = {
	"a/gotoappdetail.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/a/gotoappdetail260530.js",
	"a/ios.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/a/ios24a769.js",
	"a/android.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/a/android22772d.js",
	"a/profile.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/a/profile260530.js",
	"biz_wap/utils/device.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/device26a834.js",
	"biz_common/utils/report.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/utils/report224ef3.js",
	"biz_common/utils/cookie.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/utils/cookie224ef3.js",
	"pages/report.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/pages/report267ab4.js",
	"pages/love_comment.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/pages/love_comment262c35.js",
	"biz_wap/utils/localstorage.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/localstorage25ded2.js",
	"biz_wap/utils/qqmusic_player.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/qqmusic_player25ded2.js",
	"appmsg/reward_entry.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/reward_entry25de14.js",
	"appmsg/comment.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/comment260530.js",
	"appmsg/like.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/like2340dc.js",
	"appmsg/a.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/a26c998.js",
	"pages/version4video.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/pages/version4video26bea9.js",
	"biz_wap/utils/storage.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/storage264325.js",
	"biz_common/tmpl.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/tmpl224ef3.js",
	"biz_common/ui/imgonepx.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/ui/imgonepx224ef3.js",
	"biz_common/dom/attr.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/dom/attr22f190.js",
	"biz_wap/utils/ajax.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/ajax267ab4.js",
	"biz_common/utils/string/html.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/utils/string/html224ef3.js",
	"appmsg/report.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/report23c757.js",
	"biz_common/dom/class.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/dom/class236751.js",
	"appmsg/report_and_source.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/report_and_source23a582.js",
	"appmsg/page_pos.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/page_pos264325.js",
	"appmsg/cdn_speed_report.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/cdn_speed_report224ef3.js",
	"appmsg/qqmusic.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/qqmusic267ab4.js",
	"appmsg/iframe.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/iframe26a834.js",
	"appmsg/review_image.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/review_image2480be.js",
	"appmsg/outer_link.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/outer_link25ded2.js",
	"biz_wap/jsapi/core.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/jsapi/core25ded2.js",
	"biz_common/dom/event.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/dom/event24f08a.js",
	"appmsg/copyright_report.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/copyright_report261b9c.js",
	"appmsg/async.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/async264325.js",
	"biz_wap/ui/lazyload_img.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/ui/lazyload_img23354e.js",
	"biz_common/log/jserr.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/log/jserr22589f.js",
	"appmsg/share.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/share26a834.js",
	"biz_wap/utils/mmversion.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/utils/mmversion224ef3.js",
	"appmsg/cdn_img_lib.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/cdn_img_lib23c757.js",
	"biz_common/utils/url/parse.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/utils/url/parse25b6ff.js",
	"appmsg/index.js" : "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/appmsg/index26e050.js"
};
</script>
	<!-- 	<script type="text/javascript" src="js/moon264d72.js"></script> -->

	<!--   <script id="qqmusic_tpl" type="text/html">
        <span id="qqmusic_main_<#=comment_id#>_<#=posIndex#>" class="db qqmusic_area <#if(!musicSupport){#> unsupport<#}#>">
            <span class="tc tips_global unsupport_tips" <#if(!musicSupport&&posIndex!=0){#>style="display:none;"<#}#>>
            当前浏览器不支持播放音乐，请在微信或其他浏览器中播放            </span>
            <span class="db qqmusic_wrp">
                <span class="db qqmusic_bd">
                    <span id="qqmusic_play_<#=musicid#>_<#=posIndex#>" class="play_area">
                        <i class="icon_qqmusic_switch"></i>
                        <img src="<#=music_img#>" data-autourl="<#=audiourl#>" data-musicid="<#=musicid#>" class="qqmusic_thumb" alt="">
                    </span>
                                        <a id="qqmusic_home_<#=musicid#>_<#=posIndex#>" href="javascript:void(0);" class="access_area">
                        <span class="qqmusic_songname"><#=music_name#></span>
                        <span class="qqmusic_singername"><#=singer#></span>
                        <span class="qqmusic_source"><img src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/appmsg/qqmusic/icon_qqmusic_source263724.png" alt="">QQ音乐</span>
                    </a>
                </span>
            </span>
        </span>
    </script>-->
	<!--    <script id="t_cmt" type="text/html">
        <li class="discuss_item" id="cid<# if (is_from_me == 1) { #><#=my_id#><# } else { #><#=content_id#><# } #>">
            <# if(is_elected == 1){ #>
            <div class="discuss_opr">
                <span class="media_tool_meta tips_global meta_praise js_comment_praise <# if(like_status == 1){ #>praised<# } #>" data-status="<#=like_status#>" data-content-id='<#=content_id#>'>
                    <i class="icon_praise_gray"></i>
                    <span class="praise_num"><# if(like_num_format !== 0){ #><#=like_num_format#> <# } #></span>
                </span>
            </div>
            <# } #>
            <div class="user_info">
                <strong class="nickname"><#=nick_name#><# if(is_from_friend == 1){ #>(朋友)<# } #></strong>
                <img class="avatar" src="<#=logo_url#>">
            </div>
            <div class="discuss_message">
                <span class="discuss_status"><#=status#></span>
                <#=content#>
            </div>
            <p class="discuss_extra_info">
                <#=time#>               
                <# if (is_from_me == 1) { #>
                <a class="discuss_del js_del" href="javascript:;" data-my-id="<#=my_id#>" data-content-id="<#=content_id#>">删除</a>
                <# } #>
            </p>
            <# if(reply && reply.reply_list && reply.reply_list.length > 0){ #>
                <div class="reply_result">
                    <div class="nickname">作者回复</div>
                    <div class="discuss_message"><#=reply.reply_list[0].content#></div>
                    <p class="discuss_extra_info"><#=reply.reply_list[0].time#></p>
                </div>
            <# } #>
                
        </li>
    </script>

  <script id="t_ad" type="text/html">
    <div class="rich_media_extra" id="gdt_area">
        <# if(pos_type==0){ #>
        <div class="rich_tips with_line title_tips">
            <span class="tips">推广</span>
        </div>
        <# } #>
        <div class="js_ad_link extra_link" data-type="<#=type#>" data-ticket="<#=ticket#>" data-url="<#=url#>" data-rl="<#=rl#>"  data-aid="<#=aid#>" data-pt="<#=pt#>" data-tid="<#=traceid#>" data-gid="<#=group_id#>" data-apurl="<#=apurl#>">
            <# if(pt==1){ #>
            <#=hint_txt#>
            <img class="icon_arrow_gray" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/icon_arrow_gray1ef6d4.png">
            <img class="icon_loading_white icon_after" style="display:none;" id="loading_<#=traceid#>" src="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/icon_loading_white22c04a.gif">
            <# }else if(pt==2){ #>
            
            <# if (logo.indexOf("http://mmsns.qpic.cn/") == 0){ #>
            <div class="brand_logo"><img src="<#=logo#>" alt="logo图片"></div>
            <# } #>
            <img class="appmsg_banner" src="<#=image_url#>">
            <# if(watermark_type!=0){ #><i class="promotion_tag"><# if(watermark_type==1){ #>商品推广<# }else if (watermark_type==2){ #>活动推广<# } #></i><# } #>
            <# }else if(pt==7){ #>
            
            <div class="preview_group preview_card">
                <div class="preview_group_inner card_inner">
                    <div class="preview_group_info">
                        <strong class="preview_group_title2"><#=hint_txt#></strong>
                        <div class="preview_group_desc"><#=ad_desc#></div>
                        <img src="<#=image_url#>" alt="" class="preview_card_avatar">
                    </div>
                </div>
            </div>
            <# }else if(pt==100){ #>
            <div class="preview_group">
                <div class="preview_group_inner">
                    <div class="preview_group_info append_btn">
                        <strong class="preview_group_title"><#=biz_info.nick_name#></strong>
                        <div class="preview_group_desc"><#=hint_txt#></div>
                        <# if(!!biz_info.head_img){ #>
                        <img src="<#=biz_info.head_img#>" alt="" class="preview_group_avatar br_radius">
                        <# }else{ #>
                        <img class="preview_group_avatar br_radius" src="http://mmbiz.qpic.cn/mmbiz/a5icZrUmbV8p5jb6RZ8aYfjfS2AVle8URwBt8QIu6XbGewB9wiaWYWkPwq4R7pfdsFibuLkic16UcxDSNYtB8HnC1Q/0" alt="<#=biz_info.nick_name#>">
                        <# } #>                                 
                    </div>
                    <div class="preview_group_opr">
                        <a id="js_view_profile_<#=pos_type#>" <# if(biz_info.is_subscribed == 0){ #>style="display:none"<# } #> class="btn btn_inline btn_primary btn_line js_ad_btn" href="javascript:void(0);">查看</a>
                        <a id="js_add_contact_<#=pos_type#>" data-url="<#=url#>" data-type="<#=type#>" data-tid="<#=traceid#>" data-rl="<#=rl#>" <# if(biz_info.is_subscribed ==1){ #>style="display:none"<# } #> class="btn btn_inline btn_line  btn_primary js_ad_btn" href="javascript:void(0);">关注</a>
                    </div>
                </div>
            </div>
            <# }else if(pt==102){ #>
            <div class="preview_group">
                <div class="preview_group_inner">
                    <div class="preview_group_info append_btn">
                        <strong class="preview_group_title"><#=app_info.app_name#></strong>
                        <div class="preview_group_desc"><#=hint_txt#></div>
                        <img src="<#=app_info.icon_url#>" alt="" class="preview_group_avatar br_radius">
                    </div>
                    <div class="preview_group_opr">
                        <a id="js_app_action_<#=pos_type#>" class="btn btn_inline btn_primary js_ad_btn btn_download" href="javascript:void(0);">下载</a>
                    </div>
                </div>
            </div>
            <# }else if(pt==101){ #>
            <div class="preview_group preview_card">
                <div class="preview_group_inner card_inner">                            
                    <div class="preview_group_info append_btn">
                        <strong class="preview_group_title"><#=app_info.app_name#></strong>
                        <div class="preview_group_desc"><#=hint_txt#></div>
                        <img src="<#=app_info.icon_url#>" alt="" class="preview_card_avatar">                               
                    </div>
                    <div class="preview_group_opr">
                        <a href="javascript:void(0);" id="js_app_action_<#=pos_type#>" class="btn btn_inline btn_primary js_ad_btn">下载</a>
                    </div>
                </div>                        
            </div>
            <# }else if(pt==103||pt==104){ #>
            <div class="preview_group obvious_app">
                <div class="preview_group_inner">
                    <div class="pic_app">
                        <img src="<#=image_url#>" alt="">
                    </div>
                    <div class="info_app">
                        <p class="name_app"><#=app_info.app_name#></p>
                        <# if(pt==103){ #>
                        <p class="profile_app" style="display:none;"><span class="fun_exp"><#=app_info._category#></span><em>|</em><span class="compacity"><#=app_info._app_size#></span></p>
                        <# } else if(pt==104){ #>
                        <p class="profile_app" style="display:none;"><span class="fun_exp"><#=app_info._app_size#></span><em>|</em><span class="compacity"><#=app_info._down_count#></span></p>
                        <# } #>
                        
                        <p class="grade_app" id="js_app_rating_<#=pos_type#>">
                            
                            <span class="js_stars stars" style="display:none;"></span>
                            
                            <span class="js_scores scores">暂无评分</span>
                        </p>
                        <div class="dm_app">
                            <a href="javascript:void(0);" id="js_appdetail_action_<#=pos_type#>" class="ad_btn btn_download js_ad_btn">下载</a>
                            <p class="extra_info">来自<# if(pt==103){ #>App Store<# }else{ #>腾讯应用宝<# } #></p>
                        </div>
                    </div>
                </div>            
            </div>
            <# } #>
        </div>
    </div>
  </script>-->
	<script type="text/javascript">
		var not_in_mm_css = "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/style/page/appmsg/not_in_mm2637ae.css";
		var tid = "";
		var aid = "";
		var appuin = "MzA3OTExNjk4MA==";
		var source = "";
		var scene = 75;
		var itemidx = "";
		var nickname = "<?php echo lang('province'); ?>";
		var ct = "1436238158";
		var user_name = "gh_cca28e6b256c";
		var user_name_new = "";
		var fakeid = "";
		var version = "";
		var is_limit_user = "0";
		var msg_title = "sdfs";
		var msg_desc = "dsfsdf";
		var msg_cdn_url = "http://mmbiz.qpic.cn/mmbiz/MWWK1mWcsGcvH9QNpU9YiaEcKUxYBUkvdcSEJpEDzBNUfoKCENo8HxvicmqUyChFCia0TJQFqSc9Ue4okQrQJoUXg/0?wx_fmt=jpeg";
		var msg_link = "http://mp.weixin.qq.com/s?__biz=MzA3OTExNjk4MA==&amp;mid=212403169&amp;idx=1&amp;sn=09ffe258401d2541066cca35d77ea281#rd";
		var user_uin = "0" * 1;
		var msg_source_url = 'http://klht2.wicp.net/index.php/Login/test#rd';
		var img_format = 'jpeg';
		var networkType;
		var appmsgid = '' || '212403169';
		var comment_id = "0" * 1;
		var svr_time = "1436238354" * 1;
		var comment_enabled = "" * 1;
		var is_need_reward = "0" * 1;
		var is_https_res = ("" * 1) && (location.protocol == "https:");
		var devicetype = "";
		var source_username = "";
		var show_comment = "";
		var __appmsgCgiData = {
			can_use_page : "0" * 1,
			card_pos : "",
			copyright_stat : "0"
		};
		seajs.use("appmsg/index.js");
	</script>
</body>
</html>