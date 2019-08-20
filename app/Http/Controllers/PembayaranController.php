<?php

namespace App\Http\Controllers;

use App\Model\JenisBayar;
use App\Model\Kelas;
use App\Model\Pembayaran;
use App\Model\Siswa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PembayaranController extends Controller
{
  public function indexPembayaran()
  {
    $siswa = Siswa::get();
    return view('pages.pembayaran.nis', ['siswa' => $siswa]);
  }

  public function showPembayaran($id)
  {
    $siswa = Siswa::with('kelas.jurusan', 'kelas.nominal')->find($id);
    $pembayaran = Pembayaran::where('id_siswa', $id)->has('siswa')->first();
    $jenis = JenisBayar::get();
    // return $siswa;
    return view('pages.pembayaran.input', ['siswa' => $siswa, 'pembayaran' => $pembayaran === NULL ? NULL : $pembayaran, 'jenis' => $jenis]);
  }

  public function storePembayaran(Request $request)
  {
    $siswa = Siswa::find($request->id);
    return redirect()->action('PembayaranController@showPembayaran', ['id' => $siswa->id]);
  }



  public function updatePembayaran(Request $request)
  {
    Pembayaran::updateOrCreate(
      ['id_siswa' => $request->input('id_siswa')],
      [
        'id_siswa' => $request->input('id_siswa'),
        $request->input('bulan') => 'lunas',
        'nominal' => $request->input('nominal')
      ]
    );
    $siswa = Siswa::with('kelas.jurusan', 'kelas.nominal')->find($request->input('id_siswa'));
    $basic = new \Nexmo\Client\Credentials\Basic('1b1acd1e', '4TjXiNAljYN3mRKP');
    $client = new \Nexmo\Client($basic);
    try {
      $message = $client->message()->send([
        'to' => +6281288229019,
        'from' => 'Acme Inc',
        'text' => 'A text message sent using the Nexmo SMS API'
      ]);
      $response = $message->getResponseData();
      if ($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
      } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
      }
    } catch (Exception $e) {
      echo "The message was not sent. Error: " . $e->getMessage() . "\n";
    }
    return view('pages.pembayaran.print', ['siswa' => $siswa]);
  }

  public function rekapPembayaran()
  {
    return view('pages.laporan.rekap-pembayaran');
  }

  public function cetakTagihan()
  {
    return view('pages.laporan.cetak-tagihan');
  }

  public function storeTagihan(Request $request)
  {
    $months = [
      'januari',
      'februari',
      'maret',
      'april',
      'mei',
      'juni',
      'juli',
      'agustus',
      'september',
      'oktober',
      'november',
      'desember'
    ];

    $bulan = $request->input('bulan');
    return redirect()->action('PembayaranController@showTagihan', ['bulan' => $bulan]);
  }

  public function showTagihan($bulan)
  {
    $request = Pembayaran::with('siswa.kelas.jurusan', 'siswa.kelas.nominal')->whereNull($bulan)->get();
    return view('pages.laporan.show-tagihan', ['data' => $request, 'bulan' => $bulan]);
  }

  function dataRekapTagihan()
  {
    $pembayaran = Pembayaran::with('siswa')->get();
    return DataTables::make($pembayaran)->toJson();
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
