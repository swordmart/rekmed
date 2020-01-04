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
		<div class="row mb-5">
			<div class="col-auto text-secondary">
				REKMED (ricomartin)
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-auto">
				<div class="border rounded border-primary bg-primary text-white p-4">
					<h5 class="text-center">No Antrian</h5>
					<h1 class="text-center display-4">{{$antrian}}</h1>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-3">
				<form action="/antri" method="POST">
					@csrf
					<div class="form-group">
						<label>NIK</label>
						<input type="text" class="form-control" name="nik">
						<small>Masukkan NIK, anda akan diarahkan menuju halaman registrasi pasien jika belum
							terdaftar.</small>
					</div>
					<div class="text-right">
						<input class="btn btn-success" type="submit" value="Antri">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>