@extends('english.layout.authRegister')

@section('content')
<div id="login">
        <aside>
            <figure>
                <a href="{{ url('/') }}">
                 <img src="{{ Voyager::image(setting('site.logo_sticky')) }}" width="165" height="35" alt="" class="logo_sticky">
                </a>
            </figure>
            {{ Form::open(['route' => ['register'], 'method' => 'POST']) }}
            @csrf
            
                <div class="form-group">
                    <label>{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <i class="ti-user"></i>
                </div>
              
                <div class="form-group">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>{{ __('Password') }}</label>
                    <input id="password" type="password" 
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                     @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="form-group">
                <label>{{ __('Confirm Password') }}</label>
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                 <i class="icon_lock_alt"></i>
                </div>
                <div id="pass-info" class="clearfix"></div>
                <button type="submit" class="btn_1 rounded full-width add_top_30">
                        {{ __('Register') }}
                </button>
                <div class="text-center add_top_10">Already have an acccount?<strong><a href="{{ route('login') }}">Sign In</a></strong></div>
            {{ Form::close() }}
            <div class="copy">©  Emantal</div>
        </aside>
    </div>
    <!-- /login -->

@endsection
