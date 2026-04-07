<header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
  <nav class="relative max-w-2xl w-full bg-white/80 backdrop-blur-md border border-stone-200 rounded-[24px] mx-2 flex flex-wrap md:flex-nowrap items-center justify-between p-2 ps-4 md:py-0 sm:mx-auto shadow-sm overflow-hidden">
    
    <div class="flex items-center">
      <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="{{ route('home') }}" aria-label="Razen">
        <svg class="h-6 md:h-8 w-auto" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="0" y="20" width="12" height="40" rx="1" fill="#44403c"/>
          <rect x="20" y="0" width="12" height="60" rx="1" fill="#44403c"/>
          <rect x="40" y="10" width="12" height="50" rx="1" fill="#44403c"/>
        </svg>
      </a>
    </div>

    <div class="flex items-center gap-2 md:order-4">
      <a class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full bg-stone-800 text-white hover:bg-stone-700 transition-all focus:outline-none" 
         href="https://wa.me/6282299449494" target="_blank">
        Hubungi Kami
      </a>

      <div class="md:hidden">
        <button type="button" class="hs-collapse-toggle flex justify-center items-center size-9 bg-white border border-stone-200 text-stone-500 rounded-full hover:bg-stone-50 focus:outline-none" 
                data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>

    <div id="navbar-collapse" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2">
      <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-6 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
        <a class="py-3 md:py-4 px-1 text-stone-500 hover:text-stone-800 transition-all font-medium" href="{{ route('home') }}#home">Beranda</a>
        <a class="py-3 md:py-4 px-1 text-stone-500 hover:text-stone-800 transition-all font-medium" href="{{ route('home') }}#layanan">Layanan</a>
        <a class="py-3 md:py-4 px-1 text-stone-500 hover:text-stone-800 transition-all font-medium" href="{{ route('home') }}#proyek">Hasil Kerja</a>
        <a class="py-3 md:py-4 px-1 text-stone-500 hover:text-stone-800 transition-all font-medium" href="{{ route('home') }}#testimoni">Kata Pelanggan</a>
      </div>
    </div>
  </nav>
</header>