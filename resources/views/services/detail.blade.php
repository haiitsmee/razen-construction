@extends('layouts.app')

@section('content')
<section class="py-24 md:py-32 bg-stone-50 overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-sm text-stone-500 mb-12 px-1">
            <a href="{{ route('home') }}" class="hover:text-stone-800 transition-colors">Beranda</a>
            <span class="text-stone-300">/</span>
            <a href="{{ route('home') }}#layanan" class="hover:text-stone-800 transition-colors">Layanan</a>
            <span class="text-stone-300">/</span>
            <span class="text-stone-800 font-semibold truncate">{{ $service->title }}</span>
        </nav>
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div class="sticky top-28">
                <div class="bg-white p-4 rounded-[32px] shadow-2xl shadow-stone-100 border border-stone-100">
                    <div class="relative rounded-[24px] overflow-hidden group">
                        <img src="{{ $service->image }}" 
                            alt="{{ $service->title }}" 
                            class="w-full h-[350px] sm:h-[450px] lg:h-[550px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 p-10 text-white">
                            <span class="inline-block text-xs font-semibold tracking-widest uppercase mb-3 text-stone-300">
                                {{ $service->category_label }}
                            </span>
                            <h2 class="text-3xl   leading-tight">
                                {{ $service->short_description }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-12">
                <div class="space-y-4">
                    <h1 class="text-5xl   text-stone-800 leading-tight">
                        {{ $service->title }}
                    </h1>
                    <p class="text-lg text-stone-600 leading-relaxed">
                        {{ $service->long_description }}
                    </p>
                </div>

                <div class="prose prose-stone">
                    <h3 class="text-2xl font-semibold text-stone-800">Kenapa Memilih Kami?</h3>
                    <ul class="list-disc ps-5 space-y-3">
                        @foreach($service->features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>

                    @if($service->testimonial_text)
                    <p class="mt-2 italic text-stone-600 bg-stone-100 p-6 rounded-2xl border-s-4 border-stone-400">
                        "{{ $service->testimonial_text }}" <br>
                        <span class="font-semibold text-stone-800 non-italic mt-2 block">— {{ $service->testimonial_author }}</span>
                    </p>
                    @endif
                </div>

                <div class="pt-10 border-t border-stone-200">
                    <a href="https://wa.me/6282299449494?text=Halo%20Razen,%20saya%20tertarik%20dengan%20{{ $service->title }}" 
                       class="inline-flex items-center justify-center px-10 py-4 bg-stone-800 text-white rounded-full font-medium hover:bg-stone-700 transition-all w-full md:w-auto">
                        Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection