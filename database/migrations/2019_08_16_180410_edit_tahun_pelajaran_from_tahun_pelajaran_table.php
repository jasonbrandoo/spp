<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTahunPelajaranFromTahunPelajaranTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('tahun_pelajaran', function (Blueprint $table) {
      $table->string('tahun_pelajaran')->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('tahun_pelajaran', function (Blueprint $table) {
      //
    });
  }
}
