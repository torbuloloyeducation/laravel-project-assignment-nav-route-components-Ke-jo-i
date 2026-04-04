@extends('components.layout')
@section('content')
    <section class="py-20 px-8 max-w-7xl mx-auto" x-data="{ deliveryMode: '' }">
        <div class="text-center mb-24 font-serif italic text-7xl text-[#D4A373]">Our Menu</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-32">
            @php
                $items = [
                    ['name' => 'Graham Mango', 'img' => 'graham.jpg', 's' => '120', 'm' => '230', 'l' => '350'],
                    ['name' => 'Strawberry Bliss', 'img' => 'Strawberry.jpg', 's' => '130', 'm' => '250', 'l' => '380'],
                    ['name' => 'Dark Chocolate', 'img' => 'chocolate.jpg', 's' => '140', 'm' => '270', 'l' => '400']
                ];
            @endphp
            @foreach($items as $f)
                <div class="bg-[#2D2016]/40 border border-[#D4A373]/20 group">
                    <div class="h-80 overflow-hidden text-center"><img src="{{ asset($f['img']) }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-1000"></div>
                    <div class="p-10 text-center">
                        <h3 class="text-4xl font-serif text-[#D4A373] mb-8 italic">{{ $f['name'] }}</h3>
                        <div class="space-y-4 text-[12px] tracking-[0.3em] uppercase">
                            <div class="flex justify-between border-b border-white/10 pb-2"><span>Small</span>
                                <span>₱{{ $f['s'] }}</span></div>
                            <div class="flex justify-between border-b border-white/10 pb-2"><span>Medium</span>
                                <span>₱{{ $f['m'] }}</span></div>
                            <div class="flex justify-between border-b border-white/10 pb-2"><span>Large</span>
                                <span>₱{{ $f['l'] }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="max-w-5xl mx-auto border-2 border-[#D4A373]/40 p-16 bg-[#2D2016]/40">
            <h3 class="text-center font-serif italic text-[#D4A373] text-5xl mb-16 tracking-widest">Fulfillment Service</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <button @click="deliveryMode = 'pickup'"
                    :class="deliveryMode === 'pickup' ? 'border-[#D4A373] bg-[#3D2B1F]' : 'border-white/10 bg-[#1A120B]'"
                    class="p-12 border-2 transition">
                    <p class="font-serif italic text-4xl text-white">Store Pick-up</p>
                    <p class="text-[10px] uppercase opacity-40 mt-4 tracking-widest">Free Service</p>
                </button>
                <button @click="deliveryMode = 'delivery'"
                    :class="deliveryMode === 'delivery' ? 'border-[#D4A373] bg-[#3D2B1F]' : 'border-white/10 bg-[#1A120B]'"
                    class="p-12 border-2 transition">
                    <p class="font-serif italic text-4xl text-white">Express Shipping</p>
                    <p class="text-[10px] uppercase opacity-40 mt-4 tracking-widest">₱45 — ₱85 Fee</p>
                </button>
            </div>
            <div x-show="deliveryMode === 'pickup'" x-transition
                class="pt-10 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-8">
                <h5 class="text-4xl font-serif italic text-[#D4A373]">Set Time:</h5>
                <input type="time" class="bg-transparent border-2 border-[#D4A373] p-5 text-3xl font-serif text-white">
                <a href="/contact" class="bg-[#D4A373] text-[#1A120B] px-16 py-6 font-black uppercase text-xs">Confirm</a>
            </div>
            <div x-show="deliveryMode === 'delivery'" x-transition class="pt-10 border-t border-white/10 text-center">
                <a href="/contact" class="bg-[#D4A373] text-[#1A120B] px-16 py-6 font-black uppercase text-xs">Book
                    Shipping</a>
            </div>
        </div>
    </section>
@endsection