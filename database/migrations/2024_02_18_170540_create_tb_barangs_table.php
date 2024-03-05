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
        Schema::create('tb_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('name_barang')->unique();
            $table->string('slug_name_barang')->unique();
            $table->text('keterangan_barang')->nullable();
            $table->foreignId('id_kategori_barang');
            $table->string('kategori_barang')->nullable();
            $table->string('slug_category_barang')->nullable();
            $table->integer('harga_barang')->nullable();
            $table->integer('berat_barang')->nullable();
            $table->text('gambar_barang')->nullable();
            $table->integer('stok_barang')->nullable();
            $table->string('keterangan_pesanan')->nullable();
            $table->foreignId('id_gilingan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barangs');
    }
};
