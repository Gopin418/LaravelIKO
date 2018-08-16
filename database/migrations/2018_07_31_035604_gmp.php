<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area_gmp')->default('Tidak Bekerja Pada Area GMP')->nullable();
            $table->string('brg_yang_disimpan');
            $table->string('lokasi_gudang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gmp');
    }
}
