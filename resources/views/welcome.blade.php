@extends('components.layout')
@section('content')
    <section class="py-20 px-8 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <h1 class="text-8xl md:text-[10rem] font-serif italic text-[#D4A373] leading-none">Sweet <br> Cravings.</h1>
            <p class="max-w-md text-lg font-light opacity-70 leading-relaxed italic border-l-2 border-[#D4A373] pl-8">
                "Savor the handcrafted softness of our premium munchkins. Every bite is a fusion of high-quality ingredients
                and artisan passion."
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[700px]">
            <div class="md:col-span-8 relative group overflow-hidden border border-[#D4A373]/30">
                <img src="{{ asset('graham.jpg') }}"
                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-1000">
                <div class="absolute inset-0 bg-black/40 p-12 flex flex-col justify-end">
                    <h3 class="text-5xl font-serif text-white italic">The Classic Graham</h3>
                </div>
            </div>
            <div class="md:col-span-4 grid grid-rows-2 gap-6">
                <div class="relative overflow-hidden border border-[#D4A373]/30">
                    <img src="{{ asset('Strawberry.jpg') }}"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-700">
                </div>
                <div
                    class="bg-[#3D2B1F] p-12 flex flex-col justify-center items-center text-center border border-[#D4A373]/20">
                    <h4 class="text-3xl font-serif text-[#D4A373] italic mb-6">Hand-Rolled Daily</h4>
                    <a href="/services"
                        class="px-12 py-5 bg-[#D4A373] text-[#1A120B] text-xs font-black uppercase tracking-[0.3em] hover:bg-white transition duration-500">View
                        Our Menu</a>
                </div>
            </div>
        </div>
    </section>
@endsection