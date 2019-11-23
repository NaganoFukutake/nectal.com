<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.cookie.js')}}"></script>
    <title>Admin</title>
</head>
<body>
    <header class="admin-header">
        <img src="{{asset('image/nectal_logo.jpg')}}" alt="">
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>