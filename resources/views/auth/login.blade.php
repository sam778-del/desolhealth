@extends('english.layout.authLogin')

@section('content')
<div id="login">
        <aside>
            <figure>
                <a href="{{ url('/') }}">
                 <img src="{{ Voyager::image(setting('site.logo_sticky')) }}" height="55" alt="" class="logo_sticky">
                </a>
            </figure>
              {{ Form::open(['route' => ['login'], 'method' => 'POST']) }}
              @csrf
                <div class="form-group">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                           name="password" required>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <label class="container_check">{{ __('Remember Me') }}
                          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>
                </div>
                <button type="submit" class="btn_1 rounded full-width">
                        {{ __('Login') }}
                </button>
                <div class="text-center add_top_10">New to {{ setting('site.title') }}? <strong>
                    <a href="{{ route('register') }}">Sign up!</a></strong>
                </div>
            </form>
            <div class="copy">©  {{ setting('site.title') }}</div>
        </aside>
    </div>
    <!-- /login -->
@endsection