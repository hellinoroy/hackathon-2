@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative w-full h-[90vh] bg-cover bg-center" style="background-image: url('/images/hero1.png');">
        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        {{-- Hero Text --}}
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white z-10 px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-2">Crafted for Moments That Never Fade</h1>
            <p class="text-lg md:text-xl mb-6">Be Timeless with Evoste</p>

            <a href="{{ url('/products') }}"
               class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-full transition shadow">
                SEE MORE...
            </a>
        </div>
    </section>

    {{-- Keunggulan Utama --}}
    <section class="py-16 bg-white px-4">
        <h2 class="text-center text-2xl font-bold mb-10">Keunggulan Utama Produk Kami</h2>
        <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="border rounded-xl p-4 hover:shadow transition">
                <img src="/images/aroma.png" alt="Aroma Unik" class="w-12 h-12 mx-auto mb-3">
                <p class="font-medium">Komposisi Aroma yang Unik & Berkualitas</p>
            </div>
            <div class="border rounded-xl p-4 hover:shadow transition">
                <img src="/images/emotion.png" alt="Karakter Emosional" class="w-12 h-12 mx-auto mb-3">
                <p class="font-medium">Parfum dengan Karakter Emosional</p>
            </div>
            <div class="border rounded-xl p-4 hover:shadow transition">
                <img src="/images/indonesia.png" alt="Brand Lokal" class="w-12 h-12 mx-auto mb-3">
                <p class="font-medium">Buatan Brand Lokal</p>
            </div>
            <div class="border rounded-xl p-4 hover:shadow transition">
                <img src="/images/time.png" alt="Tahan Lama" class="w-12 h-12 mx-auto mb-3">
                <p class="font-medium">Tahan Lama, Menemani Setiap Momen</p>
            </div>
        </div>
    </section>

    {{-- Koleksi Wajib Punya --}}
    <section class="py-16 bg-gray-50 px-4">
        <h2 class="text-center text-2xl font-bold mb-10">Koleksi Wajib Punya</h2>
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Produk 1 --}}
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
                <img src="/images/products/ivory-bloom.jpg" alt="Ivory Bloom" class="rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-1">Ivory Bloom</h3>
                <p class="mb-2">Rp 199.000</p>
                <div class="flex space-x-2 mb-3">
                    <button class="border px-3 py-1 text-sm rounded">35 ML</button>
                    <button class="border px-3 py-1 text-sm rounded">50 ML</button>
                </div>
                <div class="flex space-x-2 mb-4">
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">New</span>
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                </div>
                <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">
                    Tambahkan Ke Keranjang
                </button>
            </div>

            {{-- Produk 2 --}}
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
                <img src="/images/products/or-du-soir.jpg" alt="OR DU SOIR" class="rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-1">OR DU SOIR</h3>
                <p class="mb-2">Rp 199.000</p>
                <div class="flex space-x-2 mb-3">
                    <button class="border px-3 py-1 text-sm rounded">35 ML</button>
                    <button class="border px-3 py-1 text-sm rounded">50 ML</button>
                </div>
                <div class="flex space-x-2 mb-4">
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                </div>
                <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">
                    Tambahkan Ke Keranjang
                </button>
            </div>
        </div>

        {{-- Tombol Lihat Lebih Banyak --}}
        <div class="text-center mt-10">
            <button class="border border-black text-sm px-6 py-2 rounded hover:bg-black hover:text-white transition">
                Lihat lebih banyak lagi
            </button>
        </div>
        {{-- About Us --}}
<section class="py-16 bg-white px-4">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-center">
        {{-- Teks --}}
        <div>
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p class="mb-3">Setiap botol EVOSTE menghidupkan momen dari hangatnya pagi hingga sunyinya harimu. Untukmu yang percaya wewangian adalah identitas, kehadiran, dan kenangan yang melekat. Dengan EVOSTE, kita bukan hanya wangi, tapi dikenang.</p>

            <p class="mb-3"><strong>Kenapa Memilih Kami?</strong></p>
            <ul class="list-disc list-inside mb-4 space-y-2">
                <li><strong>Fast-Moving Luxury:</strong> Tren terkini dalam kemasan elegan, didistribusi luas dengan harga yang menjangkau.</li>
                <li><strong>Flexible Margin:</strong> Menguntungkan dalam bentuk premium dan tester (10ml) untuk reseller.</li>
                <li><strong>Full Support:</strong> Dukungan lengkap dari marketing kit hingga pelatihan penjualan.</li>
                <li><strong>Different by Scent:</strong> Setiap Botol - Aroma yang bukan cuma wangi, tapi penuh cerita dan emosi.</li>
            </ul>

            <p class="mb-3">Temukan aroma yang bercerita tentangmu. Mulailah perjalanan memudar dengan EVOSTE sekarang karena setiap momenmu berharga.</p>

            <p class="italic text-sm text-gray-500 mb-6">#EVOSTE #CeritaDalamAroma</p>

            <a href="{{ url('/about') }}"
               class="inline-block bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">
                Lihat lebih banyak lagi
            </a>
        </div>

        {{-- Gambar --}}
        <div>
            <img src="/images/about-us.jpg" alt="About Us" class="rounded-lg shadow-md">
        </div>
    </div>
</section>

{{-- Contact Us --}}
<section class="py-16 bg-neutral-900 text-white px-4 text-center">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
        <p class="mb-6">Join our fast-growing Reseller network.<br>DM us or contact us</p>

        <div class="flex justify-center space-x-8 mb-6">
            {{-- Instagram --}}
            <div class="flex items-center space-x-2">
                <img src="/images/instagram.png" alt="Instagram" class="w-6 h-6">
                <span>@evosteofficial</span>
            </div>

            {{-- WhatsApp --}}
            <div class="flex items-center space-x-2">
                <img src="/images/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                <span>(+62) 877-7774-5791</span>
            </div>
        </div>

        <a href="{{ url('/contact') }}"
           class="inline-block bg-white text-black px-6 py-2 rounded hover:bg-gray-300 transition">
            Lihat lebih banyak lagi
        </a>
    </div>
    </section>
@endsection
