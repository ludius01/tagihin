<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTagihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tagihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_inv_tagihan');
            $table->string('periode_tahun');
            $table->string('status');
            $table->integer('id_pelanggan');
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
        Schema::dropIfExists('table_tagihan');
    }
}
