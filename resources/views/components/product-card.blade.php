@props(['image', 'name', 'volume', 'price', 'tags'])

<div class="border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition p-4 flex flex-col items-center text-center">
    <img src="{{ $image }}" alt="{{ $name }}" class="h-48 object-contain mb-4">

    <h2 class="text-base font-semibold">{{ $name }}</h2>
    <span class="text-xs text-white bg-black px-2 py-0.5 rounded-full mt-1">{{ $volume }}</span>

    <p class="text-sm text-gray-700 mt-2">Rp {{ number_format($price, 0, ',', '.') }}</p>

    <div class="flex flex-wrap justify-center gap-1 mt-2">
        @foreach ($tags as $tag)
            <span class="text-xs bg-yellow-200 text-yellow-900 font-semibold px-2 py-0.5 rounded-full">
                {{ $tag }}
            </span>
        @endforeach
    </div>
</div>
