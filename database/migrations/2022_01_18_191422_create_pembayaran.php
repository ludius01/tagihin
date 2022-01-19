<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('inv_pembayaran');
            $table->string('tgl_bayar');
            $table->string('tgl_konfirmasi');
            $table->integer('id_tagihan');
            $table->string('total_tagihan');
            $table->string('bukti_tf');
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
        Schema::dropIfExists('pembayaran');
    }
}
