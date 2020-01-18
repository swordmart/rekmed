@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col">
			<a href="{{url('/pasien')}}">Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			Rekam Medis Pasien : {{$pasien->nama}}
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr />
		</div>
	</div>
	@foreach ($pasien->_rekmeds as $rekmed)
	<div class="bg-primary rounded">
		<div class="row">
			<div class="col">
				<div class="text-white p-3">
					<h5>{{$rekmed->tanggal}}</h5>
					<hr class="bg-white">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="p-3">
					<textarea class="form-control" readonly cols="30" rows="10">{{$rekmed->diagnosa}}</textarea>
				</div>
			</div>
			<div class="col">
				<div class="text-white">
					<div class="form-group">
						<label>Dokter</label>
						<input type="text" class="form-control" value="{{$rekmed->_dokter->nama}}">
					</div>
					<div class="form-group">
						<label>Poli</label>
						<input type="text" class="form-control" value="{{$rekmed->poli}}">
					</div>
					<div class="form-group">
						<label>Resep</label>
						<input type="text" class="form-control" value="{{$rekmed->resep}}">
					</div>
				</div>
			</div>
		</div>
	</div>

	@endforeach
</div>
@endsection