<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jsa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jsa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aktivitas');
            $table->string('potensi_bahaya');
            $table->string('pengendalian_bahaya');
            $table->string('penanggung_jawab');
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
        Schema::dropIfExists('jsa');
    }
}
