@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Edit Dokter {{$dokter->id}}</h5>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<form action="{{url('/dokter',$dokter->id)}}" method="POST">
				@method('PUT')
				@csrf
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" value="{{$dokter->nama}}">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" rows="5" class="form-control">{{$dokter->alamat}}</textarea>
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<input type="text" class="form-control" name="jabatan" value="{{$dokter->jabatan}}">
				</div>
				<div class="form-group">
					<label>Poli</label>
					<input type="text" class="form-control" name="poli" value="{{$dokter->poli}}">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection