<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoste</title>
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- Menggunakan Tailwind CSS via CDN untuk kemudahan, atau gunakan Vite jika sudah dikonfigurasi --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Menjadikan Poppins sebagai font default */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    {{-- Jika Anda menggunakan Vite, hapus CDN di atas dan uncomment baris di bawah --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="antialiased text-gray-800 bg-gray-50">
<script src="{{ asset('js/app.js') }}" defer></script> 
    {{-- Header --}}
    <header class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Baris Atas: Logo, Search, dan Ikon --}}
            <div class="flex items-center justify-between h-24">
                
                {{-- Logo & Tagline (Kiri) --}}
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <h1 class="text-3xl font-bold tracking-widest text-gray-900">EVOSTE</h1>
                        <p class="text-xs text-gray-500 mt-1">Your scent. Their memory. Forever</p>
                    </a>
                </div>

                {{-- Search Bar (Tengah) --}}
                <div class="flex-grow max-w-xl mx-8 hidden md:block">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            {{-- Ikon Search --}}
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            placeholder="Search for products, samples, scents..."
                            class="block w-full bg-gray-50 border border-gray-300 rounded-md py-2.5 pl-10 pr-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                        >
                    </div>
                </div>

                {{-- Ikon (Kanan) --}}
                <div class="flex items-center gap-6">
                    {{-- Ikon Keranjang --}}
                    <a href="{{ route('checkout') }}" class="relative text-gray-600 hover:text-indigo-600">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.658-.463 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        {{-- Notifikasi Jumlah Item --}}
                        <span class="absolute -top-2 -right-2 flex items-center justify-center h-5 w-5 bg-red-500 text-white text-xs rounded-full">0</span>
                    </a>
                    {{-- Ikon User --}}
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-indigo-600">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Baris Bawah: Navigasi --}}
        <nav class="bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center h-14">
                    <div class="flex space-x-10">
                        <a href="{{ route('our.products')}}" class="text-sm font-medium text-gray-900 border-b-2 border-indigo-500 inline-flex items-center px-1 pt-1">Our Products</a>
                        <a href="{{ route('find-scent')}}" class="text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300 inline-flex items-center px-1 pt-1">Find Your Scent</a>
                        <a href="{{-- route('about') --}}" class="text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300 inline-flex items-center px-1 pt-1">About Evoste</a>
                        <a href="{{-- route('contact') --}}" class="text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300 inline-flex items-center px-1 pt-1">Contact US</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- Main Content --}}
    <main class="py-10">
        @yield('content')
    </main>

</body>
</html>
