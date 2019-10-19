<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistoriControl extends Controller
{
	# mengaktifkan link navbar
	private function page() {
		$page = [
			'isPinjam' => '',
			'isTelat' => '',
			'isBuku' => '',
			'isHistori' => 'active'
		];
		return $page;
	}
  
  # menampilkan semua buku yang terkembalikan
	public function show() {
		$data = ['datas' => DB::table('pinjam')->where('tgl_kembali','!=','')->limit(25)->get()];
		$vars = $data + $this->page();
		return view('page.histori',$vars);
	}
}
