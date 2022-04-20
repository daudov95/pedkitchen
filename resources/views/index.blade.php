@extends('layouts.app')


@section('header')
	@include('parts.header')
@endsection

@section('content')
	<main class="main">
		<div class="block-info">
			<div class="container">
				<div class="block-info__wrap">
					<span class="block-info__text">Цифра + технологии = <span class="block-info__text--highlight">Педагогическая кухня учителя будущего</span></span>
					<a href="#" class="block-info__link">Подробнее</a>
				</div>
			</div>
		</div>

		<section class="section section-block">
			<div class="container">
				<div class="section-block__wrap">

					
					<div class="section-block__left">
						<h3 class="section-block__title">Подбор педагогических рецептов</h3>

						<span class="section-block__list-title">Педагогические ситуации и их решения:</span>
						<ul class="section-block__list">
							<li>по предмету</li>
							<li>по классу</li>
							<li>по уровню образования</li>
							<li>по структуре занятия</li>
							<li>по категориям обучающихся</li>
						</ul>

						<div class="section-block-links">
							<a href="{{ route('subscribe') }}" class="section-block__link section-block__link-primary">Подписаться на обновления</a>
							<a href="{{ route('posts') }}" class="section-block__link">Перейти к рецептам <span>→</span></a>
						</div>
					</div>

					<div class="section-block__right">
						<img src="https://www.ispring.ru/ispring_content/content/images/products/ispring-market/home/ru/market-top-image-v2.webp" alt="screen">
					</div>

				</div>
			</div>
		</section>
		

		<section class="section section-block section-block--reverse">
			<div class="container">
				<div class="section-block__wrap">

					
					<div class="section-block__left">
						<h3 class="section-block__title">Авторские рецепты</h3>

						<ul class="section-block__list">
							<li>Педагогические методики</li>
							<li>Педагогические технологии</li>
							<li>Педагогические разработки</li>
							<li>Комплекты наглядных материалов</li>
						</ul>

						<div class="section-block-links">
							<a href="{{ route('subscribe') }}" class="section-block__link section-block__link-primary">Подписаться на обновления</a>
							<a href="{{ route('posts') }}" class="section-block__link">Перейти к рецептам <span>→</span></a>
						</div>
					</div>

					<div class="section-block__right">
						<img src="https://www.ispring.ru/ispring_content/content/images/products/ispring-market/home/ru/market-top-image-v2.webp" alt="screen">
					</div>

				</div>
			</div>
		</section>

		<section class="section section-block">
			<div class="container">
				<div class="section-block__wrap">

					
					<div class="section-block__left">
						<h3 class="section-block__title">Блюда из ресторанов «MICHELIN»</h3>

						<ul class="section-block__list">
							<li>Интервью</li>
							<li>Мастер-классы</li>
							<li>Открытые уроки лауреатов и победителей конкурсов, опытных учителей</li>
						</ul>

						<div class="section-block-links">
							<a href="{{ route('subscribe') }}" class="section-block__link section-block__link-primary">Подписаться на обновления</a>
							<a href="{{ route('posts') }}" class="section-block__link">Перейти к рецептам <span>→</span></a>
						</div>
					</div>

					<div class="section-block__right">
						<img src="https://www.ispring.ru/ispring_content/content/images/products/ispring-market/home/ru/market-top-image-v2.webp" alt="screen">
					</div>

				</div>
			</div>
		</section>
	</main>
@endsection

@section('footer')
	@include('parts.footer')
@endsection

@section('menu')
	@include('parts.menu')
@endsection