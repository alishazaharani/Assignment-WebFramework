<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;


// Home
Route::get('/home', function () {
    return view('assignment/home'); // resources/views/home.blade.php
});

// About
Route::get('/about', function () {
    return view('assignment/about'); // resources/views/about.blade.php
});

// Program
Route::get('/program', function () {
        return view('assignment/program'); // resources/views/program.blade.php
    });

// Our Team
Route::get('/team', function () {
    return view('assignment/team'); // resources/views/team.blade.php
});

// Contact Us
Route::get('/contact', function () {
    return view('assignment/contact');
});

// Fallback
Route::fallback(function () {
    return "Oops! Halaman yang kamu cari tidak ada";
});

//product
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::get('/products/restore/{id}', [ProductController::class, 'restore']);

//pelanggan
Route::get('/pelanggans', [PelangganController::class, 'index']);
Route::post('/pelanggans', [PelangganController::class, 'store']);
Route::delete('/pelanggans/{id}', [PelangganController::class, 'destroy']);
Route::get('/pelanggans/restore/{id}', [PelangganController::class, 'restore']);

//keranjang
Route::get('/keranjangs', [KeranjangController::class, 'index']);
Route::post('/keranjangs', [KeranjangController::class, 'store']);
Route::delete('/keranjangs/{id}', [KeranjangController::class, 'destroy']);
Route::get('/keranjangs/restore/{id}', [KeranjangController::class, 'restore']);

//transaksi
Route::get('/transaksis', [TransaksiController::class, 'index']);
Route::post('/transaksis', [TransaksiController::class, 'store']);
Route::delete('/transaksis/{id}', [TransaksiController::class, 'destroy']);
Route::get('/transaksis/restore/{id}', [TransaksiController::class, 'restore']);

//detailtransaksi
Route::get('/detail-transaksis', [DetailTransaksiController::class, 'index']);
Route::post('/detail-transaksis', [DetailTransaksiController::class, 'store']);
Route::delete('/detail-transaksis/{id}', [DetailTransaksiController::class, 'destroy']);
Route::get('/detail-transaksis/restore/{id}', [DetailTransaksiController::class, 'restore']);
