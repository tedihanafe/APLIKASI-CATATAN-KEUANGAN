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
        $table->bigIncrements('id');
        $table->date('tanggal');
        $table->enum('jenis',['Pemasukan','Pengeluaran']);
        $table->integer('kategori_id');
        $table->integer('nominal');
        $table->text('keterangan');
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
