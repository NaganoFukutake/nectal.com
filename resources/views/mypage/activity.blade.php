@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
  <div class="wrapper">
      @include('partials.mypage_left')
      <div class="prof-right-block fl-left">
        <div class="btm5">
          <h2>通知</h2>
        </div>

        <!-- いいね -->
        <div class="notice">
          <a href="#">
            <div class="btm2">
              <i class="fas fa-heart" style="font-size: 40px; color: #FFA500;"></i>
              <span class="notice-title">兄貴さんがあなたの投稿にいいねをしました。</span>
            </div>
            <div class="text btm2 notice-text">
              <p>
                女優の沢尻エリカ容疑者が、東京都内の自宅で合成麻薬のＭＤＭＡを所持していたとして、警視庁に逮捕されました。<br>「私の物に間違いない」と容疑を認めているということです。
              </p>
            </div>
          </a>
          <hr width="100%" color="#FFA500">
        </div>

        <!-- フォロー -->
        <div class="notice">
          <a href="#">
            <div class="btm2">
              <i class="fas fa-sun" style="font-size: 40px; color: #FFA500;"></i>
              <img src="{{ asset('image/n-sample.png')}}" height="40px">
            </div>
            <p class="notice-title">兄貴さんがあなたをフォローしました。</p>
          </a>
          <hr width="100%" color="#FFA500">
        </div>

        <!-- コメント -->
        <div class="notice">
          <a href="#">
            <div class="btm2">
              <i class="fas fa-comments" style="font-size: 40px; color: #FFA500;"></i>
              <img src="{{ asset('image/n-sample.png')}}" height="40px">
              <span class="notice-title">兄貴さんからコメントがきました。</span>
            </div>
            <div class="text btm2 notice-text">
              <p>
                うわーーーーーーーーーー
              </p>
            </div>
          </a>
          <hr width="100%" color="#FFA500">
        </div>
      </div>



  </div>
@endsection