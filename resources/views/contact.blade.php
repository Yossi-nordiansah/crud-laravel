<x-layout>
<div class="max-w-7xl mx-auto px-6 py-16">
    <!-- Judul -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
        <p class="text-lg text-gray-600">
            Have any questions? We'd love to hear from you. Fill out the form below or reach us directly.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12">
        <!-- Form -->
        <div class="bg-white p-8 rounded-xl shadow">
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" id="name" name="name" 
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Info Kontak -->
        <div class="flex flex-col justify-center bg-gray-50 p-8 rounded-xl shadow space-y-6">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Our Office</h2>
                <p class="text-gray-600">Jl. Merdeka No. 123, Yogyakarta, Indonesia</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Email</h2>
                <p class="text-gray-600">support@mystore.com</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Phone</h2>
                <p class="text-gray-600">+62 812 3456 7890</p>
            </div>
        </div>
    </div>
</div>
</x-layout>