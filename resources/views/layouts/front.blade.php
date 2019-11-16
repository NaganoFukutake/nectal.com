<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('css')
    <title>TOPページ</title>
</head>
<body>
    <header class="header">
    <img class="header-logo" src="{{asset('image/Nectal_logo.png')}}" alt="no_logo">
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>