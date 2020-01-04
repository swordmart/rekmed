@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Tambah Pasien</h5>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<form action="{{url('/pasien')}}" method="POST">
				@method('POST')
				@csrf
				<div class="form-group">
					<label>NIK</label>
					<input type="text" class="form-control" name="nik">
				</div>
				<div class="form-group">
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

@endsection