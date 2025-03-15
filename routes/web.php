<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Route Produk
Route::resource('products', ProductController::class)->only(['index', 'show']);

// Route Keranjang
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
});

// Route Checkout (hanya untuk user yang login)
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

    // Route Order History
    Route::resource('orders', OrderController::class)->only(['index', 'show']);
});

// Route Kategori
Route::resource('categories', CategoryController::class);
