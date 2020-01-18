<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="container py-5">
		<div class="row">
			<div class="col">
				<h1 class="Text Center">
					Anda mendapat nomor antrian {{ $nomor }}
				</h1>
				<script>
					setTimeout(function(){
						window.location = '/antrian';
					}, 3000);
				</script>
			</div>
		</div>
	</div>
</body>

</html>