<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->string('id_admin', 20);
            $table->primary('id_admin');
            $table->string('nama_lengkap', 50);
            $table->string('email', 30);
            $table->unique('email');
            $table->string('password', 100);
            $table->string('foto', 20)->nullable();
            $table->tinyInteger('superadmin')->default(0);
            $table->tinyInteger('diblokir')->default(0);
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
        Schema::dropIfExists('tbl_admin');
    }
}
