<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/27c85f9f7a.js" crossorigin="anonymous"></script>
    @stack('css')
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <title>TOPページ</title>
</head>
<body>
    <header class="header">
    <img class="header-logo" src="{{asset('image/Nectal_logo.png')}}" alt="no_logo">
    <div class="nav-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
    <div class="nav-slidebar" style="display: none;">
        <li><a href="{{route('index')}}">HOME</a></li>
        <li><a href="{{route('mypage.index')}}">MyPage</li>
        <li><a href="javascript: vaid(0);">お店の予約</a></li>
        <li><a href="javascript: vaid(0);">予約の確認</a></li>
        <li><a href="javascript: vaid(0);">お問い合わせ</a></li>
    </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>