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

	<main class="main archive__main">
		
		<div class="archive">

			<div class="archive__left">
				<div class="archive-block">
					<h1 class="archive__title">ПЕДАГОГИЧЕСКАЯ КУХНЯ <span>УЧИТЕЛЯ БУДУЩЕГО</span></h1>
				</div>
				<ul class="archive-menu">
					<li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon1 active2">Витрина</a></li>
					<li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon2">Педагогические ситуации и их решения</a></li>
					<li class="archive-menu__item"><a href="#" class="archive-menu__link archive--icon3">Мои избранные рецепты</a></li>
				</ul>
			</div>
			<div class="archive__right">
				<div class="archive-block">
					<h2 class="archive__title archive__title--right">Витрина</h2>
				</div>
				<div class="archive-filter">
					<ul class="archive-filter__list">
						<li class="archive-filter__item">
							<span>Подобрать педагогические ситуации</span>
						</li>
						<li class="archive-filter__item">
							<label for="cb1">
								по учебному предмету
								<input type="checkbox" name="cb1" id="cb1">
							</label>
						</li>
						<li class="archive-filter__item">
							<label for="cb2">
								по классу
								<input type="checkbox" name="cb2" id="cb2">
							</label>
						</li>
						<li class="archive-filter__item">
							<label for="cb3">
								по уровню образования
								<input type="checkbox" name="cb3" id="cb3">
							</label>
						</li>
						<li class="archive-filter__item">
							<label for="cb4">
								по категориям обучающихся
								<input type="checkbox" name="cb4" id="cb4">
							</label>
						</li>
					</ul>
				</div>

				<div class="archive-posts">

					@if (isset($posts))
					
						@foreach ($posts as $post)
							<div class="archive-post">
								<div class="archive-post__img">
									<img src="{{ $post->image }}" alt="IMG">
								</div>
								<h4 class="archive-post__title">{{ $post->title }}</h4>
								<span class="archive-post__category">Категория: общепедагогическая</span>

								<div class="archive-post-button">
									<span class="archive-post__author">Автор: Тамара Атаева</span>
									<a href="{{ route('post', ['post' => $post->id] ) }}" class="archive-post__btn">Перейти</a>
								</div>
							</div>
						@endforeach

						
					@endif


				</div>

				<div class="archive-pagonation">

					<div class="archive-pagonation__list">
						<a href="#">«</a>
						<a href="#">1</a>
						<a href="#" class="active">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#">6</a>
						<a href="#">»</a>
					</div>
				</div>

			</div>
		</div>

	
	</main>
	

	
	<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>