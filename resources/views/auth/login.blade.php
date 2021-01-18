@extends('layouts.auth')

@section('content')
    <div class="login-universal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 login-entire flex-center">
                    <div class="row">
                        <div class="col-md-6 d-none d-md-flex">
                            <img src="{{ asset('img/logo-clear.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 flex-center flex-column">
                            <div class="form-login login-form col-12">
                                <div class="">
                                    <h3 class="display font-weight-bolder">{{ __('Login to Get it here') }}</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}" class="w-100">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                                            <div class="">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-form-label ">{{ __('Password') }}</label>

                                            <div class="">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group mt-2 mb-3">
                                            <div class="">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="">
                                                <button type="submit" class="btn btn-sm btn-block"
                                                    style="background: green;color:white">
                                                    {{ __('Login') }}
                                                </button>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                    <p>Don't have an account?
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="third-party login-form col-12 d-none">
                                <div class="">
                                    <h3 class="display font-weight-bolder">{{ __('Login to Get it here') }}</h3>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <form action="">
                                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    </form>

                                </div>
                                <fieldset class="remember-me">
                                    <label>
                                        <input type="checkbox" name="remember_me" id="remember_me"
                                            class="remember-me-checkbox">
                                        <span>
                                            Remember me
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
