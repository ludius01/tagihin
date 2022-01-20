<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('no_inv_tagihan');
            $table->integer('id_pelanggan');
            $table->integer('id_alat');
            $table->integer('id_paket');
            $table->string('periode_tahun');
            $table->string('tgl_tagihan');
            $table->string('jumlah_bayar');
            $table->string('kode_unik');
            $table->string('status');
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
        Schema::dropIfExists('tagihan');
    }
}
