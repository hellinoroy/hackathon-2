<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Simpan ke session sebagai contoh sederhana
        $cart = session()->get('cart', []);

        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => 1,
            "size" => $request->input('size', '35ml'),
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }
}

