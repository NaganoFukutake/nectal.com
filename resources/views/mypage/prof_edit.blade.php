@push('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endpush
@extends('layouts/front')
@section('content')
<div class="wrapper">
    @include('partials.mypage_left')
</div>
<div class="prof-right-block fl-left">
  <div>
    <form action="＃" method="post" class="center">
      <div class="btm2">
        <span>プロフィール画像</span>
      </div>
      <div class="btm5 m-left">
        <input type="file" name="" value="">
      </div>
      <div class="btm2">
        <span>ユーザーネーム</span>
      </div>
      <div class="btm5">
        <input type="text" name="" value="" class="input-box" placeholder="変更前の情報が入る">
      </div>
      <div class="btm2">
        <span>メールアドレス</span>
      </div>
      <div class="btm5">
        <input type="text" name="" value="" class="input-box" placeholder="変更前の情報が入る">
      </div>
      <div class="btm2">
        <span>電話番号</span>
      </div>
      <div class="btm5">
        <input type="text" name="" value="" class="input-box" placeholder="変更前の情報が入る">
      </div>
      <input type="submit" value="完了" class="btn">
    </form>
  </div>
</div>
@endsection