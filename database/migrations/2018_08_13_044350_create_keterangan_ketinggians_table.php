<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganKetinggiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_ketinggians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keterangan_1')->default('Tidak ada Keterangan');
            $table->string('keterangan_2')->default('Tidak ada Keterangan');
            $table->string('keterangan_3')->default('Tidak ada Keterangan');
            $table->string('keterangan_4')->default('Tidak ada Keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keterangan_ketinggians');
    }
}
