@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Tambah Dokter</h5>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<form action="{{url('/dokter')}}" method="POST">
				@method('POST')
				@csrf
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<input type="text" class="form-control" name="jabatan">
				</div>
				<div class="form-group">
					<label>Poli</label>
					<input type="text" class="form-control" name="poli">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection