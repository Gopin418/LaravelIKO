<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangTerbatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_terbatas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('pemenuhan_1', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_2', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_3', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_4', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_5', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_6', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_7', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_8', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_9', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_10', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_11', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_12', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_13', ['Ya', 'Tidak'])->default('Tidak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang_terbatas');
    }
}
