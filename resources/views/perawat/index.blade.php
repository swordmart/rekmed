@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row pb-3">
		<div class="col-auto">
			<a href="{{url('/perawat/create')}}" class="btn btn-primary">Tambah</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">NIP</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($perawats as $per)
					<tr>
						<th scope="row">{{$per->id}}</th>
						<td>{{$per->nip}}</td>
						<td>{{$per->nama}}</td>
						<td>{{$per->alamat}}</td>
						<td>{{$per->jabatan}}</td>
						<td>
							<span>
								<form action="{{url('/perawat',$per->id)}}" method="POST">
									@method('DELETE')
									@csrf
									<a href="{{url('perawat', $per->id)}}/edit" class="btn btn-warning">Edit</a>
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