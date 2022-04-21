@extends('layouts.app')

@section('content')
	<main class="main archive__main">
		
		<div class="archive post-single">

			@include('parts.leftMenu')
			
			<div class="archive__right">
				<div class="archive-block">
					<h2 class="archive__title archive__title--right">Ситуация «Испытание»</h2>
				</div>
				<div class="archive-filter">
					<ul class="archive-filter__list">
						<li class="archive-filter__item">
							<span class="post-single__label">Категория:</span>
							<span>общепедагогическая</span>
						</li>
						<li class="archive-filter__item">
							<span class="post-single__label">Автор:</span>
							<span>Тамара Атаева</span>
						</li>
						<li class="archive-filter__item">
							<span>Добавить в «Мои избранные рецепты»</span>
						</li>
					</ul>
				</div>

				
				<div class="post-single-content">
					<img src="{{ $post->image }}">
					{{ $post->title }}
				</div>
				

			</div>
		</div>

	</main>
@endsection