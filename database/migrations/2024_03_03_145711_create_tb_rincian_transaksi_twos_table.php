<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_rincian_transaksi_twos', function (Blueprint $table) {
            $table->id();
            $table->string('no_order')->nullable();
            $table->foreignId('id_pembeli');
            $table->foreignId('tb_barang_id');
            $table->text('gambar_barang')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('stok_barang')->nullable();
            $table->integer('harga_barang')->nullable();
            $table->integer('berat_barang')->nullable();
            $table->integer('qty')->nullable();
            $table->bigInteger('sub_total')->nullable();
            $table->string('kategori_barang')->nullable();
            $table->string('keterangan_pesanan')->nullable();
            $table->string('ukuran_gilingan_kopi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rincian_transaksi_twos');
    }
};
