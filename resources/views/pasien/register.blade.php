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
			<div class="col-auto">
				<a href="{{url('/antrian')}}" class="btn btn-secondary">Kembali</a>
			</div>
			<div class="col">
				<h5>Registrasi Pasien</h5>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<form action="{{url('/pasien?antri=true')}}" method="POST">
					@method('POST')
					@csrf
					<div class="form-group">
						<label>NIK</label>
						<input type="text" class="form-control" name="nik" value="{{$nik}}" readonly>
					</div>
					<div class=" form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" rows="5" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="tanggal_lahir">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>