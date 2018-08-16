<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganRuangTerbatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_ruang_terbatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keterangan_1')->default('Tidak ada Keterangan');
            $table->string('keterangan_2')->default('Tidak ada Keterangan');
            $table->string('keterangan_3')->default('Tidak ada Keterangan');
            $table->string('keterangan_4')->default('Tidak ada Keterangan');
            $table->string('keterangan_5')->default('Tidak ada Keterangan');
            $table->string('keterangan_6')->default('Tidak ada Keterangan');
            $table->string('keterangan_7')->default('Tidak ada Keterangan');
            $table->string('keterangan_8')->default('Tidak ada Keterangan');
            $table->string('keterangan_9')->default('Tidak ada Keterangan');
            $table->string('keterangan_10')->default('Tidak ada Keterangan');
            $table->string('keterangan_11')->default('Tidak ada Keterangan');
            $table->string('keterangan_12')->default('Tidak ada Keterangan');
            $table->string('keterangan_13')->default('Tidak ada Keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keterangan_ruang_terbatas');
    }
}
