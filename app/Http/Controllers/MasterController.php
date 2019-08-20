<?php

namespace App\Http\Controllers;

use App\Model\JenisBayar;
use App\Model\Jurusan;
use App\Model\Kelas;
use App\Model\Siswa;
use App\Model\TahunPelajaran;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MasterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexJurusan()
  {
    //
    return view('pages.master.jurusan');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexSiswa()
  {
    //
    return view('pages.master.siswa');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexKelas()
  {
    //
    return view('pages.master.kelas');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexJenisBayar()
  {
    //
    return view('pages.master.jenis-bayar');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexUser()
  {
    //
    return view('pages.master.user');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexTahunPembayaran()
  {
    //
    return view('pages.master.tahun-pembayaran');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createJurusan()
  {
    //
    return view('pages.master.create-jurusan');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createSiswa()
  {
    $kelas = Kelas::with('jurusan', 'tahun')->get();
    return view('pages.master.create-siswa', ['kelas' => $kelas]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createKelas()
  {
    //
    $tahun = TahunPelajaran::get();
    $jurusan = Jurusan::get();
    return view('pages.master.create-kelas', ['tahun' => $tahun, 'jurusan' => $jurusan]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createJenisBayar()
  {
    //
    $kelas = Kelas::with('tahun', 'jurusan')->get();
    return view('pages.master.create-jenis-bayar', ['kelas' => $kelas]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createUser()
  {
    //
    return view('pages.master.create-user');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createTahunPelajaran()
  {
    //
    return view('pages.master.create-tahun-pelajaran');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeJurusan(Request $request)
  {
    Jurusan::create([
      'jurusan' => $request->input('jurusan'),
      'kode_jurusan' => $request->input('kode_jurusan')
    ]);

    return redirect('/jurusan');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeSiswa(Request $request)
  {
    Siswa::create([
      'id_kelas' => $request->input('id_kelas'),
      'nis' => $request->input('nis'),
      'nama' => $request->input('nama'),
      'no_telp' => $request->input('no_telp')
    ]);

    return redirect('/siswa');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeTahunPelajaran(Request $request)
  {
    TahunPelajaran::create([
      'tahun_pelajaran' => $request->input('tahun_pelajaran')
    ]);

    return redirect('/tahun-pelajaran');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeJenisbayar(Request $request)
  {
    JenisBayar::create([
      'id_kelas' => $request->input('id_kelas'),
      'jumlah' => $request->input('jumlah'),
    ]);

    return redirect('/jenis-bayar');
  }

  public function storeKelas(Request $request)
  {
    Kelas::create([
      'id_tahun_pelajaran' => $request->input('id_tahun_pelajaran'),
      'id_jurusan' => $request->input('id_jurusan'),
      'kelas' => $request->input('kelas'),
    ]);

    return redirect('/kelas');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function editJurusan($id)
  {
    $jurusan = Jurusan::find($id);
    return view('pages.master.create-jurusan', ['jurusan' => $jurusan]);
  }

  public function editSiswa($id)
  {
    $siswa = Siswa::find($id);
    $jurusan = Jurusan::get();
    $kelas = Kelas::get();
    return view('pages.master.create-siswa', ['siswa' => $siswa, 'jurusan' => $jurusan, 'kelas' => $kelas]);
  }

  public function editTahunPelajaran($id)
  {
    $tp = TahunPelajaran::find($id);
    return view('pages.master.create-tahun-pelajaran', ['tahun' => $tp]);
  }

  public function editJenisBayar($id)
  {
    $jb = JenisBayar::find($id);
    $kelas = Kelas::with('jurusan', 'tahun')->get();
    return view('pages.master.create-jenis-bayar', ['kelas' => $kelas, 'jb' => $jb]);
  }

  public function editKelas($id)
  {
    $kelas = Kelas::find($id);
    $tahun = TahunPelajaran::get();
    $jurusan = Jurusan::get();
    return view('pages.master.create-kelas', ['kelas' => $kelas, 'jurusan' => $jurusan, 'tahun' => $tahun]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function updateJurusan(Request $request, Jurusan $jurusan)
  {
    $jurusan::find($request->id)->update([
      'jurusan' => $request->input('jurusan'),
      'kode_jurusan' => $request->input('kode_jurusan')
    ]);
    return redirect('/jurusan');
  }

  public function updateSiswa(Request $request, Siswa $siswa)
  {
    $siswa::find($request->id)->update([
      'id_kelas' => $request->input('id_kelas'),
      'nis' => $request->input('nis'),
      'nama' => $request->input('nama'),
      'no_telp' => $request->input('no_telp')
    ]);
    return redirect('/siswa');
  }

  public function updateTahunPelajaran(Request $request, TahunPelajaran $tp)
  {
    $tp::find($request->id)->update([
      'tahun_pelajaran' => $request->input('tahun_pelajaran')
    ]);
    return redirect('/tahun-pelajaran');
  }

  public function updateJenisBayar(Request $request, JenisBayar $jb)
  {
    $jb::find($request->id)->update([
      'id_kelas' => $request->input('id_kelas'),
      'jumlah' => $request->input('jumlah'),
    ]);
    return redirect('/jenis-bayar');
  }

  public function updateKelas(Request $request, Kelas $kelas)
  {
    $kelas::find($request->id)->update([
      'id_tahun_pelajaran' => $request->input('id_tahun_pelajaran'),
      'id_jurusan' => $request->input('id_jurusan'),
      'kelas' => $request->input('kelas'),
    ]);
    return redirect('/kelas');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyJurusan($id)
  {
    Jurusan::find($id)->delete();
    return redirect('/jurusan');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroySiswa($id)
  {
    Siswa::find($id)->delete();
    return redirect('/siswa');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyTahunPelajaran($id)
  {
    TahunPelajaran::find($id)->delete();
    return redirect('/tahun-pelajaran');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyJenisBayar($id)
  {
    JenisBayar::find($id)->delete();
    return redirect('/jenis-bayar');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyKelas($id)
  {
    Kelas::find($id)->delete();
    return redirect('/kelas');
  }

  /**
   * DATATABLES
   * 
   */
  public function dataJurusan()
  {
    $jurusan = Jurusan::get();
    return DataTables::make($jurusan)->toJson();
  }

  public function dataSiswa()
  {
    $siswa = Siswa::with('kelas.jurusan')->get();
    return DataTables::make($siswa)->toJson();
  }

  public function dataTahunPelajaran()
  {
    $tp = TahunPelajaran::get();
    return DataTables::make($tp)->toJson();
  }

  public function dataJenisBayar()
  {
    $jb = JenisBayar::with('kelas.jurusan', 'kelas.tahun')->get();
    return DataTables::make($jb)->toJson();
  }

  public function dataKelas()
  {
    $jb = Kelas::with('tahun', 'jurusan')->get();
    return DataTables::make($jb)->toJson();
  }
}
