@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row pb-3">
		<div class="col-auto">
			<a href="{{url('/pasien/create')}}" class="btn btn-primary">Tambah</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">NIK</th>
						<th scope="col">Nama</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Alamat</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pasiens as $pas)
					<tr>
						<th scope="row">{{$pas->id}}</th>
						<td>
							<a href="{{url('pasien',$pas->nik)}}">
								{{$pas->nik}}
							</a>
						</td>
						<td>{{$pas->nama}}</td>
						<td>{{$pas->tanggal_lahir}}</td>
						<td>{{$pas->alamat}}</td>
						<td>
							<span>
								<form action="{{url('/pasien',$pas->id)}}" method="POST">
									@method('DELETE')
									@csrf
									<a href="{{url('pasien', $pas->id)}}/edit" class="btn btn-warning">Edit</a>
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