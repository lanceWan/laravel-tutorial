@extends('layouts.auth')

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            <h1>Reset Password</h1>
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
            <div>
              <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' parsley-error' : '' }}" placeholder="password" name="password_confirmation"/>
              @if ($errors->has('password_confirmation'))
                <p class="text-danger text-left "><strong>{{ $errors->first('password_confirmation') }}</strong></p>
              @endif
            </div>
            <div class="main_content">
              <button class="btn btn-primary submit"><i class="fa fa-btn fa-refresh"></i> Reset Password</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
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
