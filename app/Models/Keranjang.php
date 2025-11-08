<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keranjang extends Model
{
use SoftDeletes;

    protected $fillable = ['pelanggan_id', 'product_id', 'quantity'];
    protected $dates = ['deleted_at'];

    // Relasi ke pelanggan
    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    // Relasi ke produk
    public function product() {
        return $this->belongsTo(Product::class);
    }


}
