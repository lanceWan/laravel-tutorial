@extends('layouts.auth')

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h1>Login Form</h1>
            <div>
                <input type="text" class="form-control{{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="email" name="email" value="{{old('email')}}" />
                @if ($errors->has('email'))
                    <p class="text-danger text-left "><strong>{{ $errors->first('email') }}</strong></p>
                @endif
            </div>
            <div>
              <input type="password" class="form-control{{ $errors->has('password') ? ' parsley-error' : '' }}" placeholder="password" name="password"/>
              @if ($errors->has('password'))
                <p class="text-danger text-left "><strong>{{ $errors->first('password') }}</strong></p>
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
              <button class="btn btn-primary submit">Log in</button>
              <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
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
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
