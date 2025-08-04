@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-semibold mb-8 text-center">Katalog Produk</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">

                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
                    <p class="text-gray-600 mb-3">{{ Str::limit($product->short_description, 80) }}</p>
                    <p class="text-black font-semibold mb-4">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                    <a href="{{ route('product.show', $product->slug) }}"
                       class="inline-block bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">
                        See More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
