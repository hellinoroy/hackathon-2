@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-2 gap-8">
        {{-- Gambar Utama dan Galeri --}}
        <div>
            <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}" class="w-full rounded-xl shadow-md mb-4">
            <div class="flex space-x-4">
                @foreach($product->images as $image)
                    <img src="{{ asset('storage/' . $image->path) }}" class="w-20 h-20 object-cover rounded border hover:ring-2 hover:ring-black cursor-pointer">
                @endforeach
            </div>
        </div>

        {{-- Deskripsi dan Info Produk --}}
        <div>
            <h1 class="text-3xl font-semibold mb-2">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-4">{{ $product->short_description }}</p>

            {{-- Kisah Aroma --}}
            <div class="mb-4">
                <h2 class="text-lg font-medium">Kisah Aroma</h2>
                <p class="text-gray-700">{{ $product->story }}</p>
            </div>

            {{-- Catatan Aroma --}}
            <div class="mb-4">
                <h2 class="text-lg font-medium">Catatan Aroma</h2>
                <ul class="text-gray-700">
                    <li><strong>Atas:</strong> {{ $product->notes_top }}</li>
                    <li><strong>Tengah:</strong> {{ $product->notes_middle }}</li>
                    <li><strong>Dasar:</strong> {{ $product->notes_base }}</li>
                </ul>
            </div>

            {{-- Harga dan Opsi Pembelian --}}
            <div class="mb-6">
                <h2 class="text-lg font-medium">Harga</h2>
                <p class="text-xl font-semibold text-black mb-2">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                
                {{-- Opsi Ukuran --}}
                <label for="size" class="block text-sm font-medium text-gray-700">Pilih Ukuran</label>
                <select id="size" name="size" class="mt-1 mb-4 block w-full border border-gray-300 rounded p-2">
                    <option value="full">Ukuran Penuh</option>
                    <option value="tester">Tester 5ml</option>
                </select>

                <div class="flex gap-4">
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="size" value="full">
                        <button type="submit" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">Tambahkan ke Keranjang</button>
                    </form>
                    <form action="{{ route('checkout.buy-now', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="size" value="full">
                        <button type="submit" class="bg-white text-black border border-black px-4 py-2 rounded hover:bg-gray-100">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
