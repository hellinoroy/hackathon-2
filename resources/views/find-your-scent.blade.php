@extends('layouts.app') {{-- Pastikan kamu sudah punya layout ini --}}

@section('content')
    <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('/images/find-your-scent-bg.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4 text-center">
            <nav class="absolute top-4 left-4 text-sm text-white">
                <a href="/" class="hover:underline">Home</a> &gt; <span>Find Your Scent</span>
            </nav>

            <h1 class="text-3xl md:text-5xl font-bold mb-4">Temukan Aroma yang <br class="hidden md:inline"> Mewakili Dirimu</h1>
            
            <p class="max-w-2xl mb-6 text-sm md:text-lg leading-relaxed">
                Setiap orang punya cerita, dan setiap aroma bisa jadi bagian dari cerita itu. 
                Temukan wangi yang paling cocok dengan karakter dirimu, sesuai suasana hati, 
                kepribadian, atau kenangan yang ingin kamu bawa ke mana pun kamu pergi.
            </p>

            <form action="{{ route('find-scent') }}" method="GET" class="flex w-full max-w-xl">
                <input
                    type="text"
                    name="q"
                    placeholder="Cari aroma yang pas dengan karakter kamu..."
                    class="flex-grow px-4 py-2 rounded-l-md text-black focus:outline-none"
                >
                <button
                    type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-r-md font-semibold"
                >
                    Temukan Aromamu
                </button>
            </form>
        </div>
    </section>
@endsection
