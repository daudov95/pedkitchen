<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset("assets/css/style.min.css") }}">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>ЧГПУ - Педагогическая кухня</title>


</head>
<body>

	<main class="main subscribe__main">
		
		<div class="subscribe">
			<div class="subscribe__left">
				<h1 class="subscribe__title">Получай педагогические рецепты в числе первых</h1>
				<div class="subscribe-form">
					<input type="text" class="subscribe-form__input" placeholder="Ваше имя">
					<input type="text" class="subscribe-form__input" placeholder="Email">
					<input type="text" class="subscribe-form__input" placeholder="Телефон">
					<label for="cb" class="subscribe-form__label">
						<input type="checkbox" name="checkbox" id="cb" class="subscribe-form__checkbox">
						Я согласен получать рассылки от сайта на электронную почту
					</label>
					<button class="subscribe-form__btn">Отправить</button>
				</div>
				<span class="subscribe__notice">Нажимая на кнопку «Отправить», вы принимаете</span>
				<a href="#" class="subscribe__policy">Политику конфиденциальности и Лицензионное соглашение.</a>
			</div>
			<div class="subscribe__right"></div>
		</div>
	
	</main>
	

	
	<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>