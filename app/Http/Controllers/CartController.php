<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Menambahkan produk ke keranjang belanja.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id ID Produk dari URL
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request, $id) // Menerima $id dari route
    {
        // 1. Validasi data yang masuk dari form
        $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|string',
        ]);

        // 2. Ambil data keranjang yang sudah ada dari session, atau buat array kosong jika belum ada
        $cart = session()->get('cart', []);

        // 3. Buat ID unik untuk item di keranjang (kombinasi ID produk dan ukuran)
        // Ini agar "Ivory Bloom 35ML" dan "Ivory Bloom 50ML" dianggap sebagai item yang berbeda.
        $cartItemId = $id . '-' . str_replace(' ', '', $request->size); // Menggunakan $id dari URL

        // 4. Cek apakah item dengan ID dan ukuran yang sama sudah ada di keranjang
        if (isset($cart[$cartItemId])) {
            // Jika sudah ada, tambahkan jumlahnya (quantity)
            $cart[$cartItemId]['quantity']++;
        } else {
            // Jika belum ada, tambahkan sebagai item baru
            $cart[$cartItemId] = [
                "product_id" => $id, // Simpan juga ID produk asli
                "name" => $request->product_name,
                "quantity" => 1,
                "price" => $request->price,
                "size" => $request->size,
                // Anda bisa menambahkan data lain seperti gambar jika perlu
                // "image" => $request->image_url 
            ];
        }

        // 5. Simpan kembali data keranjang yang sudah diperbarui ke dalam session
        session()->put('cart', $cart);

        // 6. Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    // Anda bisa menambahkan method lain di sini nanti, misalnya untuk menampilkan isi keranjang,
    // menghapus item, atau memperbarui jumlah.
}
