@extends('main')

@section('content')
<h3 class="text-primary">Data Peminjaman Buku</h3>
<a href="/pinjam_form" class="btn btn-success" style="margin-bottom: 20px">
	Pinjam Buku
</a>
<table class="table table-hover table-responsive table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Nama Buku</th>
			<th>Jumlah Pinjam</th>
			<th>Tanggal Pinjam</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		@php $no = 1; @endphp
		@foreach($datas as $data)
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $data->nm_siswa }}</td>
			<td>{{ $data->kelas }}</td>
			<td>{{ $data->nm_buku }}</td>
			<td>{{ $data->jml_pinjam }}</td>
			<td>{{ $data->tgl_pinjam }}</td>
			<td>
				<form action="/pinjam_kembali" method="post">
					@csrf
					<input type="hidden" name="id_pinjam" value="{{ $data->id_pinjam }}">
					<button type="submit" class="btn btn-primary">Dikembalikan</button>
				</form>
			</td>
		</tr>
		@php $no++; @endphp
		@endforeach
	</tbody>
</table>
@endsection
