<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pelanggan extends Model
{
 use SoftDeletes;

    protected $fillable = ['nama', 'email', 'telepon','alamat'];
    protected $dates = ['deleted_at'];

        // Relasi ke keranjangs
    public function keranjangs() {
        return $this->hasMany(Keranjang::class);
    }

}
