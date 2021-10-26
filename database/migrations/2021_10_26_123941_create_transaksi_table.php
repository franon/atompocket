<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode',100);
            $table->string('deskripsi',100);
            $table->date('tanggal');
            $table->bigInteger('nilai');
            $table->unsignedBigInteger('dompet_id');
            $table->unsignedBigInteger('kategori_id');
            $table->char('status_id',2);
            $table->foreign('dompet_id')->references('id')->on('dompet');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('status_id')->references('id')->on('transaksi_status');
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
        Schema::dropIfExists('transaksi');
    }
}
