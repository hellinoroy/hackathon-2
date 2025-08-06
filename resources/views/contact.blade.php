{{--
  File: resources/views/contact.blade.php
  Description: Halaman "Contact Us" yang sesuai dengan desain yang diberikan.
  Catatan: Pastikan proyek Laravel Anda sudah terinstall dan terkonfigurasi dengan Tailwind CSS.
--}}

@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12 sm:py-16">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Breadcrumb -->
    <div class="mb-8">
      <p class="text-sm text-gray-500">
        Home / <span class="font-semibold text-gray-800">Contact Us</span>
      </p>
    </div>

    <!-- Main Content Grid -->
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">

      <!-- Kolom Kiri: Informasi Kontak (Kotak Hitam) -->
      <div class="w-full lg:w-1/3 bg-black text-white p-8 rounded-xl shadow-lg relative overflow-hidden flex flex-col">
        <!-- Decorative circles for background effect -->
        <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-white/5 rounded-full z-0"></div>
        <div class="absolute -top-24 -left-20 w-56 h-56 bg-white/5 rounded-full z-0"></div>

        <div class="relative z-10 flex-grow flex flex-col">
          <h2 class="text-2xl font-bold mb-3">Informasi kontak</h2>
          <p class="text-gray-300 mb-8 text-sm">
            Silakan mulai percakapan atau ajukan permintaan bergabung sebagai reseller.
          </p>

          <div class="space-y-6 mt-auto">
            <a href="https://wa.me/6287777745791" target="_blank" class="flex items-center gap-4 group">
              <div class="bg-white/10 p-2 rounded-full group-hover:bg-white/20 transition-colors">
                <!-- WhatsApp Icon SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
              </div>
              <span class="text-gray-200">(+62) 877-7774-5791</span>
            </a>
            <a href="https://instagram.com/evosteofficial" target="_blank" class="flex items-center gap-4 group">
              <div class="bg-white/10 p-2 rounded-full group-hover:bg-white/20 transition-colors">
                <!-- Instagram Icon SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
              </div>
              <span class="text-gray-200">@evosteofficial</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Kolom Kanan: Form Kontak -->
      <div class="w-full lg:w-2/3 bg-white p-8 sm:p-10 rounded-xl shadow-lg">
        <form action="#" method="POST">
          @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
            <!-- First Name -->
            <div>
              <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-black focus:border-black transition">
            </div>

            <!-- Last Name -->
            <div>
              <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" placeholder="Doe" class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-black focus:border-black transition">
            </div>

            <!-- Email -->
            <div class="md:col-span-2">
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" name="email" id="email" autocomplete="email" class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-black focus:border-black transition">
            </div>

            <!-- Phone Number -->
            <div class="md:col-span-2">
              <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
              <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" placeholder="(+62) 812-3456-789" class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-black focus:border-black transition">
            </div>

            <!-- Message -->
            <div class="md:col-span-2">
              <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
              <textarea name="message" id="message" rows="5" placeholder="Tulis pesan kamu" class="w-full p-3 border border-gray-300 rounded-md focus:ring-1 focus:ring-black focus:border-black transition"></textarea>
            </div>
          </div>

          <!-- Tombol Kirim -->
          <div class="mt-8 text-right">
            <button type="submit" class="bg-black text-white font-bold py-3 px-8 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-colors">
              Kirim Pesan
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection
