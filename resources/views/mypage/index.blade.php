@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
        <div class="wrapper">
            @include('partials.mypage_left')
            <div class="right-block fl-left">
                <div class="mypost-area">
                    <div class="content">
                        <div class="content-top clearfix">
                            <img class="fl-left content-prof-image" src="{{asset('image/sample.jpg')}}" alt="myimage">
                            <p class="fl-left user-name">MYNAME@MYNAME</p>
                        </div>
                        <div class="text">
                            <p>
                                    女優の沢尻エリカ容疑者が、東京都内の自宅で合成麻薬のＭＤＭＡを所持していたとして、警視庁に逮捕されました。<br>「私の物に間違いない」と容疑を認めているということです。
                            </p>
                        </div>
                        <div class="content-action">
                            <i class="action-btn far fa-comment-dots"></i>
                            <i class="action-btn far fa-thumbs-up"></i>
                            <i class="action-btn far fa-share-square"></i>
                        </div>

                    </div>
                </div>
            </div>
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