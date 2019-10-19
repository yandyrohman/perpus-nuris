<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PinjamControl extends Controller
{

	# mengaktifkan link navbar
	private function page() {
		$page = [
			'isPinjam' => 'active',
			'isTelat' => '',
			'isBuku' => '',
			'isHistori' => ''
		];
		return $page;
	}
  
  # menampilkan semua buku yang terpinjam
	public function show() {
		$data = ['datas' => DB::table('pinjam')->where('tgl_kembali','')->get()];
		$vars = $data + $this->page();
		return view('page.pinjam',$vars);
	}

	# menampilkan form pinjam
	public function form() {
		return view('form.pinjam-buku',$this->page());
	}

	# menambah pinjaman buku
	public function store(Request $input) {
		$data = [
			'nm_buku' => $input->nm_buku,
			'nm_siswa' => $input->nm_siswa,
			'kelas' => $input->kelas,
			'jml_pinjam' => $input->jml_pinjam,
			'tgl_pinjam' => date('20y-m-d'),
			'tgl_kembali' => ''
		];
		DB::table('pinjam')->insert($data);
		return redirect('/pinjam');
	}

	# buku tela dikembalikan
	public function back(Request $input) {
		$id = $input->id_pinjam;
		$data = [
			'tgl_kembali' => date('20y-m-d')
		];
		DB::table('pinjam')->where('id_pinjam',$id)->update($data);
		return redirect('/pinjam');
	}

}
