@extends('layouts.app')

@section('content')
<section class="bg-white min-h-screen">
    <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-1 before:transform before:-translate-x-1/2">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            
            <nav data-aos="fade-down" class="flex items-center justify-center space-x-2 text-sm text-stone-500 mb-8">
                <a href="{{ route('home') }}" class="hover:text-stone-800 transition-colors">Beranda</a>
                <svg class="shrink-0 size-4 text-stone-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                <span class="text-stone-800 font-semibold">Portofolio</span>
            </nav>

            <div class="max-w-3xl text-center mx-auto" data-aos="fade-up" data-aos-delay="100">
                <h1 class="block font-bold text-stone-800 text-4xl md:text-5xl lg:text-6xl leading-tight">
                    Eksplorasi <span style="color: var(--color-cashmere);">Karya Kami</span>
                </h1>
                <p class="mt-4 text-lg text-stone-600">
                    Dari hunian minimalis hingga ruang komersial modern, temukan inspirasi dari berbagai proyek yang telah kami selesaikan dengan presisi di Yogyakarta.
                </p>
            </div>
        </div>
    </div>

    <div id="proyek" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-12 gap-6">
            @forelse($portfolios as $index => $project)
                @php
                    // Logic Masonry: Card pertama dan kedua dibuat lebih menonjol
                    $colSpan = 'col-span-12 md:col-span-4';
                    $imgHeight = 'h-[300px] md:h-[400px]';

                    if ($index == 0) {
                        $colSpan = 'col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-3 sm:self-end';
                        $imgHeight = 'h-[350px] md:h-[500px]';
                    } elseif ($index == 1) {
                        $colSpan = 'col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3 sm:self-end';
                        $imgHeight = 'h-[350px] md:h-[450px]';
                    }
                @endphp

                <div class="{{ $colSpan }}" 
                     data-aos="fade-up" 
                     data-aos-delay="{{ ($index % 3) * 150 }}">
                    
                    <a class="group relative block rounded-[2.5rem] overflow-hidden focus:outline-none shadow-sm hover:shadow-2xl transition-all duration-500" 
                       href="{{ route('portfolio.detail', $project->slug) }}">
                        
                        <div class="relative {{ $imgHeight }} overflow-hidden">
                            <img class="group-hover:scale-110 transition-transform duration-700 ease-in-out w-full h-full object-cover" 
                                 src="{{ $project->image }}" 
                                 alt="{{ $project->title }}">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500"></div>
                        </div>
                        
                        <div class="absolute bottom-0 start-0 end-0 p-4 sm:p-6">
                            <div class="bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-[2rem] p-5 shadow-xl transition-all duration-300 group-hover:bg-white group-hover:text-stone-800">
                                <div class="flex justify-between items-start mb-2">
                                    <span class="block text-[10px] font-bold uppercase tracking-[0.2em] {{ 'group-hover:text-stone-500 text-white/80' }}">
                                        {{ $project->category }}
                                    </span>
                                    <span class="text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300 uppercase">
                                        Detail Proyek →
                                    </span>
                                </div>
                                
                                <h3 class="text-lg font-bold md:text-xl truncate leading-tight">
                                    {{ $project->title }}
                                </h3>
                                
                                <div class="mt-3 flex items-center gap-2 text-xs {{ 'group-hover:text-stone-500 text-white/70' }}">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    {{ $project->location }} • {{ $project->year }}
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

            @empty
                <div class="col-span-12 py-20 text-center">
                    <p class="text-stone-400 italic">Belum ada portofolio yang dipublikasikan.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-20 text-center" data-aos="zoom-in">
            <div class="inline-block bg-stone-50 border border-stone-100 p-8 rounded-[3rem]">
                <h3 class="text-xl font-bold text-stone-800 mb-2">Ingin Membangun Sesuatu yang Luar Biasa?</h3>
                <p class="text-stone-600 mb-6">Konsultasikan kebutuhan konstruksi Anda bersama tim ahli kami.</p>
                <a href="https://wa.me/6282299449494" target="_blank"
                   style="background-color: var(--color-cashmere);" 
                   class="inline-flex items-center gap-x-3 text-stone-900 font-bold py-3 px-8 rounded-full hover:brightness-95 transition-all shadow-lg shadow-stone-200">
                    Mulai Konsultasi Gratis
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection