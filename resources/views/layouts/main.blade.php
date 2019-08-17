<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta itemprop="url" content="https://domain.com">
	<meta name="author" content="Jardel Frank">
	@yield('robots')

	@yield('description')

	<title>
		@yield('title')
	</title>

	<link rel="canonical" href="{{URL::current()}}"/>

	<meta name="theme-color" content="#263238"/>
	
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
	@yield('styles')

	<script type="text/javascript">
		window.Laravel = {!! json_encode ([
			'csrf' => csrf_token(),
			'pusher' => [
				'key' => config('broadcasting.connections.pusher.key'),
				'cluster' => config('broadcasting.connections.pusher.options.cluster'),
			],
			'user' => auth()->check() ? auth()->user()->id : '',
		]) !!}
	</script>
</head>
<body>

	<main id="app">
		@yield('content')
	</main>

	<script src="{{ URL::asset('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>
