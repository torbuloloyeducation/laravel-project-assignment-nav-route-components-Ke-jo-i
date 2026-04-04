@extends('components.layout')
@section('content')
    <section class="py-24 px-8 flex justify-center">
        <div class="w-full max-w-3xl bg-[#2D2016] border-2 border-[#D4A373]/40 p-20 shadow-2xl">
            <h2 class="text-7xl font-serif italic text-[#D4A373] text-center mb-12">Secure Order</h2>
            <form class="space-y-12">
                <div>
                    <label class="block text-[12px] uppercase tracking-[0.4em] mb-4 text-[#D4A373] font-bold">Full
                        Name</label>
                    <input type="text" placeholder="Enter Name"
                        class="w-full bg-transparent border-b-2 border-[#D4A373]/30 p-4 outline-none text-3xl font-serif text-white">
                </div>
                <div>
                    <label
                        class="block text-[12px] uppercase tracking-[0.4em] mb-4 text-[#D4A373] font-bold">Details</label>
                    <textarea rows="4" placeholder="Flavor & Size"
                        class="w-full bg-transparent border-b-2 border-[#D4A373]/30 p-4 outline-none text-3xl font-serif text-white resize-none"></textarea>
                </div>
                <button
                    class="w-full bg-[#D4A373] text-[#1A120B] py-8 text-sm font-black uppercase tracking-[0.4em] hover:bg-white transition duration-500">Submit
                    Order</button>
            </form>
        </div>
    </section>
@endsection