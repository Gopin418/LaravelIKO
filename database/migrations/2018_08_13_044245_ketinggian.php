
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ketinggian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketinggians', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('pemenuhan_1', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_2', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_3', ['Ya', 'Tidak'])->default('Tidak');
            $table->enum('pemenuhan_4', ['Ya', 'Tidak'])->default('Tidak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketinggians');
    }
}
