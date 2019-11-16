@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
        <div class="wrapper">
            <img class="profile-img" src="{{asset('image/sample.jpg')}}">
        </div>
@endsection



<!-- nav-right -->
<main>


  <nav>
    <div class="nav-right hidden-xs">
      <div class="button" id="btn">
        <div class="bar top"></div>
        <div class="bar middle"></div>
        <div class="bar bottom"></div>
      </div>
    </div>
    <!-- nav-right -->
  </nav>

  <a href="https://codepen.io/tonkec/" class="ua" target="_blank">
    <i class="fa fa-user"></i>
  </a>
</main>

<div class="sidebar">
  <ul class="sidebar-list">
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 1</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 2</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 3</a></li>
    <li class="sidebar-item"><a href="#" class="sidebar-anchor">Item 4</a></li>
  </ul>
</div>