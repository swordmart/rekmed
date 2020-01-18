@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Proses : {{$rekmed->_pasien->nama}}</h5>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<form action="{{url('/proses', $rekmed->id)}}" method="POST">
				@csrf
				<div class="form-group">
					<label>No RekMed</label>
					<input type="text" class="form-control" name="id" name="id" readonly value="{{$rekmed->id}}">
				</div>
				<div class="form-group">
					<label>Diagnosa</label>
					<textarea name="diagnosa" class="form-control" cols="30" rows="10">{{$rekmed->diagnosa}}</textarea>
				</div>
				<div class="form-group">
					<label>Poli</label>
					<input type="text" class="form-control" name="poli" value="{{$rekmed->poli}}">
				</div>
				<div class="form-group">
					<label>NIP Dokter</label>
					<input type="text" class="form-control" name="dokter" value="{{$rekmed->dokter}}">
				</div>
				<button type="submit" class="btn btn-primary">Lanjutkan</button>
			</form>
		</div>
	</div>
</div>

@endsection