<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data dummy untuk produk, meniru data dari database
        $products = [
            [
                'image' => 'https://via.placeholder.com/150/FFFFFF/000000?text=Produk', // Ganti dengan path gambar Anda
                'name' => 'Ivory Bloom',
                'size' => '30 ML',
                'price' => 'Rp 199.000',
                'sku' => 'EV30-IB-25W',
                'tags' => ['New', 'Best Seller', 'Women\'s']
            ],
            [
                'image' => 'https://via.placeholder.com/150/333333/FFFFFF?text=Produk',
                'name' => 'Oud Legendaire',
                'size' => '30 ML',
                'price' => 'Rp 199.000',
                'sku' => 'EV30-OL-25M',
                'tags' => ['Men\'s']
            ],
            [
                'image' => 'https://via.placeholder.com/150/8B4513/FFFFFF?text=Produk',
                'name' => 'OR DU SOIR',
                'size' => '30 ML',
                'price' => 'Rp 199.000',
                'sku' => 'EV30-ODS-24M',
                'tags' => ['Best Seller', 'Men\'s']
            ],
            [
                'image' => 'https://via.placeholder.com/150/00CED1/FFFFFF?text=Produk',
                'name' => 'Citrine Flame',
                'size' => '30 ML',
                'price' => 'Rp 199.000',
                'sku' => 'EV30-CF-24US',
                'tags' => ['Unisex']
            ],
            [
                'image' => 'https://via.placeholder.com/150/DC143C/FFFFFF?text=Produk',
                'name' => 'Midnight Cherry',
                'size' => '30 ML',
                'price' => 'Rp 199.000',
                'sku' => 'EV30-MC-24W',
                'tags' => ['Women\'s']
            ],
            [
                'image' => 'https://via.placeholder.com/150/FFFFFF/000000?text=Produk',
                'name' => 'Ivory Bloom',
                'size' => '50 ML',
                'price' => 'Rp 299.000',
                'sku' => 'EV50-IB-25W',
                'tags' => ['New', 'Best Seller', 'Women\'s']
            ],
        ];

        return view('admin.dashboard', compact('products'));
    }
}