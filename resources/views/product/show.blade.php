@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    {{-- Breadcrumb --}}
    <nav class="text-sm text-gray-600 mb-4">
        <a href="{{ route('our-products') }}" class="hover:underline">Home</a> &gt; {{ $product['name'] }}
    </nav>

    {{-- Produk Utama --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        {{-- Galeri Gambar & Size --}}
        <div>
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full mb-4 shadow">

            <div class="space-y-2">
                @foreach ($product['sizes'] as $s)
                    <div class="border p-2 rounded flex items-center justify-between">
                        <span>{{ $s['size'] }}</span>
                        <span class="text-sm font-medium text-gray-700">Rp {{ number_format($s['price'], 0, ',', '.') }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Detail Produk --}}
        <div>
            <h1 class="text-3xl font-bold mb-2">{{ $product['name'] }}</h1>
            <h2 class="text-sm text-gray-600 mb-4">EAU DE PARFUM</h2>
            <p class="italic mb-2">{{ $product['description'] }}</p>
            <p class="text-sm text-gray-700 mb-4">{{ $product['detail'] }}</p>

            <h3 class="font-semibold">Catatan Aroma</h3>
            <a href="#" class="text-yellow-700 text-sm font-medium">Lihat Selengkapnya &rarr;</a>

            {{-- Add to cart --}}
            <div class="flex items-center space-x-4 mt-6">
                <div class="flex items-center border px-2 rounded">
                    <button class="px-2 text-lg">−</button>
                    <input type="number" value="1" class="w-10 text-center border-0 focus:outline-none">
                    <button class="px-2 text-lg">+</button>
                </div>
                <button class="border border-yellow-700 text-yellow-700 px-4 py-2 rounded hover:bg-yellow-100">
                    Tambahkan ke keranjang
                </button>
                <button class="bg-yellow-700 text-white px-4 py-2 rounded hover:bg-yellow-800">
                    Beli
                </button>
            </div>
        </div>
    </div>

    {{-- Review --}}
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-center mb-2">Review</h2>
        <p class="text-center text-sm text-gray-600 mb-6">Temukan kisah nyata dari pengguna kami</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($product['reviews'] as $review)
                <div class="border rounded-lg p-4 text-sm text-gray-700 shadow">
                    <p class="mb-3">“{{ $review['text'] }}”</p>
                    <div class="text-right font-semibold text-gray-900">
                        {{ $review['name'] }}<br>
                        <span class="text-xs text-gray-500">{{ $review['date'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
