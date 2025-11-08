<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
 use SoftDeletes;

    protected $fillable = ['pelanggan_id', 'tanggal_transaksi', 'total_harga'];
    protected $dates = ['deleted_at'];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function detailTransaksis() {
        return $this->hasMany(DetailTransaksi::class);
    }
}
