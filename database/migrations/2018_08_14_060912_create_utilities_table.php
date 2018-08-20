<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilitys', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jenis', ['Air', 'Angin', 'Listrik', 'Steam']);
            $table->string('name');
            $table->string('departement')
            ->references('departement')
            ->on('departements')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('email');
            $table->string('telp');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilitys');
    }
}
