<nav class="sticky top-0 z-50 flex items-center justify-between px-44 py-4 bg-white border-b border-gray-100 shadow shadow-accent/8 ">
    <div class="flex items-center space-x-12">
      <a href="/" class="text-2xl font-bold text-primary">EduMaster</a>

      <div class="relative py-2 flex flex-row items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tv-minimal-play-icon lucide-tv-minimal-play"><path d="M15.033 9.44a.647.647 0 0 1 0 1.12l-4.065 2.352a.645.645 0 0 1-.968-.56V7.648a.645.645 0 0 1 .967-.56z"/><path d="M7 21h10"/><rect width="20" height="14" x="2" y="3" rx="2"/></svg>
          <path d="M3 5h.01"/><path d="M3 12h.01"/><path d="M3 19h.01"/><path d="M8 5h13"/><path d="M8 12h13"/><path d="M8 19h13"/></svg>
        <a href="{{ route('courses.index') }}" class="text-lg font-semibold text-primary">Catalogue</a>
        {{-- <span class="absolute bottom-0 left-0 w-full h-0.75 bg-primary rounded-full"></span> --}}
      </div>

    <div class="relative py-2 flex flex-row items-center gap-1">
        <a href="#" class="text-lg font-semibold text-primary">Tutoriels</a>
        {{-- <span class="absolute bottom-0 left-0 w-full h-0.75 bg-primary rounded-full"></span> --}}
      </div>
    </div>

    <div class="flex items-center space-x-6">
      <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </span>
        <input
          type="text"
          placeholder="Rechercher un cours..."
          class="w-64 py-2 pl-10 pr-4 text-sm bg-gray-100 border border-transparent rounded-full focus:outline-none focus:bg-white focus:border-gray-300 transition-colors"
        />
      </div>

      <button class="text-gray-600 hover:text-primary transition-colors focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
      </button>

      <a class="text-gray-600 hover:text-primary transition-colors focus:outline-none border border-primary" href="{{ route("register") }}">
        S'inscrire
      </a>
      <a class="text-gray-600 hover:text-primary transition-colors focus:outline-none border border-primary" href="{{ route("dashboard") }}">
        Se connecter
      </a>
    </div>
  </nav>
