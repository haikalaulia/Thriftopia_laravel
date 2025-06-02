<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SubkategoriController;
use App\Http\Controllers\KategoriController;


Route::post('/keranjang/checkout', [KeranjangController::class, 'checkout'])->name('keranjang.checkout');
Route::get('/produk', [ProdukController::class, 'index'])->middleware('web');


// Route utama
Route::get('/', [DashboardController::class, 'index'])->name('home'); 
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.detail');
Route::get('/search', [ProdukController::class, 'search'])->name('produk.search');

// Route keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
Route::get('/keranjang/hapus/{index}', [KeranjangController::class, 'hapus'])->name('keranjang.hapus');

// Route kategori
Route::get('/subkategori/{subkategori}', [SubkategoriController::class, 'show'])->name('subkategori.show');
Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');

// Route dashboard (dengan middleware)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route profile (dengan middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';