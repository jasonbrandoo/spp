<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisBayarTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('jenis_bayar', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_tahun_pelajaran');
      $table->string('tingkat');
      $table->integer('jumlah');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('jenis_bayar');
  }
}
