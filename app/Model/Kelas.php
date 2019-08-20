<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  protected $table = 'kelas';
  protected $guarded = [];

  function tahun()
  {
    return $this->belongsTo('App\Model\TahunPelajaran', 'id_tahun_pelajaran');
  }

  function jurusan()
  {
    return $this->belongsTo('App\Model\Jurusan', 'id_jurusan');
  }

  function nominal()
  {
    return $this->hasOne('App\Model\JenisBayar', 'id_kelas');
  }
}
