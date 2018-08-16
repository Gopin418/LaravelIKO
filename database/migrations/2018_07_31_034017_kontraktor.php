<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kontraktor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontraktor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kontraktor');
            $table->string('pj_kontraktor');
            $table->string('telp_pj_kontraktor');
            $table->string('pj_lapangan');
            $table->string('telp_pj_lapangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontraktor');
    }
}
