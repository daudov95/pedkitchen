@extends('layouts.app')

{{-- @section('styles')
	<style>
		.subscribe__right {
			background-image: url({{ asset('assets/img/subscribe/bg2.png') }});
		}
	</style>
	
@endsection --}}

@section('content')
    <main class="main subscribe__main">
		
		<div class="subscribe">
			<div class="subscribe__left">

				@if(Session::has('success'))
					<div class="alert alert-success">
						{{ Session::get('success')}}
					</div>
				@endif

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul style="margin-bottom: 0px">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<style>
					.subscribe-form__textarea {
						min-height: 130px;
						padding: 10px;
					}
				</style>

				{{-- <h2 style="margin-bottom: 40px; font-size: 35px; text-align: center; line-height: 1.2;">Форма для ваших вопросов</h2> --}}

				<h1 class="subscribe__title">Получайте ответы на интересующие вас вопросы</h1>
				<form action="{{ route('contactForm.send') }}" method="POST" class="subscribe-form">
					@CSRF
					<input type="text" class="subscribe-form__input" placeholder="Ваше имя" name="name" value="{{ old('name') }}">
					<input type="email" class="subscribe-form__input" placeholder="Ваш Email" name="email" value="{{ old('email') }}">
					<input type="text" class="subscribe-form__input" placeholder="Тема" name="topic" value="{{ old('topic') }}">
					<textarea name="message" class="subscribe-form__input subscribe-form__textarea" placeholder="Ваш вопрос" cols="30" rows="10">{{ old('message') }}</textarea>
					{{-- <label for="cb" class="subscribe-form__label">
						<input type="checkbox" name="checkbox" id="cb" name="checkbox" {{ old('checkbox') == 'on' ? 'checked' : '' }} class="subscribe-form__checkbox">
						Я согласен получать рассылки от сайта на электронную почту
					</label> --}}
					<button class="subscribe-form__btn">Отправить</button>
				</form>
				<a href="{{ route('index') }}" class="subscribe__policy">Назад</a>
			</div>
			<div class="subscribe__right"></div>
		</div>
	
	</main>
@endsection