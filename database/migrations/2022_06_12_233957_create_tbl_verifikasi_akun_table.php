<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVerifikasiAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_verifikasi_akun', function (Blueprint $table) {
            $table->id();
            $table->string('email', 30);
            $table->string('token', 100);
            $table->dateTime('expire_date', $precision = 0);
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
        Schema::dropIfExists('tbl_verifikasi_akun');
    }
}
