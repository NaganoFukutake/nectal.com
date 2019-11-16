@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
<div class="wrapper">
    @include('partials.mypage_left')
</div>
@endsection