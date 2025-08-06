<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Ivory Bloom</title>
    {{-- Memuat Tailwind CSS melalui CDN untuk kemudahan --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Memuat Alpine.js untuk interaktivitas --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Menambahkan font kustom jika diperlukan, contoh: Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="container mx-auto px-4 py-8">

        <nav class="text-sm mb-8">
            <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-800">Home</a>
            <span class="mx-2 text-gray-400">></span>
            <span class="font-medium">Ivory Bloom</span>
        </nav>

        <main class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div x-data="{
                    mainImage: 'https://i.imgur.com/o2YhA4r.png',
                    thumbnails: [
                        { id: 1, src: 'https://i.imgur.com/o2YhA4r.png', label: 'Tester 5ML' },
                        { id: 2, src: 'https://i.imgur.com/gKprB8S.png', label: '30 ML' },
                        { id: 3, src: 'https://i.imgur.com/2v3p5I3.png', label: '50 ML' },
                    ],
                    activeThumbnail: 1
                 }" class="flex flex-col-reverse md:flex-row gap-4">

                <div class="flex md:flex-col gap-3 justify-center md:justify-start">
                    <template x-for="thumb in thumbnails" :key="thumb.id">
                        <div @click="mainImage = thumb.src; activeThumbnail = thumb.id"
                             :class="{'ring-2 ring-offset-2 ring-black': activeThumbnail === thumb.id}"
                             class="cursor-pointer bg-white border rounded-lg p-1 w-20 h-20 flex items-center justify-center transition-all">
                            <img :src="thumb.src" :alt="thumb.label" class="object-contain max-h-full">
                        </div>
                    </template>
                </div>

                <div class="flex-1 bg-white border rounded-lg flex items-center justify-center p-4 relative aspect-square">
                    <img :src="mainImage" alt="Ivory Bloom Eau de Parfum" class="object-contain h-full max-h-[450px] transition-all duration-300">
                     <button @click="const currentIndex = thumbnails.findIndex(t => t.id === activeThumbnail); const prevIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length; mainImage = thumbnails[prevIndex].src; activeThumbnail = thumbnails[prevIndex].id;" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2 hover:bg-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button @click="const currentIndex = thumbnails.findIndex(t => t.id === activeThumbnail); const nextIndex = (currentIndex + 1) % thumbnails.length; mainImage = thumbnails[nextIndex].src; activeThumbnail = thumbnails[nextIndex].id;" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2 hover:bg-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </div>
            </div>


            <div class="flex flex-col">
                <h1 class="text-4xl font-bold tracking-tight">IVORY BLOOM</h1>
                <p class="text-md text-gray-500 mt-1">EAU DE PARFUM</p>

                <div x-data="{ selectedSize: '5 ML' }" class="mt-6">
                    <h3 class="text-sm font-medium text-gray-600">Ukuran</h3>
                    <div class="flex gap-3 mt-2">
                        <button @click="selectedSize = '5 ML'" :class="{'bg-black text-white border-black': selectedSize === '5 ML', 'bg-white hover:bg-gray-100 border-gray-300': selectedSize !== '5 ML'}" class="px-5 py-2 border rounded-lg font-semibold text-sm transition-colors">5 ML</button>
                        <button @click="selectedSize = '30 ML'" :class="{'bg-black text-white border-black': selectedSize === '30 ML', 'bg-white hover:bg-gray-100 border-gray-300': selectedSize !== '30 ML'}" class="px-5 py-2 border rounded-lg font-semibold text-sm transition-colors">30 ML</button>
                        <button @click="selectedSize = '50 ML'" :class="{'bg-black text-white border-black': selectedSize === '50 ML', 'bg-white hover:bg-gray-100 border-gray-300': selectedSize !== '50 ML'}" class="px-5 py-2 border rounded-lg font-semibold text-sm transition-colors">50 ML</button>
                    </div>
                </div>

                <div class="mt-6 text-base text-gray-700 space-y-4">
                    <p>Parfum dengan karakter segar, manis, dan eksotis yang memadukan lychee, rhubarb, saffron, dan bergamot dengan Turkish rose, jasmine, dan soft musk. Kenangan pagimu yang paling surya, kini dalam botol.</p>
                </div>

                <div x-data="{ open: false }" class="mt-6 border-t pt-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <h4 class="font-semibold">Catatan Aroma</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm">
                        <ul>
                            <li><strong>Top Notes:</strong> Lychee, Rhubarb, Saffron, Bergamot</li>
                            <li><strong>Middle Notes:</strong> Turkish Rose, Jasmine</li>
                            <li><strong>Base Notes:</strong> Soft Musk</li>
                        </ul>
                    </div>
                </div>

                <div x-data="{ quantity: 1 }" class="mt-8 flex items-center gap-4">
                    <div class="flex items-center border border-gray-300 rounded-lg">
                        <button @click="quantity = Math.max(1, quantity - 1)" class="px-3 py-2 text-gray-500 hover:text-black transition">-</button>
                        <input type="text" x-model="quantity" class="w-12 text-center border-none focus:ring-0 font-semibold">
                        <button @click="quantity++" class="px-3 py-2 text-gray-500 hover:text-black transition">+</button>
                    </div>
                     <button class="flex-1 text-center font-bold border border-black rounded-lg py-3 px-6 transition hover:bg-gray-100">
                        Tambahkan ke keranjang
                    </button>
                </div>
                <button class="w-full mt-4 bg-yellow-400 text-black font-bold rounded-lg py-3 px-6 transition hover:bg-yellow-500">
                    Beli
                </button>
            </div>
        </main>

        <section class="mt-20" x-data="{
                reviews: [
                    { name: 'Laurent', date: '08-01-25', text: 'Wangi yang sangat elegan dan tahan lama. Setiap semprotannya memberikan kesan mewah dan segar. Sangat direkomendasikan untuk acara formal maupun santai. Packagingnya juga sangat premium.' },
                    { name: 'Luna', date: '21-08-25', text: 'Awalnya ragu, tapi ternyata wanginya unik dan tidak pasaran. Aroma lychee dan mawar-nya sangat seimbang. Dapat banyak pujian dari teman-teman saat memakainya. Pasti akan beli lagi!' },
                    { name: 'Arief', date: '15-05-25', text: 'Sebagai pria, saya suka parfum dengan sentuhan manis yang tidak berlebihan. Ivory Bloom ini pas. Segar di awal, lalu menjadi lebih hangat dan musky. Cocok untuk dipakai sehari-hari.' }
                ],
                activeSlide: 0,
                autoplay() {
                    setInterval(() => { this.activeSlide = (this.activeSlide + 1) % this.reviews.length }, 5000)
                }
            }" x-init="autoplay()">
            <h2 class="text-2xl font-bold text-center">Review</h2>
            <p class="text-center text-gray-500 mt-2">Temukan kisah nyata dari pengguna kami</p>

            <div class="relative mt-8">
                <div class="overflow-hidden relative w-full md:w-3/4 lg:w-1/2 mx-auto h-48">
                    <template x-for="(review, index) in reviews" :key="index">
                        <div x-show="activeSlide === index"
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0 transform translate-x-full"
                             x-transition:enter-end="opacity-100 transform translate-x-0"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100 transform translate-x-0"
                             x-transition:leave-end="opacity-0 transform -translate-x-full"
                             class="absolute inset-0 bg-white border rounded-lg p-6 text-center flex flex-col justify-center">
                            <p class="text-gray-600 italic">"&ZeroWidthSpace;<span x-text="review.text"></span>"</p>
                            <p class="font-bold mt-4" x-text="review.name"></p>
                            <p class="text-xs text-gray-400" x-text="review.date"></p>
                        </div>
                    </template>
                </div>

                <button @click="activeSlide = (activeSlide - 1 + reviews.length) % reviews.length" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 p-2 rounded-full bg-white border shadow-md hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button @click="activeSlide = (activeSlide + 1) % reviews.length" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 p-2 rounded-full bg-white border shadow-md hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </section>

    </div>

</body>
</html>