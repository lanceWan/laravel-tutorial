var MenuList = function() {
  	var menuInit = function(){
  		// Select2
	    var select2 = $(".select2_single").select2({
	      placeholder: "Select a state",
	      allowClear: true
	    });

	    // nestable
	    $('#nestable_list_3').nestable({
	      "maxDepth":2
	    });
	    // 添加按钮事件
	    $(document).on('click','.createMenu',function () {
	    	var _item = $(this);
	    	// 改变select2默认值
	    	select2.val(_item.attr('data-pid')).trigger("change");
	    });

	    // 修改菜单按钮事件
	    $(document).on('click','.editMenu',function () {
	    	var _url = $(this).attr('data-href');
	    	$.ajax({
		        url:_url,
		        dataType:'json',
		        beforeSend:function() {
		        	// loading
		        	layer.load(1);
		        },
		        success:function(menu) {
		        	// 关闭loading
		        	layer.closeAll('loading');
					menuFun.initAttribute(menu);
					layer.msg(menu.msg,{icon:6});
		        }
	      });
	    });

	    var menuFun = function() {
		    var menuAttribute = function(menu) {
		      $('input[name=name]').val(menu.name);
		      select2.val(menu.pid).trigger("change");
		      $('input[name=icon]').val(menu.icon);
		      $('input[name=url]').val(menu.url);
		      $('input[name=heightlight_url] ').val(menu.heightlight_url);
		      $('input[name=sort]').val(menu.sort);
		      $('#menuForm').attr('action',menu.update);
		      $('#menuForm').append('<input type="hidden" name="_method" value="PATCH">');
		    };
		    return {
		      initAttribute : menuAttribute
		    }
		}();
	};

	return {
		init : menuInit
	}
}();