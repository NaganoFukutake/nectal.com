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
                                    The right thing… what is it?<br>
                                    I wonder if you do the right thing…<br>
                                    Does it really make everybody happy?
                            </p>
                        </div>
                        <div class="content-action">
                            <i class="action-btn far fa-comment-dots"></i>
                            <i class="action-btn far fa-thumbs-up"></i>
                            <i class="action-btn far fa-share-square"></i>
                        </div>
                        <div class="under-line"></div>
                    </div>
                </div>
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
                            <div class="under-line"></div>
                        </div>
                    </div>
            </div>
        </div>
@endsection