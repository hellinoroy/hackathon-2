@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">

    {{-- SECTION 1: OUR PRODUCTS HERO --}}
    {{-- Bagian ini menggunakan satu gambar besar dengan teks di atasnya --}}
    <div class="relative w-full mb-16">
        
        {{-- Gambar Utama Produk --}}
        {{-- Ganti 'products-hero.jpg' dengan nama file gambar Anda --}}
        <img src="/images/backgroundourproduct.png" alt="Evoste Collective Products" class="w-full h-auto">

        {{-- Kumpulan Teks Deskripsi --}}
        {{-- Posisi teks disesuaikan menggunakan class top/left/right dari Tailwind CSS --}}

    </div>

    {{-- SECTION 2: SEMUA VARIAN --}}
    <h2 class="text-2xl font-semibold text-center mb-8">Semua Varian</h2>

    {{-- Grid untuk Varian --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4 pb-16">
        
        <a href="{{ route('variant.floral') }}" class="block rounded-xl overflow-hidden group relative shadow-lg">
            <img src="/images/floral.jpg" alt="Floral" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">Floral</span>
            </div>
        </a>

        <a href="{{ route('variant.woody') }}" class="block rounded-xl overflow-hidden group relative shadow-lg">
            <img src="/images/woody.jpg" alt="Woody" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">Woody</span>
            </div>
        </a>

        <a href="{{ route('variant.fresh') }}" class="block rounded-xl overflow-hidden group relative shadow-lg">
            <img src="/images/fresh.jpg" alt="Fresh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">Fresh</span>
            </div>
        </a>

        <a href="{{ route('variant.spicy') }}" class="block rounded-xl overflow-hidden group relative shadow-lg">
            <img src="/images/spicy.jpg" alt="Spicy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <span class="text-white text-xl font-bold">Spicy</span>
            </div>
        </a>
    </div>

</div>
@endsection