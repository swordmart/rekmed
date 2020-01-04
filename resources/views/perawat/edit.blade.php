@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Edit Perawat {{$perawat->id}}</h5>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<form action="{{url('/perawat', $perawat->id)}}" method="POST">
				@method('PUT')
				@csrf
				<div class="form-group">
					<label>NIP</label>
					<input type="text" class="form-control" name="nip" value="{{$perawat->nip}}">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" value="{{$perawat->nama}}">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" rows="5" class="form-control">{{$perawat->alamat}}</textarea>
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<input type="text" class="form-control" name="jabatan" value="{{$perawat->jabatan}}">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection