<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munchkin Bites | Premium Artisan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <style>
        h1,
        h2,
        h3,
        h4,
        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#1A120B] text-[#F5EBE0] antialiased">
    <header
        class="sticky top-0 z-50 bg-[#2D2016]/95 backdrop-blur-md border-b border-[#D4A373]/20 px-8 py-5 flex justify-between items-center shadow-2xl">
        <div class="flex items-center gap-4">
            <div
                class="border-2 border-[#D4A373] px-3 py-1 text-[#D4A373] font-bold text-xl uppercase tracking-tighter">
                MB</div>
            <span
                class="text-3xl font-bold tracking-[0.2em] text-[#D4A373] hidden lg:block uppercase font-serif">Munchkin
                Bites</span>
        </div>
        <nav class="bg-[#3D2B1F] border border-[#D4A373]/30 px-10 py-2 rounded-full">
            <ul class="flex gap-10 text-[12px] uppercase tracking-[0.2em] font-bold">
                <li><a href="/" class="hover:text-[#D4A373] transition">Home</a></li>
                <li><a href="/services" class="hover:text-[#D4A373] transition">Services</a></li>
                <li><a href="/showcases" class="hover:text-[#D4A373] transition">Showcase</a></li>
                <li><a href="/blog" class="hover:text-[#D4A373] transition">Blog</a></li>
                <li><a href="/about" class="hover:text-[#D4A373] transition">About</a></li>
                <li><a href="/contact" class="hover:text-[#D4A373] transition">Contact</a></li>
            </ul>
        </nav>
        <div class="flex gap-6 items-center opacity-60 hover:opacity-100 transition">
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_\" G\"_Logo.svg"
                    class="w-5 h-5"></a>
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg"
                    class="w-5 h-5"></a>
        </div>
    </header>
    <main>@yield('content')</main>
    <footer class="py-16 border-t border-[#D4A373]/10 text-center">
        <p class="text-[11px] uppercase tracking-[0.5em] text-[#D4A373]/40 font-bold">© 2026 Munchkin Bites Artisan
            Bakery • Tagum City</p>
    </footer>
</body>

</html>