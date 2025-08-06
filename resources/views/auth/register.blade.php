<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - {{ config('app.name', 'Evoste') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col bg-white">
        
        <header class="border-b border-gray-200">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <div>
                    <a href="/" class="text-3xl font-bold tracking-wider">EVOSTE</a>
                    <p class="text-xs text-gray-500">Your scent. Their memory. Forever</p>
                </div>
                <div class="relative w-full max-w-md hidden md:block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </span>
                    <input type="search" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Search for products, samples, scents...">
                </div>
                <div class="flex items-center space-x-5">
                    <a href="#" class="relative text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-yellow-500 text-xs text-white">0</span>
                    </a>
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </a>
                </div>
            </div>
        </header>

        <main class="flex-grow flex items-center justify-center py-12 px-6">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-center gap-16 bg-white p-8 rounded-lg">

                    <div class="w-full md:w-1/2 lg:w-5/12 hidden md:block">
                        <img src="{{ asset('images/bahanparfum.jpg') }}" alt="Perfume Ingredients" class="w-full h-full object-cover rounded-lg shadow-md">
                        {{-- GANTI DENGAN GAMBAR ANDA: {{ asset('images/your-image.jpg') }} --}}
                    </div>

                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="text-left">
                            <h2 class="text-3xl font-bold text-gray-800">Daftar akun baru sekarang!</h2>
                            <p class="text-gray-500 mt-2">Hanya butuh beberapa langkah untuk bergabung.</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="mt-8">
                            @csrf

                            <div class="relative mb-4">
                                 <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </span>
                                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Nama kamu">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="relative mb-4">
                                 <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </span>
                                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Masukkan email kamu kesini">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="relative mb-4">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </span>
                                <input id="password" type="password" name="password" required autocomplete="new-password" class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Kata sandi kamu">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <p class="text-xs text-gray-500 mt-2">Gunakan kata sandi setidaknya 8 karakter yang terdiri dari huruf, angka, dan simbol.</p>
                            </div>

                            <div class="relative mb-6">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </span>
                                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Konfirmasi ulang kata sandi kamu">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-3 rounded-md hover:bg-yellow-600 transition duration-300">
                                Daftar
                            </button>

                            <p class="text-center text-sm text-gray-600 mt-6">
                                <a href="{{ route('login') }}" class="hover:underline">
                                    Masuk dengan akun sebelumnya
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-900 text-gray-400">
            <div class="container mx-auto px-6 py-12">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                    <div class="col-span-2 md:col-span-1">
                        <h3 class="text-2xl font-bold text-white tracking-wider">EVOSTE</h3>
                        <p class="text-xs mt-1">Your scent. Their memory. Forever</p>
                    </div>
                    <div><h4 class="font-bold text-white mb-4">Our Product</h4><ul class="space-y-2 text-sm"><li><a href="#" class="hover:text-white">Floral</a></li><li><a href="#" class="hover:text-white">Woody</a></li><li><a href="#" class="hover:text-white">Fresh</a></li><li><a href="#" class="hover:text-white">Spicy</a></li></ul></div>
                    <div><h4 class="font-bold text-white mb-4">Find Your Scent</h4><ul class="space-y-2 text-sm"><li><a href="#" class="hover:text-white">Find Your Scent</a></li></ul></div>
                    <div><h4 class="font-bold text-white mb-4">About Evoste</h4><ul class="space-y-2 text-sm"><li><a href="#" class="hover:text-white">Evoste</a></li></ul></div>
                    <div><h4 class="font-bold text-white mb-4">Contact Us</h4><ul class="space-y-2 text-sm"><li><a href="#" class="hover:text-white flex items-center space-x-2"><span>Whatsapp:</span> <span>(+62) 877-1774-5791</span></a></li><li><a href="#" class="hover:text-white flex items-center space-x-2"><span>Instagram:</span> <span>@evosteofficial</span></a></li></ul></div>
                </div>
                <div class="border-t border-gray-800 mt-10 pt-6 text-center text-sm">
                    <p>&copy; {{ date('Y') }} EVOSTE | All Rights Reserved</p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>