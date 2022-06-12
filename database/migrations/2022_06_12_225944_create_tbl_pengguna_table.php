<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengguna', function (Blueprint $table) {
            $table->string('id_pengguna', 20);
            $table->string('email', 30);
            $table->unique('email');
            $table->string('password', 100);
            $table->dateTime('tanggal_bergabung', $precision = 0);
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
        Schema::dropIfExists('tbl_pengguna');
    }
}
