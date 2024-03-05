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
        Schema::create('tb_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pembeli');
            $table->string('no_order')->unique();
            $table->string('tanggal_order')->nullable();
            $table->string('tipe_alamat')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('no_handphone_penerima')->nullable();
            $table->string('alamat_lengkap_penerima')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->integer('total_bayar')->nullable();
            $table->integer('total_berat');
            $table->enum('status_bayar', ['Unpaid', 'Paid'])->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('bank_pembayaran')->nullable();
            $table->text('bukti_bayar')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->integer('status_order')->nullable();
            $table->text('bukti_diterima')->nullable();
            $table->string('penilaian_barang')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('courier')->nullable();
            $table->integer('total_ongkir')->nullable();
            $table->string('etd')->nullable();
            $table->string('service')->nullable();
            $table->string('description')->nullable();
            $table->integer('total_bayar_keseluruhan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksis');
    }
};
