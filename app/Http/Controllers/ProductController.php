<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Halaman katalog produk
    public function index()
    {
        $products = Product::all(); // atau ->paginate(9)
        return view('product.index', compact('products'));
    }

    // Halaman detail produk
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->firstOrFail();
        return view('product.show', compact('product'));
    }
}
