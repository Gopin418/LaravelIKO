<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengantar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengantar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pekerjaan');
            $table->enum('jenis', ['Project', 'Maintenance']);
            $table->date('tanggal_mulai');
            $table->string('tgl_mulai');
            $table->date('tanggal_selesai');
            $table->string('tgl_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengantar');
    }
}
