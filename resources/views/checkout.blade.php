{{-- resources/views/checkout.blade.php --}}

@extends('layouts.app') {{-- Menggunakan layout utama Anda --}}

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">

        <nav class="mb-6 text-sm text-gray-500" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="hover:text-blue-600">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="flex items-center">
                    <a href="/products" class="hover:text-blue-600">Our Products</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="text-gray-700 font-medium">
                    Check Out
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-6">

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800 mb-2">Alamat Pengiriman Parfume</h2>
                            <p class="font-semibold text-gray-700">Jeannete <span class="font-normal text-gray-500">(+85) 123456789</span></p>
                            <p class="text-gray-500 text-sm mt-1">
                                Jl. Anggrek No. 8B, RT 05 RW 03, Kelurahan Sukamaju, Kecamatan Setiabudi, Jakarta Selatan, DKI Jakarta, 1291
                            </p>
                        </div>
                        <a href="#" class="bg-yellow-100 text-yellow-800 text-sm font-semibold px-4 py-2 rounded-lg hover:bg-yellow-200 transition-colors">
                            Ganti Alamat
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-800">Pilih Pembayaran</h2>
                        <span class="text-sm text-gray-400">Tampilkan Semua Metode</span>
                    </div>
                    <div class="space-y-4">
                        <label for="qris" class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_QRIS.svg/1200px-Logo_QRIS.svg.png" alt="QRIS" class="h-6 mr-4">
                            <span class="font-semibold text-gray-700">QRIS</span>
                            <input type="radio" id="qris" name="payment_method" class="ml-auto h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300">
                        </label>
                        <label for="va" class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png" alt="BCA" class="h-4 mr-4">
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700">Transfer akun virtual</span>
                                <span class="text-sm text-gray-500">BCA • 123456789</span>
                            </div>
                            <input type="radio" id="va" name="payment_method" class="ml-auto h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                        </label>
                        <label for="gopay" class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/2560px-Gopay_logo.svg.png" alt="Gopay" class="h-5 mr-4">
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700">Gopay</span>
                                <span class="text-sm text-gray-500">(+85) 123456789</span>
                            </div>
                            <input type="radio" id="gopay" name="payment_method" class="ml-auto h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300">
                        </label>
                         <label for="ovo" class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png" alt="OVO" class="h-4 mr-4">
                             <div class="flex flex-col">
                                <span class="font-semibold text-gray-700">OVO</span>
                                <span class="text-sm text-gray-500">(+85) 123456789</span>
                            </div>
                            <input type="radio" id="ovo" name="payment_method" class="ml-auto h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300">
                        </label>
                    </div>
                </div>

                <div role="alert" class="rounded-xl border border-gray-200 bg-yellow-50 p-4">
                    <div class="flex items-start gap-4">
                        <span class="text-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        </span>
                        <div class="flex-1">
                            <strong class="block font-medium text-gray-900"> Periksa kembali produk sebelum melanjutkan pembayaran </strong>
                            <p class="mt-1 text-sm text-gray-700">Pastikan semua detail sudah sempurna sebelum menyelesaikan pesanan.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Produk Pesanan Anda</h2>
                    <div class="space-y-4">
                        {{-- Contoh Item Produk (nantinya akan di-loop) --}}
                        <div class="flex items-center justify-between border-b pb-4">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/80" alt="Produk" class="w-20 h-20 rounded-lg object-cover">
                                <div>
                                    <h3 class="font-semibold text-gray-800">Nama Produk Keren</h3>
                                    <p class="text-sm text-gray-500">Jumlah: 1</p>
                                </div>
                            </div>
                            <p class="font-semibold text-gray-800">Rp 150.000</p>
                        </div>
                        {{-- Akhir Contoh Item Produk --}}
                         <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/80" alt="Produk" class="w-20 h-20 rounded-lg object-cover">
                                <div>
                                    <h3 class="font-semibold text-gray-800">Produk Lainnya</h3>
                                    <p class="text-sm text-gray-500">Jumlah: 2</p>
                                </div>
                            </div>
                            <p class="font-semibold text-gray-800">Rp 200.000</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-xl shadow-md sticky top-8">
                    <h2 class="text-lg font-bold text-gray-800 border-b pb-4 mb-4">Ringkasan Pesanan</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between text-gray-600">
                            <span>Subtotal (3 item)</span>
                            <span class="font-medium text-gray-800">Rp 350.000</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Biaya Pengiriman</span>
                            <span class="font-medium text-gray-800">Rp 15.000</span>
                        </div>
                         <div class="flex justify-between text-gray-600">
                            <span>Diskon</span>
                            <span class="font-medium text-red-500">- Rp 10.000</span>
                        </div>
                    </div>
                    <div class="border-t mt-4 pt-4">
                        <div class="flex justify-between font-bold text-lg text-gray-800">
                            <span>Total</span>
                            <span>Rp 355.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-lg mt-6 hover:bg-blue-700 transition-colors">
                        Bayar Sekarang
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection