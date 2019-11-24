@push('css')

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Kosugi+Maru&display=swap" rel="stylesheet">
@endpush
@extends('layouts.front')

@section('content')
<div class="center bodypd">
    <span class="title">
      Welcome to Nectal Map
    </span>
    <div class="">
        <div class="textcolor">{{ __('ログイン') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="inputbox">
                            <label for="email" class="textcolor">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputform" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="inputbox">
                            <label for="password" class="textcolor">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputform" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="textcolor" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="inputbox">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="textcolor" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="">
                              @if (Route::has('password.request'))
                                  <a class="textcolor" href="{{ route('password.request') }}">
                                      {{ __('パスワードをド忘れした方') }}
                                  </a>
                              @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
