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
        Schema::create('tb_ukuran_gilingan_kopis', function (Blueprint $table) {
            $table->id();
            $table->string('name_ukuran_gilingan')->unique();
            $table->string('slug_name_ukuran_gilingan')->unique();
            $table->foreignId('id_ukuran_gilingan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ukuran_gilingan_kopis');
    }
};
