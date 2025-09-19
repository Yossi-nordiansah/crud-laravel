<x-layout>
     <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-6 py-24 flex flex-col md:flex-row items-center">
            <!-- Teks Hero -->
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                    Welcome to <span class="text-yellow-300">MyStore</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-100">
                    Belanja mudah, cepat, dan terpercaya dengan produk berkualitas.
                </p>
                <div class="flex justify-center md:justify-start gap-4">
                    <a href="#"
                    {{-- href="{{ route('products.index') }}"  --}}
                       class="px-6 py-3 bg-yellow-400 text-gray-900 font-semibold rounded-lg shadow hover:bg-yellow-300 transition">
                       Browse Products
                    </a>
                    <a href="#" 
                       class="px-6 py-3 bg-white text-gray-900 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
                       Explore Categories
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="flex-1 mt-10 md:mt-0">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" 
                     alt="Hero Image" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </div>

    <!-- Keunggulan Section -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
            Kenapa memilih <span class="text-blue-600">MyStore?</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Keunggulan 1 -->
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 012 2v6H5v-6a2 2 0 012-2m10-4V6a2 2 0 00-2-2H9a2 2 0 00-2 2v2h10z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Produk Berkualitas</h3>
                <p class="text-gray-600">Semua produk terjamin kualitasnya dengan harga terbaik.</p>
            </div>

            <!-- Keunggulan 2 -->
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h10a4 4 0 004-4M7 10a4 4 0 018 0m0 0a4 4 0 018 0m-8-4a4 4 0 018 0" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Pengiriman Cepat</h3>
                <p class="text-gray-600">Pesanan dikirim dengan aman dan tepat waktu ke alamat Anda.</p>
            </div>

            <!-- Keunggulan 3 -->
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.305.51 6.121 1.804M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Customer Support</h3>
                <p class="text-gray-600">Layanan pelanggan siap membantu 24/7 untuk semua kebutuhan Anda.</p>
            </div>
        </div>
    </div>
</x-layout>