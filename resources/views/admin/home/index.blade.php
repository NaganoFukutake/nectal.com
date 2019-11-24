@extends('layouts/admin_base')
@section('content')
@if($_COOKIE['admin-welcome'] != true)
<div class="welcome">
    {{"Welcome"}}
</div>
@endif
{{-- <div id="grid-container-2">
    <div class="grid-item grid-1">
        <a href="#"></a>
    </div>
    <div class="grid-item grid-2">
        <a href="#">会員管理</a>
    </div>
    <div class="grid-item grid-3">
        <a href="#">店舗管理</a>
    </div>
    <div class="grid-item grid-4">
        <a href="#">予約管理</a>
    </div>
    <div class="grid-item grid-5">
        <a href="#">未定</a>
    </div>
    <div class="grid-item grid-6">
        <a href="#">設定</a>
    </div>
</div> --}}
@endsection