@extends('main')

@section('content')
<div class="container">
	<h3 class="text-primary">Pinjam Buku</h3>
	<div class="row">
		<div class="card col-sm-6">
			<div class="card-body">
				<form action="/pinjam_store" method="post">
					@csrf
					<div class="form-group">
						<label>Nama Buku</label>
						<input class="form-control api_suggest" type="text" name="nm_buku" placeholder="Masukan Nama Buku" required>
					</div>
					<div class="form-group">
						<label>Nama Siswa</label>
						<input class="form-control" type="text" name="nm_siswa" placeholder="Masukan Nama Siswa" required>
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<select class="form-control" name="kelas">
							<option hidden>Pilih Kelas</option>
							<optgroup>
								<option>X RPL 1</option>
								<option>X RPL 2</option>
								<option>X RPL 3</option>
								<option>X RPL 4</option>
								<option>X AK 1</option>
								<option>X AK 2</option>
								<option>X AK 3</option>
								<option>X AK 4</option>
								<option>X OTKP/AP 1</option>
								<option>X OTKP/AP 2</option>
								<option>X OTKP/AP 3</option>
								<option>X OTKP/AP 4</option>
								<option>X MM 1</option>
								<option>X MM 2</option>
								<option>X MM 3</option>
								<option>X MM 4</option>
								<option>X TKJ 1</option>
								<option>X TKJ 2</option>
								<option>X TKJ 3</option>
								<option>X TKJ 4</option>
							</optgroup>
							<optgroup>
								<option>XI RPL 1</option>
								<option>XI RPL 2</option>
								<option>XI RPL 3</option>
								<option>XI RPL 4</option>
								<option>XI AK 1</option>
								<option>XI AK 2</option>
								<option>XI AK 3</option>
								<option>XI AK 4</option>
								<option>XI OTKP/AP 1</option>
								<option>XI OTKP/AP 2</option>
								<option>XI OTKP/AP 3</option>
								<option>XI OTKP/AP 4</option>
								<option>XI MM 1</option>
								<option>XI MM 2</option>
								<option>XI MM 3</option>
								<option>XI MM 4</option>
								<option>XI TKJ 1</option>
								<option>XI TKJ 2</option>
								<option>XI TKJ 3</option>
								<option>XI TKJ 4</option>
							</optgroup>
							<optgroup>
								<option>XII RPL 1</option>
								<option>XII RPL 2</option>
								<option>XII RPL 3</option>
								<option>XII RPL 4</option>
								<option>XII AK 1</option>
								<option>XII AK 2</option>
								<option>XII AK 3</option>
								<option>XII AK 4</option>
								<option>XII OTKP/AP 1</option>
								<option>XII OTKP/AP 2</option>
								<option>XII OTKP/AP 3</option>
								<option>XII OTKP/AP 4</option>
								<option>XII MM 1</option>
								<option>XII MM 2</option>
								<option>XII MM 3</option>
								<option>XII MM 4</option>
								<option>XII TKJ 1</option>
								<option>XII TKJ 2</option>
								<option>XII TKJ 3</option>
								<option>XII TKJ 4</option>
							</optgroup>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Pinjam</label>
						<input class="form-control" type="number" name="jml_pinjam" placeholder="Masukan Jumlah Pinjam" required>
					</div>
					<a href="/pinjam" class="btn btn-secondary">Batal</a>
					<button class="btn btn-primary" type="submit">Selesai</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection