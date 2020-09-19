<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
				@yield('title')
				{{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
				{{ $page->site->title }} - {{ $page->site->role }}
		</title>

		@include('_partials.head.favicon')
		@include('_partials.head.meta')
		@include('_partials.cms.identity_widget')

		<link rel="stylesheet" href="https://use.typekit.net/oyp8cdc.css">
		<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
	<div class="container">
		@include('_partials.header')

		<main>
			@yield('content')
		</main>

		@include('_partials.footer')
	</div>

		<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
		@includeWhen($page->production, '_partials.analytics')
		@include('_partials.cms.identity_redirect')
</body>
</html>
