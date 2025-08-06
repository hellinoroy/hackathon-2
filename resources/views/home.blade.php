@extends('layouts.app')

@section('content')
    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="bg-green-500 text-white text-center p-3 rounded-lg fixed top-5 right-5 z-50 shadow-lg" id="success-alert">
            {{ session('success') }}
        </div>
    @endif


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

            {{-- Produk 1: Ivory Bloom --}}
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition product-card">
                <img src="/images/products/ivory-bloom.jpg" alt="Ivory Bloom" class="rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-1">Ivory Bloom</h3>
                <p class="mb-2 text-gray-700 font-bold">Rp 199.000</p>
                
                <form action="{{ route('cart.add', ['id' => 1]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_name" value="Ivory Bloom">
                    <input type="hidden" name="price" value="199000">
                    <input type="hidden" name="size" value="" class="selected-size">

                    <div class="mb-3">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Pilih Ukuran:</label>
                        <div class="flex space-x-2 size-selector">
                            <button type="button" data-size="35 ML" class="size-button border px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black focus:outline-none">35 ML</button>
                            <button type="button" data-size="50 ML" class="size-button border px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black focus:outline-none">50 ML</button>
                        </div>
                    </div>

                    <div class="flex space-x-2 mb-4">
                        <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">New</span>
                        <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                    </div>

                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 rounded transition disabled:bg-gray-400 disabled:cursor-not-allowed" disabled>
                        Tambahkan Ke Keranjang
                    </button>
                </form>
            </div>

            {{-- Produk 2: OR DU SOIR --}}
            <div class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition product-card">
                <img src="/images/products/or-du-soir.jpg" alt="OR DU SOIR" class="rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-1">OR DU SOIR</h3>
                <p class="mb-2 text-gray-700 font-bold">Rp 199.000</p>
                
                <form action="{{ route('cart.add', ['id' => 2]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_name" value="OR DU SOIR">
                    <input type="hidden" name="price" value="199000">
                    <input type="hidden" name="size" value="" class="selected-size">

                    <div class="mb-3">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Pilih Ukuran:</label>
                        <div class="flex space-x-2 size-selector">
                            <button type="button" data-size="35 ML" class="size-button border px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black focus:outline-none">35 ML</button>
                            <button type="button" data-size="50 ML" class="size-button border px-3 py-1 text-sm rounded hover:bg-yellow-400 hover:text-black focus:outline-none">50 ML</button>
                        </div>
                    </div>

                    <div class="flex space-x-2 mb-4">
                        <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                    </div>

                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 rounded transition disabled:bg-gray-400 disabled:cursor-not-allowed" disabled>
                        Tambahkan Ke Keranjang
                    </button>
                </form>
            </div>

        </div>

        {{-- Tombol Lihat Lebih Banyak --}}
        <div class="text-center mt-10">
            <a href="{{ url('/products') }}" class="border border-black text-sm px-6 py-2 rounded hover:bg-black hover:text-white transition">
                Lihat lebih banyak lagi
            </a>
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- BAGIAN BARU DITAMBAHKAN DI SINI --}}
    {{-- ========================================================= --}}
    
    {{-- About Us --}}
    <section class="relative py-20 px-4 bg-cover bg-center text-white" style="background-image: url('/images/about-us.jpg');">
        {{-- Ganti '/images/about-us-bg.png' dengan path gambar yang benar --}}
        
        {{-- Overlay gelap untuk membuat teks lebih mudah dibaca --}}
        <div class="absolute inset-0 bg-black opacity-70"></div>

        {{-- Konten --}}
        <div class="relative z-10 max-w-3xl mx-auto text-left">
            <h2 class="text-3xl font-bold mb-6">About Us</h2>

            <p class="mb-4">
                Setiap botol EVOSTE menghidupkan momen dari hangatnya pagi hingga sunyinya hutan malam. Untukmu yang percaya wewangian adalah identitas, kehadiran, dan kenangan yang melekat. Dengan EVOSTE, kamu tak hanya wangi, tapi dikenang.
            </p>

            <p class="font-semibold mb-3">Kenapa memilih kami?</p>
            <ul class="space-y-3 mb-4">
                <li>✔️ <strong>Fast-Moving Luxury :</strong> Tren terkini dalam kemasan elegan, didukung cerita brand yang menginspirasi.</li>
                <li>✔️ <strong>High Value :</strong> Margin menguntungkan dengan bahan premium dan terjamin BPOM.</li>
                <li>✔️ <strong>Full Support :</strong> Dukungan lengkap dari marketing kit hingga pengiriman cepat.</li>
            </ul>

            <p class="mb-4">
                <strong>Cerita dalam Setiap Botol :</strong> Aroma yang bukan cuma wangi, tapi kenangan abadi.
            </p>
            
            <p class="mb-4">
                Temukan aroma yang bercerita tentangmu. Mulailah perjalanan indramu dengan EVOSTE sekarang karena setiap momenmu berharga.
            </p>

            <p class="italic text-gray-300 mb-6">#EVOSTE #CeritaDalamAroma</p>

            <a href="{{ url('/about') }}" class="inline-block bg-gray-800 hover:bg-gray-700 text-white font-semibold px-8 py-3 rounded transition-colors">
                Lihat lebih banyak lagi
            </a>
        </div>
    </section>

    {{-- Contact Us --}}
    <section class="py-16 bg-neutral-900 text-white px-4 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
            <p class="mb-8 text-lg text-gray-300">Join our fast-growing Reseller network.</p>
    
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-12 mb-10">
                {{-- Instagram --}}
                <a href="https://www.instagram.com/evosteofficial" target="_blank" class="flex items-center space-x-3 group">
                    <img src="/images/instagram.png" alt="Instagram" class="w-8 h-8">
                    <span class="text-lg group-hover:text-yellow-400 transition-colors">@evosteofficial</span>
                </a>
    
                {{-- WhatsApp --}}
                <a href="https://wa.me/6287777745791" target="_blank" class="flex items-center space-x-3 group">
                    <img src="/images/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
                    <span class="text-lg group-hover:text-yellow-400 transition-colors">(+62) 877-7774-5791</span>
                </a>
            </div>
    
            <a href="{{ url('/contact') }}" class="inline-block bg-gray-200 hover:bg-white text-black font-semibold px-8 py-3 rounded transition-colors">
                Lihat lebih banyak lagi
            </a>
        </div>
    </section>
@include('components.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Logika untuk setiap kartu produk
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const sizeButtons = card.querySelectorAll('.size-button');
        const selectedSizeInput = card.querySelector('.selected-size');
        const addToCartButton = card.querySelector('button[type="submit"]');

        sizeButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Hapus style aktif dari tombol lain di kartu yang sama
                sizeButtons.forEach(btn => {
                    btn.classList.remove('bg-yellow-400', 'text-black', 'font-bold');
                    btn.classList.add('border');
                });

                // Tambahkan style aktif ke tombol yang diklik
                this.classList.add('bg-yellow-400', 'text-black', 'font-bold');
                this.classList.remove('border');

                // Set nilai ukuran pada input tersembunyi
                const selectedSize = this.getAttribute('data-size');
                selectedSizeInput.value = selectedSize;

                // Aktifkan tombol "Tambahkan Ke Keranjang"
                addToCartButton.disabled = false;
            });
        });
    });

    // Sembunyikan notifikasi sukses setelah 3 detik
    const successAlert = document.getElementById('success-alert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.display = 'none';
        }, 3000);
    }
});
</script>
@endpush
