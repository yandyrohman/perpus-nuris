@extends('main')

@section('content')
<div class="container">
	<h3 class="text-primary">Pinjam Buku</h3>
	<div class="row">
		<div class="card col-sm-6">
			<div class="card-body">
				<form action="/buku_ubah" method="post">
					@csrf
					<input type="hidden" name="id_buku" value="{{ $datas->id_buku }}">
					<div class="form-group">
						<label>Nama Buku</label>
						<input class="form-control" type="text" name="nm_buku" placeholder="Masukan Nama Buku" value="{{ $datas->nm_buku }}" required>
					</div>
					<div class="form-group">
						<label>Jumlah Buku</label>
						<input class="form-control" type="number" name="jml_buku" placeholder="Masukan Jumlah Pinjam" value="{{ $datas->jml_buku }}" required>
					</div>
					<div class="form-group">
						<label>Jumlah Pinjam</label>
						<input class="form-control" type="number" name="jml_pinjam" placeholder="Masukan Jumlah Pinjam" value="{{ $datas->jml_pinjam }}" required>
					</div>
					<a href="/buku" class="btn btn-secondary">Batal</a>
					<button class="btn btn-primary" type="submit">Selesai</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection