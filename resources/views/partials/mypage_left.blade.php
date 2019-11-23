

<div class="left-block fl-left">
    <div class="auth-user-name">
        {{-- @if (Auth::guest()) --}}
            {{$user['name']}}
        {{-- @endif   --}}
    </div>
    <img class="profile-img" src="{{asset('image/sample.jpg')}}">
    <div class="menu-area">
        <a href="{{route('mypage.index')}}" class="mymenu">HOME</a>
        <a href="{{route('mypage.edit', $user)}}" class="mymenu">プロフィール編集</a>
        <a href="{{route('mypage.show', $user)}}" class="mymenu">アクティビティ</a>
        <a href="javascript:void(0);" class="mymenu">DM</a>
        <a href="{{route('mypage.create')}}" class="mymenu">投稿する</a>
        <a href="{{route('mypage.create')}}" class="mymenu">フォローリスト</a>
        <a href="javascript:void(0);" class="mymenu">アカウント</a>
    </div>
</div>