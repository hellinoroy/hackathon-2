@extends('layouts.app')

{{-- Mengatur judul spesifik untuk halaman ini --}}
@section('title', 'Admin Dashboard')

{{-- Memasukkan konten utama halaman ke dalam layout --}}
@section('content')

    <header class="mb-8">
        <div class="flex items-center text-lg text-gray-500">
            <span>Admin</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="font-semibold text-gray-800">Dashboard</span>
        </div>
    </header>

    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4 p-6 bg-white rounded-lg shadow-sm">
        <div class="relative w-full md:w-1/3">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <input type="text" placeholder="Search for products, samples, scents..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>
        <div class="flex gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-gray-800 text-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-700">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                 <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                Edit
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="bg-white rounded-2xl p-4 flex flex-col items-center shadow-sm border border-gray-200/80 hover:shadow-md transition-shadow">
                <div class="bg-gray-50 rounded-lg w-full h-48 mb-4 flex items-center justify-center p-2">
                     <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="max-h-full max-w-full object-contain">
                </div>
                <div class="text-left w-full">
                    <h3 class="font-bold text-lg">{{ $product['name'] }}</h3>
                    <p class="text-gray-500 text-sm">{{ $product['size'] }}</p>
                    <p class="font-semibold my-1">{{ $product['price'] }}</p>
                    <div class="flex flex-wrap gap-2 my-2">
                        @foreach ($product['tags'] as $tag)
                            @php
                                $tagClasses = [
                                    'New' => 'bg-yellow-100 text-yellow-800',
                                    'Best Seller' => 'bg-yellow-100 text-yellow-800',
                                    'Women\'s' => 'bg-pink-100 text-pink-800',
                                    'Men\'s' => 'bg-blue-100 text-blue-800',
                                    'Unisex' => 'bg-green-100 text-green-800',
                                ];
                                $classesForTag = $tagClasses[$tag] ?? 'bg-gray-100 text-gray-800';
                            @endphp
                            <span class="text-xs font-medium px-2 py-1 rounded-full {{ $classesForTag }}">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                    <p class="text-gray-400 text-xs mt-2">{{ $product['sku'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
    {{ $products->links() }}
</div>

@endsection