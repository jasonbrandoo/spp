<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table = 'siswa';
  protected $guarded = [];

  function jurusan()
  {
    return $this->belongsTo('App\Model\Jurusan', 'id_jurusan');
  }

  function kelas()
  {
    return $this->belongsTo('App\Model\Kelas', 'id_kelas');
  }
}
