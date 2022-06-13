<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoice', function (Blueprint $table) {
            $table->string('id_invoice', 20);
            $table->primary('id_invoice');
            $table->foreignId('id_pesanan');
            $table->foreignId('id_pengguna');
            $table->dateTime('tanggal_dibuat', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_invoice');
    }
}
