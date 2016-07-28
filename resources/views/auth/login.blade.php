@extends('layouts.auth')

@section('content')
<div class="login_wrapper">
  <div class="animate form login_form">
    <section class="login_content">
      <form action="{{ url('/login') }}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {{csrf_field()}}
        <h1>Login</h1>
        <div>
          <input type="text" class="form-control {{ $errors->has(config('admin.globals.username')) ? ' parsley-error' : '' }}" placeholder="{{config('admin.globals.username')}}" name="{{config('admin.globals.username')}}" value="{{old(config('admin.globals.username'))}}" />
          @if ($errors->has(config('admin.globals.username')))
            <p class="text-danger text-left "><strong>{{ $errors->first(config('admin.globals.username')) }}</strong></p> 
          @endif
        </div>
        <div>
          <input type="password" class="form-control {{ $errors->has('password') ? ' parsley-error' : '' }}" placeholder="password" name="password" />
          @if ($errors->has('password'))
            <p class="text-danger text-left "><strong>{{ $errors->first('password') }}</strong></p> 
          @endif
        </div>
        <div class="row">
          <div class="col-md-8"><input type="text" class="form-control {{ $errors->has('captcha') ? ' parsley-error' : '' }}" placeholder="captcha" name="captcha" /></div>
          <div class="col-md-4"><img src="{{captcha_src()}}" style="cursor: pointer;" onclick="this.src='{{captcha_src()}}'+Math.random()"></div>
          @if ($errors->has('captcha'))
            <div class="col-md-12">
              <p class="text-danger text-left "><strong>{{ $errors->first('captcha') }}</strong></p> 
            </div>
          @endif
        </div>
        <div class="checkbox">
          <label class="pull-left">
            <input type="checkbox" name="remember"> Remember Me
          </label>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div>
          <button class="btn btn-primary submit" type="submit">Log in</button>
          <a class="reset_pass" href="{{url('/password/reset')}}">Lost your password?</a>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <p class="change_link">New to site?
            <a href="{{url('/register')}}" class="to_register"> Create Account </a>
          </p>

          <div class="clearfix"></div>
          <br />

          <div>
            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
          </div>
        </div>
      </form>
    </section>
  </div>
</div>
@endsection
