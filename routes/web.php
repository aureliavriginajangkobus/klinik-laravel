<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;

// halaman awal diarahkan ke daftar obat (kalau belum login, otomatis ke halaman login)
Route::get('/', function () {
    return redirect()->route('obat.index');
});

// Auth: login & logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Semua halaman modul: wajib login (guest diarahkan ke halaman login)
Route::middleware('auth')->group(function () {

    // Admin dan Petugas: lihat, tambah, ubah
    Route::middleware('role:admin,petugas')->group(function () {
        Route::resource('obat', ObatController::class)->except(['show', 'destroy']);
    });

    // Hanya Admin: hapus
    Route::delete('/obat/{obat}', [ObatController::class, 'destroy'])
        ->name('obat.destroy')
        ->middleware('role:admin');
});
