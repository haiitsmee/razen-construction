<div id="layanan" class="max-w-[85rem] px-4 py-12 lg:px-8 lg:py-16 mx-auto">
  <div class="max-w-2xl mb-10 lg:mb-14">
    <h2 class="text-3xl font-bold text-stone-800 md:text-4xl md:leading-tight">Layanan Kami</h2>
    <p class="mt-1 text-stone-600">Solusi menyeluruh untuk kebutuhan properti Anda di Yogyakarta.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12">
    @foreach($services as $service)
    <a class="group flex flex-col h-full focus:outline-none" href="{{ route('services.detail', $service->slug) }}">
      <div class="aspect-video overflow-hidden bg-stone-100 rounded-2xl">
        {{-- Langsung memanggil URL dari database --}}
        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover w-full h-full rounded-2xl" 
             src="{{ $service->image }}" 
             alt="{{ $service->title }}">
      </div>

      <div class="pt-4 flex flex-col flex-grow">
        <h3 class="relative inline-block self-start font-bold text-xl text-stone-800 before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-stone-300 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100  ">
          {{ $service->title }}
        </h3>
        <p class="mt-2 text-stone-600 flex-grow text-sm leading-relaxed">
          {{ $service->short_description }}
        </p>

        <div class="mt-4 flex flex-wrap gap-2">
          @foreach(array_slice($service->features, 0, 2) as $feature)
          <span class="py-1 px-3 bg-white border border-stone-200 text-stone-600 text-xs rounded-full font-medium">
            {{ $feature }}
          </span>
          @endforeach
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>