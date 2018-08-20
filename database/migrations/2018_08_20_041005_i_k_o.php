<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IKO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IKOs', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('id_pengantar')->unsigned();
          $table->integer('id_kontraktor')->unsigned();
          $table->integer('id_pj_project')->unsigned();
          $table->integer('id_lokasi')->unsigned();
          $table->integer('id_deskripsi')->unsigned();
          $table->integer('id_gmp')->unsigned();
          $table->integer('id_catatan')->unsigned();
          $table->integer('id_status')->unsigned();

          $table->foreign('id_pengantar', 'foreign_pengantar')
          ->references('id')
          ->on('pengantar')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_kontraktor', 'foreign_kontraktor')
          ->references('id')
          ->on('kontraktor')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_pj_project', 'foreign_pj_project')
          ->references('id')
          ->on('nutrifood')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_lokasi', 'foreign_lokasi')
          ->references('id')
          ->on('emergency')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_deskripsi', 'foreign_deskripsi')
          ->references('id')
          ->on('desc_project')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_gmp', 'foreign_gmp')
          ->references('id')
          ->on('gmp')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_catatan', 'foreign_catatan')
          ->references('id')
          ->on('catatan')
          ->onUpdate('cascade')
          ->onDelete('cascade');

          $table->foreign('id_status', 'foreign_status')
          ->references('id')
          ->on('iko_status')
          ->onUpdate('cascade')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
