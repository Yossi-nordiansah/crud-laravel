<x-layout title="myStore | Products">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Judul -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h1>
            <p class="text-lg text-gray-600">
                Temukan produk terbaik dengan harga terbaik hanya di 
                <span class="text-blue-600 font-semibold">MyStore</span>.
            </p>
        </div>

        <!-- Filter Category -->
        <div class="mb-8">
            <form method="GET" action="{{ url('/products') }}" class="flex items-center gap-4">
                <input 
                    type="text" 
                    name="category" 
                    placeholder="Filter by category..."
                    value="{{ request('category') }}"
                    class="w-full md:w-1/3 px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none"
                >
                <button 
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition"
                >
                    Filter
                </button>
            </form>
        </div>

        <!-- Grid Produk -->
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
            @forelse ($products as $product)
                <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:scale-105 transition-transform">
                    <!-- Gambar produk -->
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" 
                        class="w-full h-48 object-cover">

                    <!-- Konten produk -->
                    <div class="p-6 flex flex-col h-full">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $product['name'] }}</h2>
                        <p class="text-gray-600 mt-2 text-sm line-clamp-3">{{ $product['description'] }}</p>
                        
                        <p class="text-lg font-bold text-green-600 mt-4">
                            Rp {{ number_format($product['price'], 0, ',', '.') }}
                        </p>

                        <!-- Tombol -->
                        <div class="mt-6 flex justify-between">
                            <a href="#" 
                            class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                                Detail
                            </a>
                            <a href="#" 
                            class="px-4 py-2 bg-yellow-400 text-gray-900 text-sm font-semibold rounded-lg shadow hover:bg-yellow-300 transition">
                                Buy
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 col-span-3">Produk tidak ditemukan.</p>
            @endforelse
        </div>
    </div>
    <a href="/product/create" class=" bg-green-500 py-1 px-2 inline-block rounded-2xl w-16 fixed bottom-6 right-5"><img src="/plus.svg" alt=""></a>
</x-layout>
