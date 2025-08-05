<!DOCTYPE html>
<html lang="id">
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evoste</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800">

    {{-- Header --}}
    <header class="bg-white border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            
            {{-- Logo & Tagline --}}
            <div>
                <a href="{{ route('home') }}" h1 class="text-2xl font-bold tracking-widest">EVOSTE</h1>
                <p class="text-xs text-gray-500">Your scent. Their memory. Forever</p>
            </div>

            {{-- Navigation Menu --}}
            <nav class="flex flex-wrap justify-center md:justify-end gap-6 text-sm font-medium">
                <a href="{{ route('our.products') }}" class="text-gray-700 hover:text-indigo-600 transition">Our Products</a>
                <a href="{{ route('find-scent') }}" class="text-gray-700 hover:text-indigo-600 transition">Find Your Scent</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-indigo-600 transition">About Evoste</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-indigo-600 transition">Contact Us</a>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
