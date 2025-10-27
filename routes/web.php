<?php

use Illuminate\Support\Facades\Route;

// Halaman Home (Tentang INFINITEC)
Route::get('/', function () {
    return view('home'); 
});

// Halaman Kompetisi (LKTI & Mobile Legends)
Route::get('/kompetisi', function () {
    return view('kompetisi'); // Memanggil kompetisi.blade.php
});

