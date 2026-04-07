@extends('layouts.app')

@section('content')
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        
        <nav class="flex items-center space-x-2 text-sm text-stone-500 mb-12 px-1">
            <a href="{{ route('home') }}" class="hover:text-stone-800 transition-colors">Beranda</a>
            <span class="text-stone-300">/</span>
            <a href="{{ route('home') }}#proyek" class="hover:text-stone-800 transition-colors">Portofolio</a>
            <span class="text-stone-300">/</span>
            <span class="text-stone-800 font-semibold truncate">{{ $project->title }}</span>
        </nav>

        <div class="grid lg:grid-cols-3 gap-12 lg:gap-16 items-start">
            
            <div class="lg:sticky lg:top-28 space-y-10 order-2 lg:order-1">
                <div>
                    <span style="color: var(--color-cashmere);" class="inline-block text-xs font-bold uppercase tracking-widest mb-2">
                        {{ $project->category }}
                    </span>
                    <h1 class="text-4xl font-bold text-stone-800 leading-tight mb-4">
                        {{ $project->title }}
                    </h1>
                    <p class="text-stone-600 leading-relaxed text-lg">
                        {{ $project->description }}
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-x-8 gap-y-6 pt-8 border-t border-stone-100">
                    <div>
                        <p class="text-xs text-stone-400 uppercase font-bold tracking-tighter mb-1">Lokasi</p>
                        <p class="text-stone-800 font-medium">{{ $project->location }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-stone-400 uppercase font-bold tracking-tighter mb-1">Tahun Selesai</p>
                        <p class="text-stone-800 font-medium">{{ $project->year }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-stone-400 uppercase font-bold tracking-tighter mb-1">Klien</p>
                        <p class="text-stone-800 font-medium">{{ $project->client_name ?? 'Privat' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-stone-400 uppercase font-bold tracking-tighter mb-1">Status</p>
                        <p class="text-stone-800 font-medium italic">Selesai Terverifikasi</p>
                    </div>
                </div>

                <div class="bg-stone-50 p-6 rounded-2xl border border-stone-100 shadow-sm">
                    <h4 class="font-bold text-stone-800 mb-4 flex items-center gap-2">
                        <svg class="size-5 text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Spesifikasi Utama:
                    </h4>
                    <ul class="space-y-3 text-sm text-stone-600">
                        @foreach($project->specifications as $spec)
                            <li class="flex items-start gap-3">
                                <span style="background-color: var(--color-cashmere);" class="mt-1.5 w-1.5 h-1.5 rounded-full shrink-0"></span>
                                <span>{{ $spec }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/yournumber?text=Halo Razen, saya tertarik dengan proyek {{ $project->title }}" 
                       class="w-full inline-flex justify-center items-center gap-x-3 text-center bg-stone-800 hover:bg-stone-900 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg">
                        Tanya Proyek Serupa
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 order-1 lg:order-2">
                @if($project->gallery && count($project->gallery) > 0)
                <div data-hs-carousel='{
                        "loadingClasses": "opacity-0",
                        "isAutoPlay": true,
                        "autoPlayInterval": 5000,
                        "isPauseOnHover": true
                    }' class="relative">
                    
                    <div class="hs-carousel relative overflow-hidden w-full h-[400px] sm:h-[500px] lg:h-[650px] bg-stone-100 rounded-[2.5rem] shadow-2xl">
                        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            
                            @foreach($project->gallery as $image)
                            <div class="hs-carousel-slide">
                                <div class="flex h-full overflow-hidden">
                                    <img src="{{ $image }}" 
                                         alt="{{ $project->title }} Gallery" 
                                         class="w-full h-full object-cover">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[60px] h-full text-white/60 hover:text-white hover:bg-black/5 transition-all rounded-s-[2.5rem] z-10 focus:outline-none">
                        <svg class="size-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    
                    <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[60px] h-full text-white/60 hover:text-white hover:bg-black/5 transition-all rounded-e-[2.5rem] z-10 focus:outline-none">
                        <svg class="size-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>

                    <div class="hs-carousel-pagination flex justify-center absolute bottom-6 start-0 end-0 space-x-3">
                        @foreach($project->gallery as $index => $image)
                            <span class="hs-carousel-active:bg-white hs-carousel-active:border-white size-3 border-2 border-white/50 rounded-full cursor-pointer transition-all"></span>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="w-full h-[650px] rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                </div>
                @endif

                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="p-4 bg-stone-50 rounded-2xl border border-stone-100">
                        <span class="block text-stone-400 text-xs font-bold uppercase mb-1">Kualitas Material</span>
                        <p class="text-stone-800 text-sm font-medium">Standar SNI & Premium</p>
                    </div>
                    <div class="p-4 bg-stone-50 rounded-2xl border border-stone-100">
                        <span class="block text-stone-400 text-xs font-bold uppercase mb-1">Pengerjaan</span>
                        <p class="text-stone-800 text-sm font-medium">Tim Ahli Razen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection