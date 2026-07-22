<nav x-data="{ open: false }" class="bg-white border-b border-slate-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Brand & Navigation Links -->
            <div class="flex items-center space-x-10">
                <a class="text-xl font-black text-primary tracking-tight" href="{{ route('accueil') }}">
                    EduMaster
                </a>
                <nav class="flex space-x-6 text-sm font-bold">
                    <a href="{{ route('dashboard') }}" class="text-[#002266] border-b-2 border-[#002266] pb-5 pt-5">
                        Tableau de bord
                    </a>
                </nav>
            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center space-x-3 border-l pl-4 border-slate-200 focus:outline-none group cursor-pointer transition ease-in-out duration-150">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-black text-slate-900 leading-none">{{ Auth::user()->name }}</p>
                                <p class="text-[10px] text-slate-400 font-medium mt-1">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-primary text-white font-black text-xs flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
                                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="p-1.5 space-y-1">

                            <x-dropdown-link
                                :href="route('profile.edit')"
                                class="flex items-center space-x-2.5 px-3 py-2 rounded-xl text-xs font-extrabold text-slate-700 hover:text-[#110B29] hover:bg-slate-50 transition-all duration-150"
                            >
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-[#110B29] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <span>Mon Profil</span>
                            </x-dropdown-link>

                            <div class="h-px bg-slate-100 my-1"></div>

                            <!-- Logout Form -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="flex items-center space-x-2.5 px-3 py-2 rounded-xl text-xs font-extrabold bg-rose-50/60 text-rose-600 hover:text-rose-700 hover:bg-rose-100/70 transition-all duration-150"
                                >
                                    <svg class="w-4 h-4 text-rose-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    <span>Se Déconnecter</span>
                                </x-dropdown-link>
                            </form>

                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-xl text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-slate-100 bg-white">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Tableau de bord
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-slate-100">
            <div class="px-4 mb-3">
                <div class="font-black text-sm text-slate-900">{{ Auth::user()->name }}</div>
                <div class="font-medium text-xs text-slate-400">{{ Auth::user()->email }}</div>
            </div>

            <div class="space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    Mon Profil
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                           class="text-rose-600 hover:text-rose-700">
                        Se Déconnecter
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
