<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Adl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aktivitas');
            $table->string('penanggung_jawab');
            $table->string('adb');
            $table->string('jenis_pencemaran');
            $table->string('potensi_pencemaran');
            $table->string('pengendalian');
            $table->string('keterangan')->default('Tidak Ada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adl');
    }
}
