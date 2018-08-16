<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pekerjaan_berbahaya');
            $table->string('doc_lampiran');
            $table->string('utility');
            $table->string('sistem_terganggu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catatan');
    }
}
