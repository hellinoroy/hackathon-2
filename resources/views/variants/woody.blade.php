@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12 text-center">
    <h1 class="text-4xl font-bold">Woody Variant</h1>
    <p class="mt-4">Tampilkan parfum Woody di sini.</p>
</div>
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-8 text-center">Woody Variant</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        
        <x-product-card 
            image="/images/ivorybloom.png"
            name="Ivory Bloom"
            volume="5 ML"
            :price="59000"
            :tags="['New', 'Best Seller', 'Women\'s']"
        />

        
        <x-product-card 
            image="/images/ivorybloom.png"
            name="Ivory Bloom"
            volume="35 ML"
            :price="189000"
            :tags="['Best Seller', 'Women\'s']"
        />

        <x-product-card 
            image="/images/ivorybloom.png"
            name="Ivory Bloom"
            volume="50 ML"
            :price="289000"
            :tags="['Best Seller', 'Women\'s']"
        />
    </div>
</div>
@endsection
