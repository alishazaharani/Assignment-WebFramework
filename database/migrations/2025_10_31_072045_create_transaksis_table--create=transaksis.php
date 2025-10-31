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
     Schema::create('transaksis', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('pelanggan_id'); // Relasi ke pelanggans
            $table->dateTime('tanggal_transaksi'); // Waktu transaksi
            $table->integer('total_harga'); // Total belanja
            $table->enum('status', ['pending', 'dibayar', 'dibatalkan'])->default('pending'); // Status transaksi
            $table->timestamps(); // created_at & updated_at

            // Foreign key
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
     Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign(['pelanggan_id']);
        });

        Schema::dropIfExists('transaksis');
    }

    
};
