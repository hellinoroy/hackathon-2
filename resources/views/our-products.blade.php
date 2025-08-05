@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12">Our Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 place-items-center">
        <img src="/images/ivorybloom.png" alt="Ivory Bloom" class="max-w-[180px] shadow-lg">
        <img src="/images/citrineflame.png" alt="Citrine Flame" class="max-w-[180px] shadow-lg">
        <img src="/images/midnightcherry.png" alt="Midnight Cherry" class="max-w-[180px] shadow-lg">
        <img src="/images/oudlegendaire.png" alt="Oud Légendaire" class="max-w-[180px] shadow-lg">
        <img src="/images/ordusoir.png" alt="Or Du Soir" class="max-w-[180px] shadow-lg">
    </div>
    {{-- Existing product grid --}}
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 place-items-center mb-16">
    <img src="/images/ivorybloom.png" alt="Ivory Bloom" class="max-w-[180px] shadow-lg">
    <img src="/images/citrineflame.png" alt="Citrine Flame" class="max-w-[180px] shadow-lg">
    <img src="/images/midnightcherry.png" alt="Midnight Cherry" class="max-w-[180px] shadow-lg">
    <img src="/images/oudlegendaire.png" alt="Oud Légendaire" class="max-w-[180px] shadow-lg">
    <img src="/images/ordusoir.png" alt="Or Du Soir" class="max-w-[180px] shadow-lg">
</div>

{{-- Section: Semua Varian --}}
<h2 class="text-2xl font-semibold text-center mb-6">Semua Varian</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4 pb-16">
    <a href="{{ route('variant.floral') }}" class="block rounded-lg overflow-hidden group relative">
        <img src="/images/floral.jpg" alt="Floral" class="w-full h-full object-cover group-hover:scale-105 transition">
        <span class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-bold">Floral</span>
    </a>

    <a href="{{ route('variant.woody') }}" class="block rounded-lg overflow-hidden group relative">
        <img src="/images/woody.jpg" alt="Woody" class="w-full h-full object-cover group-hover:scale-105 transition">
        <span class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-bold">Woody</span>
    </a>

    <a href="{{ route('variant.fresh') }}" class="block rounded-lg overflow-hidden group relative">
        <img src="/images/fresh.jpg" alt="Fresh" class="w-full h-full object-cover group-hover:scale-105 transition">
        <span class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-bold">Fresh</span>
    </a>

    <a href="{{ route('variant.spicy') }}" class="block rounded-lg overflow-hidden group relative">
        <img src="/images/spicy.jpg" alt="Spicy" class="w-full h-full object-cover group-hover:scale-105 transition">
        <span class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-bold">Spicy</span>
    </a>
</div>
</div>

@endsection
