var PermissionList = function() {
      var permissionInit = function(){
          $('#datatable-responsive').DataTable({
              "processing": true,
              "serverSide": true,
              "searchDelay": 800,
              "search":{
                  regex:true,
              },
              "ajax": {
                  // ajax请求地址
                'url' : '/admin/permission/ajaxIndex',
                // 传递额外参数
                // "data": function ( d ) {
                //   d.test = 'this is tset';
                // }
            },
            // 注意: 这里列的数量必须和页面th标签数据量一致，否则会报错
            // orderable： 排序，默认为true
            "columns": [
            {
                "data": "id",
                "name" : "id"
              },
            {
                "data": "display_name",
                "name" : "display_name",
                "orderable" : false,
            },
            {
                "data": "name",
                "name": "name",
                "orderable" : false,
            },
            {
              "data": "description",
              "name": "description",
              "orderable" : false,
            },
            {
              "data": "created_at",
              "name": "created_at",
              "orderable" : true,
            },{
              "data": "updated_at",
              "name": "updated_at",
              "orderable" : true,
            },{
              "data": "actionButton",
              "name": "actionButton",
              "type": "html",
              "orderable" : false,
            }],
          });
      }
    return {
        init : permissionInit
    }
}();
