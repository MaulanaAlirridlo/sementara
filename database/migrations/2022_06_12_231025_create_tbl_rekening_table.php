<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRekeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rekening', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bank');
            $table->string('atas_nama', 50);
            $table->string('nomer_rekening', 20);
            $table->integer('is_active');
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
        Schema::dropIfExists('tbl_rekening');
    }
}
