<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="music play list">
	<meta name="author" content="M. Benaricha">
	
	<!-- CSRF Token -->
	<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

	<title>@yield('title','Med Music')</title>
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">    
	@yield('css')
</head>
<body>
	@yield('navbar')
	<div class="container" id="maincontent">		
		@yield('content')
	</div>
	<script src="/js/app.js"></script>
	@yield('js')
</body>
</html>