@extends('layouts.app')

@section('content')
	<main class="main archive__main">
		
		<div class="archive post-single">

			@include('parts.side')
			
			<div class="archive__right">
				<div class="archive-block">
					<h2 class="archive__title archive__title--right">
					@if ($post->title)
						{{ $post->title }}
					@endif
					</h2>
				</div>
				<div class="archive-filter">
					<ul class="archive-filter__list">
						<li class="archive-filter__item">
							<span class="post-single__label">Категория:</span>
							<span>{{ $category ? $category->title : 'Не указано' }}</span>
						</li>
						<li class="archive-filter__item">
							<span class="post-single__label">Автор:</span>
							<span>{{ $author ? $author->name : 'Не указан' }}</span>
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