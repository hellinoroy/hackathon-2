<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\QuizController;
// Homepage
Route::get('/', fn () => view('home'))->name('home');

// Static Pages
Route::get('/produk-baru', fn () => 'Produk baru')->name('products.new');
Route::get('/tentang', fn () => 'Tentang Evoste')->name('about');
Route::get('/kontak', fn () => 'Kontak')->name('contact');

// Our Products Page
Route::get('/our-products', fn () => view('our-products'))->name('our.products');


// Products List & Detail
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// Cart
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// Variants
Route::view('/variant/floral', 'variants.floral')->name('variant.floral');
Route::view('/variant/woody', 'variants.woody')->name('variant.woody');
Route::view('/variant/fresh', 'variants.fresh')->name('variant.fresh');
Route::view('/variant/spicy', 'variants.spicy')->name('variant.spicy');

// Admin
Route::get('/admin', fn () => redirect('/admin/dashboard'));
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/find-your-scent', function () {
    return view('find-your-scent');
})->name('find-scent');

Route::post('/quiz', [QuizController::class, 'quizChat']);

// Route::get('/csrf-token', function () {
//     return response()->json(['token' => csrf_token()]);
// });
