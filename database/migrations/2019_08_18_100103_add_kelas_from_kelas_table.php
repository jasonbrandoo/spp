<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKelasFromKelasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('siswa', function (Blueprint $table) {
      $table->integer('id_kelas')->after('id_jurusan');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('siswa', function (Blueprint $table) {
      $table->dropColumn('id_kelas');
    });
  }
}
