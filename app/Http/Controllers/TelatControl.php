<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelatControl extends Controller
{

	# mengaktifkan link navbar
	private function page() {
		$page = [
			'isPinjam' => '',
			'isTelat' => 'active',
			'isBuku' => '',
			'isHistori' => ''
		];
		return $page;	
	}
  
  # menampilkan data pinjam yang sudah telat 
	public function show() {
		return view('page.telat',$this->page());
	}

}
