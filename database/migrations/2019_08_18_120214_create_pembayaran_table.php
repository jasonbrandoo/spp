<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pembayaran', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_siswa');
      $table->string('nominal')->nullable();
      $table->string('januari')->nullable();
      $table->string('februari')->nullable();
      $table->string('maret')->nullable();
      $table->string('april')->nullable();
      $table->string('mei')->nullable();
      $table->string('juni')->nullable();
      $table->string('juli')->nullable();
      $table->string('agustus')->nullable();
      $table->string('september')->nullable();
      $table->string('oktober')->nullable();
      $table->string('november')->nullable();
      $table->string('desember')->nullable();
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
    Schema::dropIfExists('pembayaran');
  }
}
