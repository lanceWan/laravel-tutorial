@extends('layouts.admin')
@section('css')
<!-- Select2 -->
<link href="{{asset('backend/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
<!-- nestable -->
<link href="{{asset('backend/vendors/jquery-nestable/jquery.nestable.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="">
<div class="page-title">
  <div class="title_left">
    <h3>菜单管理</h3>
  </div>
</div>

<div class="clearfix"></div>
@include('flash::message')
<div class="row">
  <!-- left panel -->
  <div class="col-md-6">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pop Overs <small>Sessions</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content bs-example-popovers">
        <div class="dd" id="nestable_list_3">
            <ol class="dd-list">
                <li class="dd-item dd3-item" data-id="13">
                    <div class="dd-handle dd3-handle"> </div>
                    <div class="dd3-content"> 
                      Item 13 
                      <div class="pull-right action-buttons">
                      <a href="javascript:;" data-pid="#" class="btn-xs createMenu" data-toggle="tooltip" data-original-title="#"  data-placement="top"><i class="fa fa-plus"></i></a>
                      <a href="javascript:;" data-href="#" class="btn-xs editMenu" data-toggle="tooltip" data-original-title="#"  data-placement="top"><i class="fa fa-pencil"></i></a>
                      <a href="javascript:;" data-id="##" class="btn-xs destoryMenu" data-original-title="##" data-toggle="tooltip"  data-placement="top"><i class="fa fa-trash"></i><form action="#" method="POST" name="delete_item" style="display:none"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value=""></form></a>
                      </div>
                    </div>
                </li>
                <li class="dd-item dd3-item" data-id="14">
                    <div class="dd-handle dd3-handle"> </div>
                    <div class="dd3-content"> Item 14 </div>
                </li>
                <li class="dd-item dd3-item" data-id="15">
                    <div class="dd-handle dd3-handle"> </div>
                    <div class="dd3-content"> Item 15 </div>
                    <ol class="dd-list">
                        <li class="dd-item dd3-item" data-id="16">
                            <div class="dd-handle dd3-handle"> </div>
                            <div class="dd3-content"> Item 16 </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="17">
                            <div class="dd-handle dd3-handle"> </div>
                            <div class="dd3-content"> Item 17 </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="18">
                            <div class="dd-handle dd3-handle"> </div>
                            <div class="dd3-content"> Item 18 </div>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end left panel -->
  <!-- right panel -->
  <div class="col-md-6">
    <div class="x_panel">
      <div class="x_title">

        <h2>菜单数据 </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br />
        <form class="form-horizontal form-label-left" action="{{url('admin/menu')}}" method="post">
          {!!csrf_field()!!}
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">菜单名称</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="名称">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">菜单图标</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="icon" value="{{old('icon')}}" placeholder="菜单图标">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">父级菜单</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1" name="parent_id">
                @inject('menus','App\Repositories\Presenter\MenuPresenter')
                {!! $menus->getMenu($menu) !!}
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">菜单链接</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="url" value="{{old('url')}}" placeholder="菜单链接">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">菜单高亮</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="heightlight_url" value="{{old('heightlight_url')}}" placeholder="菜单高亮">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">排序</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="sort" value="{{old('sort')}}" placeholder="排序">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- end right panel -->
</div>
</div>
@endsection
@section('js')
<!-- Select2 -->
<script src="{{asset('backend/vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- nestable -->
<script src="{{asset('backend/vendors/jquery-nestable/jquery.nestable.js')}}"></script>
<script>
  $(document).ready(function() {
    // Select2
    $(".select2_single").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    // nestable
    $('#nestable_list_3').nestable();
  });
</script>
@endsection