<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;

// halaman awal langsung diarahkan ke daftar obat
Route::get('/', function () {
    return redirect()->route('obat.index');
});

// Auth: login & logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// CRUD obat: hanya bisa diakses kalau sudah login
Route::middleware('auth')->group(function () {
    // resource otomatis membuat route index, create, store, edit, update, destroy
    Route::resource('obat', ObatController::class)->except('show');
});
