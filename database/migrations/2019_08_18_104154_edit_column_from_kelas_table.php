<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditColumnFromKelasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('kelas', function (Blueprint $table) {
      $table->dropColumn('nis');
      $table->integer('id_jurusan')->after('id_tahun_pelajaran');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('kelas', function (Blueprint $table) {
      $table->dropColumn('id_jurusan');
    });
  }
}
