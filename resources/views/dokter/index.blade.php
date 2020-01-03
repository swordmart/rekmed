@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row pb-3">
		<div class="col-auto">
			<a href="{{url('/dokter/create')}}" class="btn btn-primary">Tambah</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Poli</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($dokters as $dok)
					<tr>
						<th scope="row">{{$dok->id}}</th>
						<td>{{$dok->nama}}</td>
						<td>{{$dok->alamat}}</td>
						<td>{{$dok->jabatan}}</td>
						<td>{{$dok->poli}}</td>
						<td>
							<span>
								<form action="{{url('/dokter',$dok->id)}}" method="POST">
									@method('DELETE')
									@csrf
									<a href="{{url('dokter', $dok->id)}}/edit" class="btn btn-warning">Edit</a>
									<input type="submit" class="btn btn-danger" value="Hapus" />
								</form>
							</span>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection