<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;                      // <-- 1. Impor class Request
use Illuminate\Pagination\LengthAwarePaginator;  // <-- 2. Impor class Paginator
use Illuminate\Support\Collection;               // <-- 3. Impor class Collection

class DashboardController extends Controller
{
    // 4. Tambahkan Request $request agar kita bisa tahu pengguna sedang di halaman berapa
    public function index(Request $request)
    {
        // 5. Kita perbanyak datanya agar paginasi terlihat.
        // Saya gunakan data awal Anda dan menambahkan beberapa lagi.
        $allProducts = [
            ['image' => 'https://via.placeholder.com/150/FFFFFF/000000?text=Produk', 'name' => 'Ivory Bloom', 'size' => '30 ML', 'price' => 'Rp 199.000', 'sku' => 'EV30-IB-25W', 'tags' => ['New', 'Best Seller', 'Women\'s']],
            ['image' => 'https://via.placeholder.com/150/333333/FFFFFF?text=Produk', 'name' => 'Oud Legendaire', 'size' => '30 ML', 'price' => 'Rp 199.000', 'sku' => 'EV30-OL-25M', 'tags' => ['Men\'s']],
            ['image' => 'https://via.placeholder.com/150/8B4513/FFFFFF?text=Produk', 'name' => 'OR DU SOIR', 'size' => '30 ML', 'price' => 'Rp 199.000', 'sku' => 'EV30-ODS-24M', 'tags' => ['Best Seller', 'Men\'s']],
            ['image' => 'https://via.placeholder.com/150/00CED1/FFFFFF?text=Produk', 'name' => 'Citrine Flame', 'size' => '30 ML', 'price' => 'Rp 199.000', 'sku' => 'EV30-CF-24US', 'tags' => ['Unisex']],
            ['image' => 'https://via.placeholder.com/150/DC143C/FFFFFF?text=Produk', 'name' => 'Midnight Cherry', 'size' => '30 ML', 'price' => 'Rp 199.000', 'sku' => 'EV30-MC-24W', 'tags' => ['Women\'s']],
            ['image' => 'https://via.placeholder.com/150/FFFFFF/000000?text=Produk', 'name' => 'Ivory Bloom', 'size' => '50 ML', 'price' => 'Rp 299.000', 'sku' => 'EV50-IB-25W', 'tags' => ['New', 'Best Seller', 'Women\'s']],
            // Data tambahan untuk halaman 2
            ['image' => 'https://via.placeholder.com/150/4682B4/FFFFFF?text=Produk+7', 'name' => 'Azure Coast', 'size' => '50 ML', 'price' => 'Rp 349.000', 'sku' => 'EV50-AC-25M', 'tags' => ['Men\'s', 'New']],
            ['image' => 'https://via.placeholder.com/150/D2B48C/000000?text=Produk+8', 'name' => 'Golden Dune', 'size' => '30 ML', 'price' => 'Rp 210.000', 'sku' => 'EV30-GD-25U', 'tags' => ['Unisex']],
            ['image' => 'https://via.placeholder.com/150/FFC0CB/000000?text=Produk+9', 'name' => 'Rose Petale', 'size' => '100 ML', 'price' => 'Rp 599.000', 'sku' => 'EV100-RP-24W', 'tags' => ['Women\'s']],
        ];

        // --- 6. Ini adalah bagian inti "Perubahan Struktur" ---
        $perPage = 6; // Tentukan berapa produk per halaman
        $collection = new Collection($allProducts); // Ubah array menjadi "koleksi" Laravel
        $currentPage = LengthAwarePaginator::resolveCurrentPage(); // Deteksi halaman saat ini dari URL
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all(); // Ambil data HANYA untuk halaman ini

        // Buat "Objek Paginator Pintar"
        $products = new LengthAwarePaginator($currentPageItems, count($collection), $perPage);
        
        // Atur path URL agar link paginasi benar
        $products->setPath($request->url());
        // --- Akhir dari Perubahan Struktur ---

        // 7. Kirim variabel $products yang SEKARANG BERISI OBJEK PAGINATOR ke view
        return view('admin.dashboard', compact('products'));
    }
}