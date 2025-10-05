<?php

use Illuminate\Support\Facades\Route;

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

// Fallback → kalau URL salah
Route::fallback(function () {
    return "Oops! Halaman yang kamu cari tidak ada";
});
