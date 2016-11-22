@extends('layouts.admin')
@section('css')
<link href="{{asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Plain Page</h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>权限列表</h2>
          <ul class="nav navbar-right panel_toolbox">
            @permission(config('admin.permissions.permission.add'))
            <li><a href="{{url('admin/permission/create')}}" class="btn btn-default"><i class="fa fa-plus"></i>添加</a>
            @endpermission
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          @include('flash::message')
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>权限列表</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                       <tr>
                        <th>#ID</th>
                        <th>权限名称</th>
                        <th>权限</th>
                        <th>描述</th>
                        <th>创建时间</th>
                        <th>修改时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/permission/permission-list.js')}}"></script>
<script>
  $(function () {
    PermissionList.init();
  });
</script>
@endsection
