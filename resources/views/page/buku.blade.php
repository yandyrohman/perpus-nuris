@extends('main')

@section('content')
<h3 class="text-primary">Daftar Buku</h3>
<a href="/buku_tambah" class="btn btn-success" style="margin-bottom: 20px">Tambah Buku</a>
<table class="table table-hover table-responsive table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Buku</th>
			<th>Jumlah Asal</th>
			<th>Dipinjam</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		@php $no = 1; @endphp
		@foreach($datas as $data)
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $data->nm_buku }}</td>
			<td>{{ $data->jml_buku }}</td>
			<td>{{ $data->jml_pinjam }}</td>
			<td>
				<a href="/buku_ubah/{{ $data->id_buku }}" class="btn btn-sm btn-secondary">Edit</a>
				<a href="/buku_hapus/{{ $data->id_buku }}" class="btn btn-sm btn-danger">Hapus</a>
			</td>
		</tr>
		@php $no++; @endphp
		@endforeach
	</tbody>
</table>
@endsection
