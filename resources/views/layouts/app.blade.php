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

    @yield('header')

    @yield('content')

    @yield('footer')

    @yield('menu')

	<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>