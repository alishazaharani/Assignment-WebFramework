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
     Schema::create('keranjangs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('pelanggan_id'); // Relasi ke pelanggans
            $table->unsignedBigInteger('product_id'); // Relasi ke products
            $table->integer('quantity')->default(1); // Jumlah produk
            $table->timestamps(); // created_at & updated_at

            // Foreign key constraints
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::table('keranjangs', function (Blueprint $table) {
            $table->dropForeign(['pelanggan_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('keranjangs');
    }
};
