<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController; // Pastikan ini di dalam <?php

Route::get('/', function () {
    return view('welcome');
});

// Pastikan rute ini juga di dalam <?php
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/{kode}', [BukuController::class, 'show']);