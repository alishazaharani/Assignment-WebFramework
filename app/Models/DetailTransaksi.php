<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailTransaksi extends Model
{
 use SoftDeletes;

    protected $fillable = ['transaksi_id', 'product_id', 'quantity', 'subtotal'];
    protected $dates = ['deleted_at'];

    public function transaksi() {
        return $this->belongsTo(Transaksi::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
