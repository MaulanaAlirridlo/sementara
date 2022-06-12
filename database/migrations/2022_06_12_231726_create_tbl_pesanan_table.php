<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pesanan', function (Blueprint $table) {
            $table->string('id_pesanan', 20);
            $table->primary('id_pesanan');
            $table->string('nama_penerima', 40);
            $table->text('alamat_tujuan');
            $table->string('no_telepon', 18);
            $table->text('keterangan');
            $table->text('kurir');
            $table->text('layanan');
            $table->string('kurir_cod', 20);
            $table->double('ongkos_kirim');
            $table->double('total_bayar');
            $table->string('no_resi', 30);
            $table->tinyInteger('status_pesanan');
            $table->tinyInteger('dibatalkan');
            $table->dateTime('tanggal_dikirim', $precision = 0);
            $table->dateTime('tanggal_diterima', $precision = 0);
            $table->dateTime('tanggal_pesanan', $precision = 0);
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
        Schema::dropIfExists('tbl_pesanan');
    }
}
