/**
 * 设置对象垂直居中
 * 2017年7月14日 09:43:29 王永杰
 * @param obj 当前DOM对象
 */
function setObjectVerticalCenter(obj) {
//	console.log($(window).width()+",obj:"+obj.outerWidth());
	obj.css({
		"display" : "block",
		"top" : ($(window).height()-obj.outerHeight())/2,
	});
}