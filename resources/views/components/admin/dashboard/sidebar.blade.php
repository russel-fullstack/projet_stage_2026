<aside class="w-64 bg-[#F8FAFC] border-r border-gray-200 hidden md:flex flex-col justify-between p-4">
    <div class="space-y-6">
        <div class="px-3 text-[10px] font-extrabold text-accent uppercase tracking-wider">Navigation</div>

        <nav class="space-y-1">
            <!-- Vue d'ensemble -->
            <a href="{{ route('dashboard') }}"
               class="flex items-center space-x-3 px-4 py-3 text-xs font-bold rounded-xl transition-all {{ request()->routeIs('dashboard') ? 'bg-emerald-400 text-primary shadow-sm shadow-emerald-400/30' : 'text-slate hover:bg-gray-100 hover:text-gray-900' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25M19.5 4.5l-15 0"></path>
                </svg>
                <span>Vue d'ensemble</span>
            </a>

            <!-- Utilisateurs -->
            <a href="{{ route('users.index') }}"
               class="flex items-center space-x-3 px-4 py-3 text-xs font-bold rounded-xl transition-all {{ request()->routeIs('users.*') ? 'bg-emerald-400 text-primary shadow-sm shadow-emerald-400/30' : 'text-slate hover:bg-gray-100 hover:text-gray-900' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                </svg>
                <span>Utilisateurs</span>
            </a>

            <!-- Gestion des cours -->
            <a href="{{ route('admin-chapiters.index') }}"
               class="flex items-center space-x-3 px-4 py-3 text-xs font-bold rounded-xl transition-all {{ request()->routeIs('admin-chapiters.*') ? 'bg-emerald-400 text-primary shadow-sm shadow-emerald-400/30' : 'text-slate hover:bg-gray-100 hover:text-gray-900' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                </svg>
                <span>Gestion des cours</span>
            </a>

            <!-- Rapports -->
            <a href="{{ route('rapports.index') }}"
               class="flex items-center space-x-3 px-4 py-3 text-xs font-bold rounded-xl transition-all {{ request()->routeIs('rapports.*') ? 'bg-emerald-400 text-primary shadow-sm shadow-emerald-400/30' : 'text-slate hover:bg-gray-100 hover:text-gray-900' }}">
                {{-- Icône de graphique/rapports corrigée --}}
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                </svg>
                <span>Rapports</span>
            </a>
        </nav>
    </div>

    <!-- Statut Système -->
    <div class="bg-[#002266] rounded-2xl p-4 text-white space-y-2 shadow-inner">
        <p class="text-xs font-extrabold tracking-wide">Statut Système</p>
        <div class="flex items-center space-x-2">
            <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
            <span class="text-[10px] text-slate-300 font-medium">Tous les services opérationnels</span>
        </div>
    </div>
</aside>
