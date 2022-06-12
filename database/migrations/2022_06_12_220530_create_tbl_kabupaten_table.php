<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kabupaten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('tipe', 300);
            $table->text('nama');
            $table->integer('rajaongkir');
            $table->integer('kodepos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kabupaten');
    }
}
