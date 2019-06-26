$(function(){
	
	//设置弹出地区的位置和宽度
	var top = ($(window).height()-$('#select-region').outerHeight())/2;
	$('#select-region').css({'top': top});
	
	/**
	 * 修改运费模板时，把弹出框的地区选择选中
	 * 
	 * 2017年8月12日 10:11:34  新增区县地区  王永杰
	 * 
	 */
	//省id组
	if($("#hidden_province_id_array").val()){
		
		var province_id_array = $("#hidden_province_id_array").val().split(",");
		
		for(var i=0;i<province_id_array.length;i++){
			
			if(province_id_array[i]){
				$("input[data-second-parent-index][value='"+province_id_array[i]+"']").attr("checked",true).parent().addClass("selected");
			}
			
		}
	}
	
	//市id组
	if($("#hidden_city_id_array").val()){
		
		var city_id_array = $("#hidden_city_id_array").val().split(",");
		for(var i=0;i<city_id_array.length;i++){
			if(city_id_array[i]){
				$("input[data-third-parent-index][value='"+city_id_array[i]+"']").attr("checked",true).parent().addClass("selected");
			}
		}
	}
	
	/**
	 * 指定地区城市[打开城市弹出框，进行选中]
	 * 2017年6月26日 15:59:32
	 */
	$(".Js_select_city").click(function(){
		if(!parseInt($(this).attr("data-flag"))){
			$("#select-region").modal("show");
		}
	});
	
	/**
	 * 一级地区（大类）例如：华北、华东、东北、西北、港澳台等
	 * 根据当前地区的选中状态对应的改变它的子地区
	 * 2017年6月26日 15:29:55 王永杰
	 */
	$("input[data-first-index]").change(function(){

		if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
			
			var curr = $(this);//当前对象
			var index = curr.attr("data-first-index");//索引
			var checked = curr.is(":checked");//选中状态

			//省
			if($("input[data-second-parent-index='" + index + "']").length){
				
				$("input[data-second-parent-index='" + index + "']").each(function(){
					if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
						if(checked) $(this).attr("checked",checked).parent().addClass("selected");
						else $(this).attr("checked",checked).parent().removeClass("selected");
					}
				});
				
				//市
				if($("input[data-third-parent-index='" + index + "']").length){
					
					$("input[data-third-parent-index='" + index + "']").each(function(){
						if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
							if(checked) $(this).attr("checked",checked).parent().addClass("selected");
							else $(this).attr("checked",checked).parent().removeClass("selected");
						}
					});
				}
			}
		}
	});
	
	/**
	 * 二级地区（省）例如：山西省、山东省、河北省等
	 * 根据当前地区的选中状态对应的改变它的子地区
	 * 2017年6月26日 15:46:29 王永杰
	 */
	$("input[data-second-parent-index]").change(function(){
		
		var curr = $(this);//当前对象
		var checked = curr.is(":checked");//选中状态
		
		if(curr.parents(".ecity").find("div i input[type='checkbox']").length){
			
			curr.parents(".ecity").find("div i input[type='checkbox']").each(function(){
				if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
					if(checked) $(this).attr("checked",checked).parent().addClass("selected");
					else $(this).attr("checked",checked).parent().removeClass("selected");
				}
			});
			
		}
		
	});
	
	/**
	 * 三级地区（市区）例如：太原市、运城市等
	 * 只要改变了三级地区那它的上一级为不选中状态
	 * 2017年6月26日 16:23:15 王永杰
	 */
	$("input[data-third-parent-index]").change(function(){
		
		var curr = $(this);//当前对象
		var checked = curr.is(":checked");//选中状态
		if(curr.parent().find("div input[type='checkbox']").length){
			
			curr.parent().find("div input[type='checkbox']").each(function(){
				if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
					if(checked) $(this).attr("checked",checked).parent().addClass("selected");
					else $(this).attr("checked",checked).parent().removeClass("selected");
				}
			});
			
		}

		//一个没有选择，父级则不选中
		if(curr.parents(".citys").find("input[type='checkbox']:checked").length == 0){
			curr.parents('.ecity').find("input[data-second-parent-index]").attr("checked",false).parent().removeClass('selected');
		}
		//选中一个，父类则选中
		if(checked) curr.parents('.ecity').find("input[data-second-parent-index]").attr("checked",false).parent().addClass('selected');
	});
	
	/**
	 * 确定选择地区
	 * 2017年6月26日 17:14:59 王永杰
	 */
	$("#select-region .js-confirm").click(function(){
		setProvinceIdArray();
		setCityIdArray();
		$(".js-region-info").html(getRegions());
		$("#select-region").modal("hide");
	});
	
	/**
	 * 取消选择地区
	 * 关闭选择地区弹出框
	 * 2017年6月26日 17:09:50 王永杰
	 */
	$("#select-region .js-cancle").click(function(){
		$("#select-region").modal("hide");
	})
	
	
	//判断是否显示
	$(".drop-down").click(function (){
		var self = $(this);
		var is_visible = self.next().is(":visible");
		var level = $(this).attr("data-level");
		$(".drop-down[data-level='" + level + "']").parent().parent().removeClass("open");
		$(".drop-down[data-level='" + level + "']").next().hide();
		if(!is_visible){
			self.parent().parent().addClass("open").attr("data-open",1);
			self.next().show().attr("data-open-children",1);
		}else{
			self.next().hide().removeAttr("data-open-children");
			self.parent().parent().removeClass("open").removeAttr("data-open");
		}
	});
	
	//关闭按钮
	$(".close_button").click(function () {
		$(this).parent().parent().css("display", "none");
		$(this).parent().parent().parent().removeClass("open");
	});
	
});

/**
 * 获取选中的地区（只显示省），逗号隔开
 * 2017年6月26日 18:09:55 王永杰
 */
function getRegions(){
	var regions_arr = new Array();
	if($(".js-regions input[data-second-parent-index]:checked").length){
		$(".js-regions input[data-second-parent-index]:checked").each(function(){
			regions_arr.push($(this).attr("data-province-name"));
		});
	}
	
	return regions_arr.toString();//.replace(",","&nbsp;,&nbsp;");
}

/**
 * 保存选中的省id组
 * @param id_arr 省id组
 */
function setProvinceIdArray(){
	
	var id_arr = new Array();

	if($(".js-regions input[data-second-parent-index]:checked").length){
		$(".js-regions input[data-second-parent-index]:checked").each(function(){
			if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
				id_arr.push($(this).val());
			}
		});
	}
	$("#hidden_province_id_array").val(id_arr.toString());
}

/**
 * 保存选中的市id组
 * @param id_arr 
 */
function setCityIdArray(){
	
	var id_arr = new Array();
	if($(".js-regions input[data-third-parent-index]:checked").length){
		$(".js-regions input[data-third-parent-index]:checked").each(function(){
			if(!$(this).is(":disabled") && !$(this).attr("data-is-disabled")){
				id_arr.push($(this).val());
			}
		});
	}
	$("#hidden_city_id_array").val(id_arr);// 市id
}