<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->string('id_barang', 20);
            $table->primary('id_barang');
            $table->string('nama_barang', 50);
            $table->string('id_kategori', 20);
            $table->string('id_merk', 20);
            $table->text('deskripsi_barang');
            $table->double('berat_barang');
            $table->integer('harga_satuan', 11);
            $table->integer('stok_barang', 11);
            $table->string('foto_barang', 30);
            $table->dateTime('tanggal_masuk');
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
        Schema::dropIfExists('tbl_barang');
    }
}
