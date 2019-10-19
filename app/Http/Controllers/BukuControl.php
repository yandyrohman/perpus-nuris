<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

# FYI : Controller ini sudah di non-aktifkan karena alasan (lihat di route)
class BukuControl extends Controller
{

	# mengaktifkan link navbar
	private function page() {
		$page = [
			'isPinjam' => '',
			'isTelat' => '',
			'isBuku' => 'active',
			'isHistori' => ''
		];
		return $page;
	}
  
  # menampilkan semua buku yang terpinjam
	public function show() {
		$data = ['datas' => DB::table('buku')->get()];
		$vars = $data + $this->page();
		return view('page.buku', $vars);
	}

	# menampilkan form tambah buku
	public function add() {
		return view('form.tambah-buku',$this->page());
	}

	# menampilkan form ubah buku
	public function edit($id) {
		$data = ['datas' => DB::table('buku')->where('id_buku',$id)->get()->first()];
		$vars = $data + $this->page();
		return view('form.ubah-buku',$vars);
	}

	# memasukan data buku
	public function store(Request $input) {
		$data = [
			'nm_buku' => $input->nm_buku,
			'jml_buku' => $input->jml_buku,
			'jml_pinjam' => 0,
			'tgl_tambah' => date('20y-m-d'),
			'tgl_ubah' => date('20y-m-d')
		];
		DB::table('buku')->insert($data);
		return redirect('/buku');
	}

	# mengubah data buku
	public function update(Request $input) {
		$id = $input->id_buku;
		$data = [
			'nm_buku' => $input->nm_buku,
			'jml_buku' => $input->jml_buku,
			'jml_pinjam' => $input->jml_pinjam,
			'tgl_ubah' => date('20y-m-d')
		];
		DB::table('buku')->where('id_buku', $id)->update($data);
		return redirect('/buku');
	}

	# menghapus data buku
	public function delete($id) {
		DB::table('buku')->where('id_buku', $id)->delete();
		return redirect('/buku');
	}

	# saran buku pada form peminjaman
	public function suggest($query) {
		$datas = DB::table('buku')->where('nm_buku', 'like', $query.'%')->limit(2)->get();
		echo $datas;
	}

}
