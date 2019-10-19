@extends('main')

@section('content')
<h3 class="text-primary">Histori Peminjaman</h3>
<table class="table table-hover table-responsive table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Tgl Kembali</th>
			<th>Tgl Pinjam</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Nama Buku</th>
			<th>Jumlah Pinjam</th>
		</tr>
	</thead>
	<tbody>
		@php $no = 1; @endphp
		@foreach($datas as $data)
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $data->tgl_kembali }}</td>
			<td>{{ $data->tgl_pinjam }}</td>
			<td>{{ $data->nm_siswa }}</td>
			<td>{{ $data->kelas }}</td>
			<td>{{ $data->nm_buku }}</td>
			<td>{{ $data->jml_pinjam }}</td>
		</tr>
		@php $no++; @endphp
		@endforeach
	</tbody>
</table>
@endsection
