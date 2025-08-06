<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model Product tidak lagi kita gunakan untuk sementara, tapi biarkan saja
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Menampilkan halaman katalog produk.
     * Diubah untuk sementara agar tidak error jika database kosong.
     */
    public function index()
    {
        // Kembalikan koleksi kosong agar halaman index tidak error.
        $products = collect();
        return view('product.index', compact('products'));
    }

    /**
     * Menampilkan detail produk dengan data DUMMY.
     * Fungsi ini sekarang mengabaikan database dan membuat data palsu.
     *
     * @param string $slug Slug dari URL (diabaikan untuk sementara)
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // 1. Baris kode asli yang memanggil database dinonaktifkan sementara.
        // $product = Product::where('slug', $slug)->with('variants')->firstOrFail();

        // 2. Buat data dummy untuk varian produk.
        //    Gunakan collect() agar perilakunya mirip dengan data dari Eloquent.
        $dummyVariants = collect([
            (object)[
                'id' => 1,
                'size' => '5 ML',
                // Pastikan Anda punya gambar ini di public/storage/dummy/tester.png
                'image_path' => 'dummy/tester.png'
            ],
            (object)[
                'id' => 2,
                'size' => '30 ML',
                'image_path' => 'dummy/30ml.png'
            ],
            (object)[
                'id' => 3,
                'size' => '50 ML',
                'image_path' => 'dummy/50ml.png'
            ],
        ]);

        // 3. Buat data dummy untuk review.
        $dummyReviews = collect([
            (object)[
                'customer_name' => 'Laurent',
                'created_at' => now()->subDays(10),
                'comment' => 'Wangi yang sangat elegan dan tahan lama. Setiap semprotannya memberikan kesan mewah dan segar.'
            ],
            (object)[
                'customer_name' => 'Luna',
                'created_at' => now()->subDays(5),
                'comment' => 'Awalnya ragu, tapi ternyata wanginya unik dan tidak pasaran. Dapat banyak pujian dari teman-teman!'
            ]
        ]);
        
        // 4. Buat objek produk utama yang palsu (dummy)
        //    Pastikan semua properti yang dipanggil di show.blade.php ada di sini.
        $product = (object) [
            'name' => 'Ivory Bloom (Dummy)',
            'slug' => 'ivory-bloom-dummy',
            'category' => 'EAU DE PARFUM',
            'description' => 'Ini adalah deskripsi dummy untuk parfum dengan karakter segar, manis, dan eksotis yang memadukan lychee, rhubarb, dan saffron. Kenangan pagimu yang paling surya, kini dalam botol dummy.',
            'top_notes' => 'Lychee, Rhubarb, Saffron, Bergamot',
            'middle_notes' => 'Turkish Rose, Jasmine',
            'base_notes' => 'Soft Musk',
            'variants' => $dummyVariants, // Gabungkan data varian ke sini
            'reviews' => $dummyReviews,   // Gabungkan data review ke sini
        ];

        // 5. Kirim objek dummy $product ke view. Baris ini tidak berubah.
        return view('product.show', compact('product'));
    }
}
