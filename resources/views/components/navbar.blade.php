<nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-orange-100 shadow-sm">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-orange-600">🍩 MUNCHKIN<span class="text-pink-500">.</span></a>

        <div class="hidden md:flex space-x-8 font-bold text-slate-600">
            <a href="/"
                class="hover:text-orange-500 {{ Request::is('/') ? 'text-orange-600 border-b-2 border-orange-600' : '' }}">Home</a>
            <a href="/showcases"
                class="hover:text-orange-500 {{ Request::is('showcases') ? 'text-orange-600 border-b-2 border-orange-600' : '' }}">Showcases</a>
            <a href="/services"
                class="hover:text-orange-500 {{ Request::is('services') ? 'text-orange-600 border-b-2 border-orange-600' : '' }}">Services</a>
            <a href="/blog"
                class="hover:text-orange-500 {{ Request::is('blog') ? 'text-orange-600 border-b-2 border-orange-600' : '' }}">Blog</a>
            <a href="/about"
                class="hover:text-orange-500 {{ Request::is('about') ? 'text-orange-600 border-b-2 border-orange-600' : '' }}">About</a>
        </div>

        <button
            class="bg-orange-600 text-white px-6 py-2 rounded-full font-bold shadow-md hover:bg-orange-700 transition">
            Order Now
        </button>
    </div>
</nav>