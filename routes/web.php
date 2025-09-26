<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home'); // resources/views/home.blade.php
});

// About
Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
});

// Program (pakai group + parameter)
Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('program'); // resources/views/program.blade.php
    });

    // contoh parameter → akses: /program/1
    Route::get('/{id}', function ($id) {
        return "Detail Program Rooliaglow (Soon).: $id";
    });
});

// Our Team
Route::get('/team', function () {
    return view('team'); // resources/views/team.blade.php
});

// Contact Us
Route::get('/contact', function () {
    return view('contact');
});

// Redirect ke Instagram resmi PT Rooliaglow Growth Group
Route::get('/instagram', function () {
    return redirect('https://www.instagram.com/rooliaglow.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==');
});

// Fallback → kalau URL salah
Route::fallback(function () {
    return "Oops! Halaman yang kamu cari tidak ada";
});
