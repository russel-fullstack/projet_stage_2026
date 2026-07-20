<aside class="w-64 bg-[#F8FAFC] p-6 space-y-8 shrink-0 border-r border-gray-100 hidden lg:block">
    <!-- Widget Progression globale du cours -->
    <div class="space-y-2">
        <div class="text-[10px] font-black text-primary uppercase tracking-wider">
            Progression du cours
        </div>
        <div class="text-xs font-semibold text-gray-400">75% complété</div>
        <div class="w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-full bg-emerald-500 w-[75%] rounded-full"></div>
        </div>
    </div>

    <!-- Navigation principale -->
    <nav class="space-y-1.5">
        {{-- Tableau de bord --}}
        <a href="{{ route('user-dashboard') }}"
           class="flex items-center space-x-3 px-4 py-3 text-xs rounded-xl transition-colors {{ request()->routeIs('user-dashboard') ? 'bg-[#00F0C0] text-primary font-extrabold shadow-sm' : 'text-gray-500 hover:text-gray-900 font-bold' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="{{ request()->routeIs('user-dashboard') ? '2.5' : '2' }}" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
            </svg>
            <span>Tableau de bord</span>
        </a>

        {{-- Chapitres --}}
        <a href="{{ route('chapiter') }}"
           class="flex items-center space-x-3 px-4 py-3 text-xs rounded-xl transition-colors {{ request()->routeIs('chapiter') ? 'bg-[#00F0C0] text-primary font-extrabold shadow-sm' : 'text-gray-500 hover:text-gray-900 font-bold' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="{{ request()->routeIs('chapiter') ? '2.5' : '2' }}" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
            </svg>
            <span>Chapitres</span>
        </a>

        {{-- Certificats --}}
        <a href="{{ route('certified') }}"
           class="flex items-center space-x-3 px-4 py-3 text-xs rounded-xl transition-colors {{ request()->routeIs('certified') ? 'bg-[#00F0C0] text-primary font-extrabold shadow-sm' : 'text-gray-500 hover:text-gray-900 font-bold' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="{{ request()->routeIs('certified') ? '2.5' : '2' }}" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>Certificats</span>
        </a>
    </nav>
</aside>
