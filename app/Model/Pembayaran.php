<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $table = 'pembayaran';
  protected $guarded = [];

  function siswa()
  {
    return $this->belongsTo('App\Model\Siswa', 'id_siswa');
  }
}
