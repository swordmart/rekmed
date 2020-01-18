@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h5>Rekam Medis</h5>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<small>Antrian</small>
			<hr />
		</div>
	</div>
	<div class="row">
		<div class="col">
			Menunggu panggilan pendataan poli.
		</div>
	</div>
	<div class="row py-2">
		@foreach ($rekmeds as $r)
		<div class="col-3 mb-2 py-2">
			<div class="card w-100 rounded bg-primary text-white" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">{{$r->_pasien->nama}}</h5>
					{{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
					<small>Alamat</small>
					<p class="card-text">{{$r->_pasien->alamat}}</p>
					<small>{{$r->_pasien->tanggal_lahir}}</small>
					<br>
					<a href="{{url('proses',$r->id)}}" class="btn btn-sm btn-light">Proses</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<hr>
	<div class="row">
		<div class="col">
			Menunggu panggilan dokter
		</div>
	</div>
	<div class="row py-2">
		@foreach ($rekmeds2 as $r)
		<div class="col-3 mb-2 py-2">
			<div class="card w-100 rounded bg-dark text-white" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">{{$r->_pasien->nama}}</h5>
					{{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
					<small>Alamat</small>
					<p class="card-text">{{$r->_pasien->alamat}}</p>
					<small>{{$r->_pasien->tanggal_lahir}}</small>
					<br>
					<a href="{{url('prosesdokter',$r->id)}}" class="btn btn-sm btn-light">Proses</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection