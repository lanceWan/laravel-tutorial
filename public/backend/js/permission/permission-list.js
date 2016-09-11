var PermissionList = function() {
  	var permissionInit = function(){
  		$('#datatable-responsive').DataTable({
  			"ajax": {
  				// ajax请求地址
		        'url' : '/admin/permission/ajaxIndex',
		        // 传递额外参数
		        "data": function ( d ) {
		          d.test = 'this is tset';
		        }
	    	},
	    	// 注意: 这里列的数量必须和页面th标签数据量一致，否则会报错
	    	// orderable： 排序，默认为true
	    	"columns": [
	        {
	        	"data": "zhang",
	        	"name" : "zhang",
	        	render : function(data){
	        		return data+'--test';
	        	}
	      	},
	        {
	        	"data": "li",
	        	"name" : "li",
	        	"orderable" : false,
	        },
	        {
	        	"data": "wang",
	        	"name": "wang",
	        	"orderable" : false,
	        },
	        { 
	          "data": "zhao",
	          "name": "zhao",
	          "orderable" : true,
	        },
	        { 
	          "data": "age",
	          "name": "age",
	          "orderable" : true,
	        }],
  		});
  	}

	return {
		init : permissionInit
	}
}();