@extends('layouts.auth')

<!-- Main Content -->
@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            <h1>Reset Password</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                <input type="text" class="form-control{{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="email" name="email" value="{{old('email')}}" />
                @if ($errors->has('email'))
                    <p class="text-danger text-left "><strong>{{ $errors->first('email') }}</strong></p>
                @endif
            </div>
            <div class="main_content">
              <button class="btn btn-primary submit"><i class="fa fa-btn fa-envelope"></i> Send Password Reset Link</button>
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
