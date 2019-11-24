<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('nectal-fav.ico')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/27c85f9f7a.js" crossorigin="anonymous" samesite="none"></script>
    @stack('css')
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <title>TOPページ</title>
</head>
<body>
    <header class="header relative">
    <a href="{{route('index')}}">
        <img class="header-logo" src="{{asset('image/Nectal_logo.png')}}" alt="no_logo">
    </a>

    <div class="header-icon">
        @if (Auth::check())
        <a href="{{route('mypage.index')}}">
            <img class="icon" src="{{ asset('image/n-sample.png') }}">
        </a>
        @else
        <a class="register" href="{{route('register')}}">{{ __('新規登録') }}</a>
        <a class="login" href="{{route('login')}}">{{ __('ログイン') }}</a>
        @endif
    </div>

    <div class="nav-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
    <div class="nav-slidebar" style="display: none;">
        @if(Auth::guest())
        <li><a href="{{route('index')}}">HOME</a></li>
        @endif
        @if(Auth::check())
        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <li><a href="{{route('mypage.index')}}">MyPage</a></li>
        <li><a href="javascript: vaid(0);">お店の予約</a></li>
        <li><a href="javascript: vaid(0);">予約の確認</a></li>
        @endif
        <li><a href="javascript: vaid(0);">お問い合わせ</a></li>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
    </form>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>