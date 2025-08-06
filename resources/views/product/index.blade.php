@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-semibold mb-8 text-center">Katalog Produk</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        {{-- Produk 1 --}}
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border flex flex-col">
            <a href="#">
                <img src="{{ asset('images/sakura.jpg') }}" alt="Sakura" class="w-full h-80 object-cover">
            </a>

            <div class="p-4 flex flex-col flex-grow">
                <h2 class="text-lg font-bold mb-1">SAKURA BLOOM</h2>

                <div class="mb-3 space-y-1">
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">35 ML</span>
                        <span>Rp 75.000</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">50 ML</span>
                        <span>Rp 125.000</span>
                    </div>
                </div>

                <div class="flex gap-2 mb-4">
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">New</span>
                    <span class="bg-yellow-700 text-white text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                </div>

                <form action="#" method="POST" class="mt-auto">
                    <select class="w-full border rounded p-2 text-sm mb-2" required>
                        <option disabled selected>Pilih Ukuran</option>
                        <option>35 ML - Rp 75.000</option>
                        <option>50 ML - Rp 125.000</option>
                    </select>
                    <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 rounded transition">
                        Tambahkan Ke Keranjang
                    </button>
                </form>
            </div>
        </div>

        {{-- Tambahkan produk lain di bawah ini jika mau --}}
         <div class="bg-white shadow-lg rounded-lg overflow-hidden border flex flex-col">
            <a href="#">
                <img src="{{ asset('images/sakura.jpg') }}" alt="Sakura" class="w-full h-80 object-cover">
            </a>

            <div class="p-4 flex flex-col flex-grow">
                <h2 class="text-lg font-bold mb-1">SAKURA BLOOM</h2>

                <div class="mb-3 space-y-1">
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">35 ML</span>
                        <span>Rp 75.000</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">50 ML</span>
                        <span>Rp 125.000</span>
                    </div>
                </div>

                <div class="flex gap-2 mb-4">
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">New</span>
                    <span class="bg-yellow-700 text-white text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                </div>

                <form action="#" method="POST" class="mt-auto">
                    <select class="w-full border rounded p-2 text-sm mb-2" required>
                        <option disabled selected>Pilih Ukuran</option>
                        <option>35 ML - Rp 75.000</option>
                        <option>50 ML - Rp 125.000</option>
                    </select>
                    <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 rounded transition">
                        Tambahkan Ke Keranjang
                    </button>
    </div>
</div>
 <div class="bg-white shadow-lg rounded-lg overflow-hidden border flex flex-col">
            <a href="#">
                <img src="{{ asset('images/sakura.jpg') }}" alt="Sakura" class="w-full h-80 object-cover">
            </a>

            <div class="p-4 flex flex-col flex-grow">
                <h2 class="text-lg font-bold mb-1">SAKURA BLOOM</h2>

                <div class="mb-3 space-y-1">
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">35 ML</span>
                        <span>Rp 75.000</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-700">
                        <span class="border px-2 py-0.5 rounded">50 ML</span>
                        <span>Rp 125.000</span>
                    </div>
                </div>

                <div class="flex gap-2 mb-4">
                    <span class="bg-yellow-400 text-xs font-semibold px-2 py-1 rounded">New</span>
                    <span class="bg-yellow-700 text-white text-xs font-semibold px-2 py-1 rounded">Best Seller</span>
                </div>

                <form action="#" method="POST" class="mt-auto">
                    <select class="w-full border rounded p-2 text-sm mb-2" required>
                        <option disabled selected>Pilih Ukuran</option>
                        <option>35 ML - Rp 75.000</option>
                        <option>50 ML - Rp 125.000</option>
                    </select>
                    <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 rounded transition">
                        Tambahkan Ke Keranjang
                    </button>
@endsection
