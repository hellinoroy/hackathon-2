@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative w-full h-[90vh] bg-cover bg-center" style="background-image: url('/images/hero1.png');">
        {{-- Overlay (opsional) --}}
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        {{-- Hero Text --}}
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white z-10 px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-2">Crafted for Moments That Never Fade</h1>
            <p class="text-lg md:text-xl mb-6">Be Timeless with Evoste</p>
            
            {{-- Tombol See More ke Halaman Katalog Produk --}}
            <a href="{{ route('products.index') }}"
               class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-full transition shadow">
                SEE MORE...
            </a>
        </div>
    </section>
@endsection
