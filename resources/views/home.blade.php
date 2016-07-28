@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                @role('admin')
                    <div class="panel-body">
                        <p>This is visible to users with the admin role. Gets translated to 
                        \Entrust::role('admin')</p>
                    </div>
                @endrole
                @permission('create users')
                    <div class="panel-body">
                        <p>create users</p>
                    </div>
                @endpermission
            </div>
        </div>
    </div>
</div>
@endsection
