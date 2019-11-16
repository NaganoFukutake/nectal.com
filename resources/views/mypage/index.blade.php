@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
        <div class="wrapper">
            <img class="profile-img" src="{{asset('image/sample.jpg')}}">
        </div>
@endsection