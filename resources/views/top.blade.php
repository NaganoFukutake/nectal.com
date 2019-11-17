@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/top.css') }}">
@endpush
@extends('layouts/front')
@section('content')
	<!-- 検索フォーム -->
	<div class="center">
		<form action="#" method="post">
			<input type="search" name="store" placeholder="例) 店舗名　駅名　キーワード　etc" class="Searchform">
			<input type="submit" value="検索する" class="btn pointer">
		</form>
	</div>
	<div class="clearfix pd050 top100">
		<!-- 店舗タイムライン -->
		<div class="left timeline"> 
			<div class="">
				<div class="clearfix">
					<div class="left"><a href="#"><img src="{{ asset('image/sample.jpg') }}" class="w70"></a></div>
					<div class="left"><span>魚民　西荻店</span></div>
				</div>
				<div>
					<span>
						事実なら。事実でないと祈るが、事実なら。君と呑むといつも芝居の話になった。「メンタルは芝居が好きなオッサン」と君に言った。だから君と呑むのが愉しかった。事実なら、君の行為は、君も、君の才に惚れた人たちも、君の大好きな芝居も、全て汚す。事実なら、大馬鹿野郎という言葉しか出てこない。
					</span>
				</div>
				<div class="top50">
					<a href="#" class="mright30"><img src=" {{ asset('image/coment.jpg') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/good.png') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/retweet.png') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/share.png') }}" class="w15"></a>
				</div>
				<hr width="100%" color="#FFA500">
			</div>

			<div class="top50">
				<div class="clearfix">
					<div class="left"><a href="#"><img src="{{ asset('image/sample.jpg') }}" class="w70"></a></div>
					<div class="left"><span>魚民　西荻店</span></div>
				</div>
				<div>
					<span>
						佛圓ちゃん、前髪どーしたの？笑
						かわいい😂💗
						日本騎手クラブ共催イベントありがとうございました🏇✨
						参加してくださった皆様のお陰でとっても楽しいイベントとなりました！

						和田ジョッキー、さすがですよね🤣
						ちゃんと拾い切れてたか不安や💭笑
					</span>
				</div>
				<div class="top50">
					<img src="{{ asset('uplode/test.jpeg') }}" class="w40">
					<img src="{{ asset('uplode/test2.jpeg') }}" class="w40">
				</div>
				<div class="top50">
					<a href="#" class="mright30"><img src=" {{ asset('image/coment.jpg') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/good.png') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/retweet.png') }}" class="w15"></a>
					<a href="#" class="mright30"><img src=" {{ asset('image/share.png') }}" class="w15"></a>
				</div>
				<hr width="100%" color="#FFA500">
			</div>
			
		</div>
		<!-- 店舗一覧 -->
		<div class="left">
			<div class="clearfix mleft65 top50">
				<div class="left">
					<img src=" {{ asset('image/top_test.jpg')}}">
				</div>
				<div class="left mleft10">
					<span class="f12">居酒屋|地下鉄 中洲川端駅</span><br>
					<span class="f12">もつ鍋 冬 居酒屋 飲み放題 個室 海鮮 肉寿司 飲み会 鍋 忘年会 ローストビーフ 食べ放題</span><br>
					<a href="#" class="linkstyle underbar"><span>もつ鍋　慶州</span></a><br>
					<span class="f12">忘年会にピッタリのコース3500円～◎大人数宴会も個室にご案内♪最大45名様までＯＫ☆</span><br>
					<div class="f12 lH2">
						<a href="https://www.google.com/maps/place/%E3%82%82%E3%81%A4%E9%8D%8B+%E6%85%B6%E5%B7%9E+%E8%A5%BF%E4%B8%AD%E6%B4%B2%E5%BA%97/@33.590664,130.404669,15z/data=!4m5!3m4!1s0x0:0xb2bf8efb7d44e956!8m2!3d33.590664!4d130.404669" class="linkstyle" target="_blank" rel="noopener">
							<span class="orenge">アクセス:</span><span> 地下鉄 中洲川端駅から徒歩10分</span>
						</a><br>
						<span class="orenge">営業時間:</span><span>月～日、祝日、祝前日: 17:00～翌0:00 （料理L.O. 23:00 ドリンクL.O. 23:30）</span><br>
						<span class="orenge">料金:</span><span>3000円～3500円/請求書払い可</span><br>
						<span class="orenge">席数:</span><span>230席([最大230名OK]着席時★86名以上の宴会の際もご相談下さいませ★)</span>
					</div>
					<div class="top50 btm30">
						<a class="btn mright30 linkstyle f12" type="button" href="#">Webで予約する</a>
						<a class="btn mright30 linkstyle f12" type="button" href="#">空席を確認する</a>
						<a class="btn mright30 linkstyle f12" type="button" href="#">詳細をみる</a>
					</div>
				</div>
				<hr width="100%" color="#FFA500">
			</div>
			<div class="clearfix mleft65 top50">
				<div class="left">
					<img src=" {{ asset('image/test_top2.jpg')}}">
				</div>
				<div class="left mleft10">
					<span class="f12">イタリアン・フレンチ｜岡山駅</span><br>
					<span class="f12">岡山駅 宴会 貸切 パーティー 二次会 結婚式 飲み放題 会社宴会 懇談会 会場 歓送迎会</span><br>
					<a href="#" class="linkstyle underbar"><span>THE　STYLE</span></a><br>
					<span class="f12">テーブルビュッフェorビュッフェ形式5500円～2H飲み放題/会場料/サービス料/税金込！</span><br>
					<div class="f12 lH2">
						<a href="https://www.google.com/maps/place/THE+STYLE%EF%BC%88%E3%82%B6%E3%83%BB%E3%82%B9%E3%82%BF%E3%82%A4%E3%83%AB%EF%BC%89/@34.6627571,133.9265934,15z/data=!4m5!3m4!1s0x0:0x9c55c848aa0feb2!8m2!3d34.6627571!4d133.9265934" class="linkstyle" target="_blank" rel="noopener">
							<span class="orenge">アクセス:</span><span>岡山駅より徒歩20分(車で5分)/天満屋バスターミナルより徒歩2分</span>
						</a><br>
						<span class="orenge">営業時間:</span><span>月～日、祝日、祝前日: 09:00～22:00</span><br>
						<span class="orenge">料金:</span><span>【プラン】5500円～</span><br>
						<span class="orenge">席数:</span><span>316席(着席：150名【No.20フロア】他16名/30名/120名利用可能。)</span>
					</div>
					<div class="top50 btm30">
						<a class="btn mright30 linkstyle f12" type="button" href="#">Webで予約する</a>
						<a class="btn mright30 linkstyle f12" type="button" href="#">空席を確認する</a>
						<a class="btn mright30 linkstyle f12" type="button" href="#">詳細をみる</a>
					</div>
				</div>
				<hr width="100%" color="#FFA500">
			</div>
		</div>
@endsection