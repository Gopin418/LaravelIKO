<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IPB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipbs', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('ruang_terbatas', ['true', 'false'])->default('false');
            $table->enum('kebakaran', ['true', 'false'])->default('false');
            $table->enum('ketinggian', ['true', 'false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipbs');
    }
}
