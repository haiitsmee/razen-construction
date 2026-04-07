<div id="proyek" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  {{-- Header Section --}}
  <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-stone-800">Garapan Terbaru Kami</h2>
    <p class="mt-1 text-stone-600">Dedikasi Razen Construction dalam menghadirkan hunian kokoh dan estetis di Yogyakarta.</p>
  </div>

  {{-- Grid Proyek --}}
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">
    @foreach($portfolios as $project)
    <a class="group flex flex-col h-full bg-white border border-stone-200 shadow-sm rounded-xl hover:shadow-md focus:outline-none transition" 
       href="{{ route('portfolio.detail', $project->slug) }}">
      
      {{-- Gambar Proyek --}}
      <div class="aspect-video overflow-hidden rounded-t-xl">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out" 
             src="{{ $project->image }}" 
             alt="{{ $project->title }}">
      </div>

      {{-- Konten Teks --}}
      <div class="p-4 md:p-5 flex flex-col flex-grow">
        <p class="text-xs uppercase font-bold text-stone-400">
          {{ $project->category }}
        </p>
        <h3 class="mt-2 text-lg font-semibold text-stone-800 group-hover:text-stone-600">
          {{ $project->title }}
        </h3>
        <p class="mt-2 text-sm text-stone-500 line-clamp-2">
          {{ $project->description }}
        </p>
      </div>
    </a>
    @endforeach
  </div>

  {{-- Footer CTA --}}
  <div class="text-center">
    <div class="inline-block bg-white border border-stone-200 shadow-sm rounded-full">
      <div class="py-3 px-4 flex items-center gap-x-2">
        <p class="text-stone-600">
          Ingin melihat lebih banyak karya kami?
        </p>
        <a class="inline-flex items-center gap-x-1.5 text-stone-800 decoration-2 hover:underline focus:outline-none font-bold" href="{{ route('portfolio.index') }}">
          Lihat Portofolio Lengkap
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>