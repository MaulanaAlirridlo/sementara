<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKurirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kurir', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 200);
            $table->string('rajaongkir', 200);
            $table->string('namalengkap', 200);
            $table->text('keterangan');
            $table->text('halaman');
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
        Schema::dropIfExists('tbl_kurir');
    }
}
