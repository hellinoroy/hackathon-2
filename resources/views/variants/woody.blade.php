@extends('layouts.app')

@section('content')

{{-- Bagian Banner --}}
{{-- Anda bisa mengganti gambar dan teks banner ini jika diperlukan --}}
<div class="relative mb-12">
    {{-- Gambar Latar --}}
    <div class="h-72 w-full bg-cover bg-center" style="background-image: url('/images/woody.jpg');">
    </div>
    
    {{-- Overlay Gelap untuk Keterbacaan Teks --}}
    <div class="absolute inset-0 bg-black opacity-25"></div>

    {{-- Teks di Tengah --}}
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-6xl font-bold text-white">Woody</h1>
    </div>
</div>

{{-- Bagian Grid Produk --}}
<div class="container mx-auto px-4 pb-12">
    {{-- Semua produk berada di dalam satu grid container ini --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        
        {{-- BARIS PERTAMA: OR DU SOIR --}}
        
        {{-- Produk 1: OR DU SOIR 5 ML --}}
        <a href="{{ route('product.show', ['slug' => 'or-du-soir-5ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/ordusoir.png" {{-- Ganti dengan path gambar yang benar --}}
                name="OR DU SOIR"
                volume="5 ML"
                :price="59000"
                :tags="['Best Seller', 'Men\'s']"
            />
        </a>

        {{-- Produk 2: OR DU SOIR 30 ML --}}
        <a href="{{ route('product.show', ['slug' => 'or-du-soir-30ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/ordusoir.png"
                name="OR DU SOIR"
                volume="30 ML"
                :price="199000"
                :tags="['Best Seller', 'Men\'s']"
            />
        </a>

        {{-- Produk 3: OR DU SOIR 50 ML --}}
        <a href="{{ route('product.show', ['slug' => 'or-du-soir-50ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/ordusoir.png"
                name="OR DU SOIR"
                volume="50 ML"
                :price="299000"
                :tags="['Best Seller', 'Men\'s']"
            />
        </a>

        {{-- BARIS KEDUA: CITRINE FLAME --}}

        {{-- Produk 4: CITRINE FLAME 5 ML --}}
        <a href="{{ route('product.show', ['slug' => 'citrine-flame-5ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/citrineflame.png" {{-- Ganti dengan path gambar yang benar --}}
                name="CITRINE FLAME"
                volume="5 ML"
                :price="59000"
                :tags="['Unisex']"
            />
        </a>

        {{-- Produk 5: CITRINE FLAME 30 ML --}}
        <a href="{{ route('product.show', ['slug' => 'citrine-flame-30ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/citrineflame.png"
                name="CITRINE FLAME"
                volume="30 ML"
                :price="199000"
                :tags="['Unisex']"
            />
        </a>

        {{-- Produk 6: CITRINE FLAME 50 ML --}}
        <a href="{{ route('product.show', ['slug' => 'citrine-flame-50ml']) }}" class="block h-full">
            <x-product-card 
                image="/images/citrineflame.png"
                name="CITRINE FLAME"
                volume="50 ML"
                :price="299000"
                :tags="['Unisex']"
            />
        </a>

    </div>
</div>
@endsection