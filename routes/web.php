<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KodeRuangController;
use App\Http\Controllers\KodeBarangController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama default (bisa diarahkan ke login atau welcome)
Route::get('/', function () {
    return redirect()->route('login');
});

// Auth bawaan Laravel (login, register jika perlu)
Auth::routes();

// Dashboard setelah login
Route::middleware(['auth'])->group(function () {

    // Dashboard Rekap Aset
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Role humas & layanan (akses ke kode ruang & kode barang)
    Route::middleware(['role:humas,layanan'])->group(function () {
        Route::resource('kode-ruang', KodeRuangController::class);
        Route::resource('kode-barang', KodeBarangController::class);
    });

    // Role hanya untuk HUMAS (admin user)
    Route::middleware(['role:humas'])->group(function () {
        Route::resource('users', UserController::class)->except(['show']);
    });

});
