@extends('layouts.app')

@section('content')

{{-- Bagian Banner Floral --}}
<div class="relative mb-16"> {{-- Menambah margin bawah --}}
    {{-- Gambar Latar --}}
    <div class="h-72 w-full bg-cover bg-center rounded-2xl" style="background-image: url('/images/Floral.jpg');">
    </div>
    
    {{-- Overlay Gelap untuk Keterbacaan Teks --}}
    <div class="absolute inset-0 bg-black bg-opacity-30 rounded-2xl"></div>

    {{-- Teks di Tengah --}}
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white tracking-wide">Floral</h1>
    </div>
</div>

{{-- Bagian Grid Produk --}}
<div class="container mx-auto px-4 pb-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10"> {{-- Menambah jarak antar kartu --}}
        
        {{-- Produk 1: Ivory Bloom 5 ML --}}
        <a href="{{ route('product.show', ['slug' => 'ivory-bloom-5ml']) }}" 
           class="block bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
            <x-product-card 
                image="/images/ivorybloom.png" {{-- Pastikan path gambar ini benar --}}
                name="IVORY BLOOM"
                volume="5 ML"
                :price="59000"
                :tags="['New', 'Best Seller']"
            />
        </a>

        {{-- Produk 2: Ivory Bloom 30 ML --}}
        <a href="{{ route('product.show', ['slug' => 'ivory-bloom-30ml']) }}" 
           class="block bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
            <x-product-card 
                image="/images/ivorybloom.png"
                name="IVORY BLOOM"
                volume="30 ML"
                :price="199000"
                :tags="['New', 'Best Seller']"
            />
        </a>

        {{-- Produk 3: Ivory Bloom 50 ML --}}
        <a href="{{ route('product.show', ['slug' => 'ivory-bloom-50ml']) }}" 
           class="block bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
            <x-product-card 
                image="/images/ivorybloom.png"
                name="IVORY BLOOM"
                volume="50 ML"
                :price="299000"
                :tags="['New', 'Best Seller']"
            />
        </a>

    </div>
</div>
@endsection