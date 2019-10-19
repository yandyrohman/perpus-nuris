<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

# Pinjam Routes
Route::get('/pinjam', 'PinjamControl@show')->middleware('auth');
Route::get('/pinjam_form', 'PinjamControl@form')->middleware('auth');
Route::post('/pinjam_store', 'PinjamControl@store')->middleware('auth');
Route::post('/pinjam_kembali', 'PinjamControl@back')->middleware('auth');

# Telat Routes
# FYI : DINONAKTIFKAN KARENA ALASAN KESEDERHANAAN
// Route::get('/telat', 'TelatControl@show');

# Buku Routes
# FYI : ROUTE INI SEMENTARA TIDAK BISA DIGUNAKAN -
# KARENA ADA MASALAH PADA PEMANGGILAN JQUERY DAN -
# UNTUK ALASAN KESEDERHANAAN APLIKASI !!
// Route::get('/buku', 'BukuControl@show');
// Route::get('/buku_tambah', 'BukuControl@add');
// Route::get('/buku_ubah/{id}', 'BukuControl@edit');
// Route::post('/buku_tambah', 'BukuControl@store');
// Route::post('/buku_ubah', 'BukuControl@update');
// Route::get('/buku_hapus/{id}', 'BukuControl@delete');
// Route::get('/api_suggest/{query}', 'BukuControl@suggest');

# Histori Routes
Route::get('/histori', 'HistoriControl@show')->middleware('auth');;

Auth::routes();
