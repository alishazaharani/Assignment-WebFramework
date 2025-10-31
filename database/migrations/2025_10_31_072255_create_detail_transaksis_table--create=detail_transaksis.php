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
     Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('transaksi_id'); // Relasi ke transaksis
            $table->unsignedBigInteger('product_id'); // Relasi ke products
            $table->integer('quantity')->default(1); // Jumlah produk
            $table->integer('subtotal'); // Harga total untuk produk ini
            $table->timestamps(); // created_at & updated_at

            // Foreign key constraints
            $table->foreign('transaksi_id')->references('id')->on('transaksis')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::table('detail_transaksis', function (Blueprint $table) {
            $table->dropForeign(['transaksi_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('detail_transaksis');
    }
};
