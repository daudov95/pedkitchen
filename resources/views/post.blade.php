@extends('layouts.app')

{{-- <style>
   .tabs {
	margin-top: 50px;
    position: relative; /* Относительное позиционирование */
   }
   .tab, .tab-title {
    display: inline-block; /* Выстраиваем по горизонтали */
   }
   .tab input[type="radio"] { display: none; }
   .tab-title {
    background: #ccc; /* Цвет фона */
    padding: 5px 10px; /* Поля вокруг текста */
    border: 1px solid #666; /* Параметры рамки */
    border-bottom: none; /* Снизу линию убираем */
   }
   .tab-content {
    position: absolute; /* Абсолютное позиционирование */
    border: 1px solid #666; /* Параметры рамки */
    padding: 10px; /* Поля вокруг текста */
    left: 0; /* Размещаем у левого края */
    width: calc(100% - 20px); /* Ширина содержимого */
    display: none; /* Прячем вкладку */
   }
   .tab :checked + .tab-title {
    position: relative; /* Относительное позиционирование */
    background: #fff; /* Цвет фона */
    top: 1px; /* Сдвигаем вниз */
    z-index: 1; /* Отображаем поверх содержимого */
   }
   .tab :checked ~ .tab-content {
    display: block; /* Показываем активную вкладку */
   }

   .post-single-content {
	   display: flex;
	   flex-direction: column;
	   padding-bottom: 200px !important;
   }

   .post-single-content__img {
	   width: 100%;
	   /* text-align: center; */
   }

   img {
	   max-width: 1000px !important;
	   width: 100%;
   }

   h1 {
	   margin-top: 20px !important;
   }

</style> --}}

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
							<span>{{ $post->category ? $post->category->title : 'Не указано' }}</span>
						</li>
						<li class="archive-filter__item">
							
								@if ($post->authors && count($post->authors) == 1)
									<span class="post-single__label">Автор:</span>
								@endif
							
							<span>
								@if ($post->authors)

									@if (count($post->authors) > 1)
										Множество авторов
									@elseif(count($post->authors) == 1)
										@foreach ($post->authors as $key => $author)
											{{$author->name}}
										@endforeach
									@else 
										Не указан
									@endif
									
								@endif
								{{-- {{ $author ? $author->name : 'Не указан' }} --}}
							</span>
						</li>

						{{-- @if (auth()->check()) --}}
							<li class="archive-filter__item">
								<a href="?Add">
									<span>Добавить в «Мои избранные рецепты»</span>
								</a>
							</li>
						{{-- @endif --}}
						
					</ul>
				</div>

				
				<div class="post-single-content">

					<div class="post-single-content__img">
						<img src="{{ asset('storage/'.$post->image) }}">
					</div>
					<h1>{{ $post->title }}</h1>

					<div class="tabs">
						<div class="tab">
							<input type="radio" id="tab1" name="tab-group" checked>
							<label for="tab1" class="tab-title">{{ $post->tab1_title }}</label> 
							<section class="tab-content">
								{{ $post->tab1_desc }}
							</section>
						</div> 

						<div class="tab">
							<input type="radio" id="tab2" name="tab-group">
							<label for="tab2" class="tab-title">{{ $post->tab2_title }}</label> 
							<section class="tab-content">
								{{ $post->tab2_desc }}
							</section>
						</div>

						<div class="tab">
							<input type="radio" id="tab3" name="tab-group">
							<label for="tab3" class="tab-title">{{ $post->tab3_title }}</label> 
							<section class="tab-content">
								{{ $post->tab3_desc }}
							</section> 
						</div> 

						<div class="tab">
							<input type="radio" id="tab4" name="tab-group">
							<label for="tab4" class="tab-title">{{ $post->tab4_title }}</label> 
							<section class="tab-content">
								{{ $post->tab4_desc }}
							</section> 
						</div> 
					</div>

				</div>
				

			</div>
		</div>

	</main>
@endsection