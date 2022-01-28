<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>home</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<section class="start-page">
		<img class="start-page__img" src="{{asset('images/main-logo.png')}}" alt="">
		<div class="form">
			<form>
				 <div class="form__wrap">

					<label class="form__item">Name:</label>
					<input class="form__item" type="text" name="field1" />

					<label class="form__item" >Password:</label>
					<input class="form__item" type="password" name="field5" />
					<a class="form__btn" href="{{route('profiles.index')}}">LOGIN</a>
				 </div>
			</form>
			</div>
	</section>
</body>
</html>