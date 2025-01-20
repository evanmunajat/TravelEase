<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\DestinasiControllers;
use App\Http\Controllers\KontakControllers;
use App\Http\Controllers\PaketControllers;
use App\Http\Controllers\TentangControllers;

// Halaman utama (Home) ditampilkan pertama kali
Route::get('/', [HomeControllers::class, 'index'])->name('home');

// Route untuk halaman lain
Route::get('/destinasi', [DestinasiControllers::class, 'index'])->name('destinasi');
Route::get('/paket', [PaketControllers::class, 'index'])->name('paket');
Route::get('/tentang', [TentangControllers::class, 'index'])->name('tentang');
Route::get('/kontak', [KontakControllers::class, 'index'])->name('kontak');

// Route dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route profil (hanya untuk pengguna yang sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
