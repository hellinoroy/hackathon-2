<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', fn () => view('home'))->name('home');
Route::get('/produk-baru', fn () => 'Produk baru')->name('products.new');
Route::get('/tentang', fn () => 'Tentang Evoste')->name('about');
Route::get('/kontak', fn () => 'Kontak')->name('contact');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

