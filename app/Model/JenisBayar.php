<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisBayar extends Model
{
  protected $table = 'jenis_bayar';
  protected $guarded = [];

  function tahun()
  {
    return $this->belongsTo('App\Model\TahunPelajaran', 'id_tahun_pelajaran');
  }

  function kelas()
  {
    return $this->belongsTo('App\Model\Kelas', 'id_kelas');
  }
}
