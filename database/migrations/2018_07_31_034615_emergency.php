<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emergency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('id_lok', ['cw', 'cb']);
            $table->enum('lokasi', ['Ciawi', 'Cibitung']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergency');
    }
}
