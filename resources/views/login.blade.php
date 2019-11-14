<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lobster&display=swap" rel="stylesheet">
</head>
<body>
	<form action="{{ route('top.index') }}" method="POST">
		<div class="center">
				<img src="{{ asset('image/Nectal_logo.png') }}" class="logos">
			<ul class="listStyle f25 ">
				<li>User Name</li>
				<li><input type="" name="username" value="" class="w20" required></li>
			</ul>
			<ul class="listStyle f25 top50">
				<li>Passward</li>
				<li><input type="" name="pass" value="" class="w20" required></li>
			</ul>
			<button type="submit" class="btn top100">Login</button>
		</div>
	</form>
	<div class="center top50">
		<p><a href="#" class="linkHover">＃パスワードを忘れた方</a></p>
		<p><a href="#" class="linkHover">#ユーザーネイムを忘れた方</a></p>
		
	</div>


</body>
</html>