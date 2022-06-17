<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetailPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detail_pengguna', function (Blueprint $table) {
            $table->string('id_pengguna', 20);
            $table->primary('id_pengguna');
            $table->string('nama_lengkap', 50);
            $table->string('jenis_kelamin', 15);
            $table->text('alamat_rumah');
            $table->string('no_telepon', 18);
            $table->integer('id_kecamatan', 11);

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
        Schema::dropIfExists('tbl_detail_pengguna');
    }
}
