<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->integer('kode_pemesanan');
            $table->date('tanggal_pemesanan');
            $table->string('tempat_pemesanan');
            $table->integer('id_penumpang');
            $table->string('kode_kursi');
            $table->integer('id_rute');
            $table->string('tujuan');
            $table->date('tanggal_berangkat');
            $table->time('jam_cekin');
            $table->time('jam_berangkat');
            $table->double('total_bayar');
            $table->integer('id_petugas');
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
        Schema::dropIfExists('pemesanan');
    }
};
