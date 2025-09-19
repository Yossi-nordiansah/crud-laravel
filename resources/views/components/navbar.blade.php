<nav class="flex justify-between px-5 bg-blue-900 items-center">
    <h1 class="text-5xl font-bold text-yellow-400">MyStore</h1>
    <ul class="flex text-white font-bold text-xl items-center">
        <li><a href="/" class="py-6 px-4 {{ request()->is('/') ? 'bg-amber-400' : ''}} hover:text-green-500 block">Home</a></li>
        <li><a href="/product"  class="px-4 hover:text-green-500 {{ request()->is('product') ? 'bg-amber-400' : ''}} py-6 block">Product<a></li>
        <li><a href="/contact" class="px-4 hover:text-green-500 {{ request()->is('contact') ? 'bg-amber-400' : ''}} py-6 block">Contact</a></li>
    </ul>
</nav>