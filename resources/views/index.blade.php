<!DOCTYPE html>
<html>
<head>
	<title>トップページ</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
	<!-- サイドメニュー -->
	<div class="clearfix">
		<div class="w20 left h100">
			<ul class="listStyle font2 f15">
				<li><a href="#"><img class="h90" src=" {{ asset('image/sample.jpg') }}"></a></li>
				<li class="top35"><a href="#" class="linkHover">＃ホーム</a></li>
				<li class="top35"><a href="#" class="linkHover">＃検索</a></li>
				<li class="top35"><a href="#" class="linkHover">＃通知</a></li>
				<li class="top35"><a href="#" class="linkHover">＃ダイレクトメッセージ</a></li>
				<li class="top35"></li>
			</ul>
		</div>
		<!-- foreachでまワース -->
		<div class="timeline left pd100">
		  <div class="top50">
				<div class="clearfix">
					<div class="left">
						<a href="#">
							<img src="{{ asset('image/sample.jpg') }}" class="h65">
						</a>
					</div>
					<div class="left left30">
						<p>長野#弘禎@Gizumo</p>
					</div>
					<div class="textR f10">
						<span>10分前</span>
					</div>
				</div>
				<div class="dspB">
					<span>
						昨日皆ともしみじみ話してたけどって2年弱しか無かったのに、遺した功績が凄まじいんだよね。魅力的な人達に出会わせてくれて、色んな人達の価値観を変えてくれて、あそこがあったから今があるって人、きっとたくさん居ると思う。間違いなく今の私の原動力は、あそこで得た新しい人生観だな🌞
					</span>
				</div>
				<!-- 画像があれば回すif文 -->
				<div>
					<div>
						<div><img src=""></div>
					</div>
				</div>
				<!-- 画像ここまで -->
				<div class="center top50">
					<a href="" class="right100"><img src="{{ asset('image/coment.jpg')}}" class="h20"></a>
					<a href="" class="right100"><img src="{{ asset('image/retweet.png') }}" class="h20"></a>
					<a href="" class="right100"><img src="{{ asset('image/share.png')}}" class="h20"></a>
					<a href=""><img src="{{ asset('image/good.png') }}" class="h20"></a>
				</div>
				<hr width="100%" color="#000">
			</div>
				<!-- ここまで -->

			<div class="top50">
				<div class="clearfix">
					<div class="left">
						<a href="#">
							<img src="{{ asset('image/sample.jpg') }}" class="h65">
						</a>
					</div>
					<div class="left left30">
						<p>あーニキ@Gizumo</p>
					</div>
					<div class="textR f10">
						<span>1時間前</span>
					</div>
				</div>
				<div class="dspB">
					<span>
						昨日皆ともしみじみ話してたけどって2年弱しか無かったのに、遺した功績が凄まじいんだよね。魅力的な人達に出会わせてくれて、色んな人達の価値観を変えてくれて、あそこがあったから今があるって人、きっとたくさん居ると思う。間違いなく今の私の原動力は、あそこで得た新しい人生観だな🌞
					</span>
				</div>
				<!-- 画像があれば回すif文 -->
				<div class="top50">
					<div class="center">
						<img src="{{ asset('uplode/test.jpeg') }}" class="w30 br30">
						<img src="{{ asset('uplode/test2.jpeg') }}" class="w30 br30">
					</div>
				</div>
				<!-- 画像ここまで -->
				<div class="center top50">
					<a href="" class="right100"><img src="{{ asset('image/coment.jpg')}}" class="h20"></a>
					<a href="" class="right100"><img src="{{ asset('image/retweet.png') }}" class="h20"></a>
					<a href="" class="right100"><img src="{{ asset('image/share.png')}}" class="h20"></a>
					<a href=""><img src="{{ asset('image/good.png') }}" class="h20"></a>
				</div>
				<hr width="100%" color="#000">
			</div>
		</div>
	</div>

</body>
</html>