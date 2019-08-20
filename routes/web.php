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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/logout', function () {
  auth()->logout();
  return redirect('/login');
});

Route::group([
  'middleware' => 'auth'
], function () {
  Route::get('/', 'HomeController@index');
  /*  */
  Route::get('/jurusan', 'MasterController@indexJurusan');
  Route::get('/create-jurusan', 'MasterController@createJurusan');
  Route::get('/edit-jurusan/{id}', 'MasterController@editJurusan');
  Route::post('/store-jurusan', 'MasterController@storeJurusan');
  Route::patch('/update-jurusan/{id}', 'MasterController@updateJurusan');
  Route::get('/delete-jurusan/{id}', 'MasterController@destroyJurusan');
  Route::get('/data-jurusan', 'MasterController@dataJurusan');
  /*  */
  Route::get('/siswa', 'MasterController@indexSiswa');
  Route::get('/create-siswa', 'MasterController@createSiswa');
  Route::get('/edit-siswa/{id}', 'MasterController@editSiswa');
  Route::post('/store-siswa', 'MasterController@storeSiswa');
  Route::patch('/update-siswa/{id}', 'MasterController@updateSiswa');
  Route::get('/delete-siswa/{id}', 'MasterController@destroySiswa');
  Route::get('/data-siswa', 'MasterController@dataSiswa');
  /*  */
  Route::get('/kelas', 'MasterController@indexKelas');
  Route::get('/create-kelas', 'MasterController@createKelas');
  Route::get('/edit-kelas/{id}', 'MasterController@editKelas');
  Route::post('/store-kelas', 'MasterController@storeKelas');
  Route::patch('/update-kelas/{id}', 'MasterController@updateKelas');
  Route::get('/delete-kelas/{id}', 'MasterController@destroyKelas');
  Route::get('/data-kelas', 'MasterController@dataKelas');
  /*  */
  Route::get('/jenis-bayar', 'MasterController@indexJenisBayar');
  Route::get('/create-jenis-bayar', 'MasterController@createJenisBayar');
  Route::get('/edit-jenis-bayar/{id}', 'MasterController@editJenisBayar');
  Route::post('/store-jenis-bayar', 'MasterController@storeJenisBayar');
  Route::patch('/update-jenis-bayar/{id}', 'MasterController@updateJenisBayar');
  Route::get('/delete-jenis-bayar/{id}', 'MasterController@destroyJenisBayar');
  Route::get('/data-jenis-bayar', 'MasterController@dataJenisBayar');
  /*  */
  Route::get('/user', 'MasterController@indexUser');
  Route::get('/create-user', 'MasterController@createUser');
  /*  */
  Route::get('/tahun-pelajaran', 'MasterController@indexTahunPembayaran');
  Route::get('/create-tahun-pelajaran', 'MasterController@createTahunPelajaran');
  Route::get('/edit-tahun-pelajaran/{id}', 'MasterController@editTahunPelajaran');
  Route::post('/store-tahun-pelajaran', 'MasterController@storeTahunPelajaran');
  Route::patch('/update-tahun-pelajaran/{id}', 'MasterController@updateTahunPelajaran');
  Route::get('/delete-tahun-pelajaran/{id}', 'MasterController@destroyTahunPelajaran');
  Route::get('/data-tahun-pelajaran', 'MasterController@dataTahunPelajaran');
  /*  */
  Route::get('/pembayaran', 'PembayaranController@indexPembayaran');
  Route::post('/store-pembayaran', 'PembayaranController@storePembayaran');
  Route::get('/pembayaran/{id}', 'PembayaranController@showPembayaran');
  Route::post('/store-spp', 'PembayaranController@updatePembayaran');
  /*  */
  Route::get('/rekap-pembayaran', 'PembayaranController@rekapPembayaran');
  /*  */
  Route::get('/cetak-tagihan', 'PembayaranController@cetakTagihan');
  Route::post('/store-tagihan', 'PembayaranController@storeTagihan');
  Route::get('/cetak-tagihan/{bulan}', 'PembayaranController@showTagihan');
  Route::get('/data-tagihan', 'PembayaranController@dataRekapTagihan');
  /*  */
});
