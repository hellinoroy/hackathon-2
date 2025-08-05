<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan halaman katalog produk
    public function index()
    {
        $products = Product::with('variants')->get();
        return view('product.index', compact('products'));
    }

    // Menampilkan detail produk
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('variants')->firstOrFail();
        return view('product.show', compact('product'));
    }
}
