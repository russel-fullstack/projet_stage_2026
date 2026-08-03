
<nav class="sticky top-0 z-50 flex items-center justify-between px-8 py-4 bg-white border-b border-gray-100 shadow shadow-accent/8">

    {{-- Logo + Navigation --}}
    <div class="flex items-center space-x-10">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-2xl font-bold text-primary shrink-0">
            EduMaster
        </a>

        {{-- Navigation principale --}}
        <div class="hidden lg:flex items-center gap-7">

            {{-- Vision --}}
            <a href="{{ url('/') }}#vision"
               class="group relative flex items-center gap-2 py-2 text-sm font-semibold text-gray-700 hover:text-primary transition-colors duration-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="17"
                     height="17"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 16v-4"/>
                    <path d="M12 8h.01"/>
                </svg>

                <span>Notre vision</span>

                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full
                             group-hover:w-full transition-all duration-300"></span>
            </a>

            {{-- Engagement --}}
            <a href="{{ url('/') }}#engagement"
               class="group relative flex items-center gap-2 py-2 text-sm font-semibold text-gray-700 hover:text-primary transition-colors duration-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="17"
                     height="17"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>

                <span>Notre engagement</span>

                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full
                             group-hover:w-full transition-all duration-300"></span>
            </a>

            {{-- Cours populaires --}}
            <a href="{{ url('/') }}#cours-populaires"
               class="group relative flex items-center gap-2 py-2 text-sm font-semibold text-gray-700 hover:text-primary transition-colors duration-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="17"
                     height="17"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                </svg>

                <span>Cours populaires</span>

                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full
                             group-hover:w-full transition-all duration-300"></span>
            </a>

            {{-- Témoignages --}}
            <a href="{{ url('/') }}#temoignages"
               class="group relative flex items-center gap-2 py-2 text-sm font-semibold text-gray-700 hover:text-primary transition-colors duration-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="17"
                     height="17"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                </svg>

                <span>Témoignages</span>

                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full
                             group-hover:w-full transition-all duration-300"></span>
            </a>

            {{-- Catalogue --}}
            <a href="{{ route('courses.index') }}"
               class="flex items-center gap-2 px-3 py-2 text-sm font-bold text-primary
                      bg-primary/5 hover:bg-primary/10 rounded-xl transition-all duration-200">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="17"
                     height="17"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M15.033 9.44a.647.647 0 0 1 0 1.12l-4.065 2.352a.645.645 0 0 1-.968-.56V7.648a.645.645 0 0 1 .967-.56z"/>
                    <path d="M7 21h10"/>
                    <rect width="20" height="14" x="2" y="3" rx="2"/>
                </svg>

                <span>Catalogue</span>
            </a>

        </div>
    </div>


    {{-- Partie droite --}}
    <div class="flex items-center space-x-5">

        {{-- Recherche --}}
        <div class="relative hidden xl:block">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </span>

            <input
                type="text"
                placeholder="Rechercher un cours..."
                class="w-64 py-2 pl-10 pr-4 text-sm bg-gray-100
                       border border-transparent rounded-full
                       focus:outline-none focus:ring-2 focus:ring-primary/20
                       transition-all"
            >
        </div>


        {{-- Utilisateur non connecté --}}
        @guest

            <a
                href="{{ route('register') }}"
                class="px-4 py-2 text-xs font-bold text-accent
                       hover:text-[#110B29] hover:bg-slate-100/80
                       rounded-xl border border-slate-200/80
                       transition-all duration-200"
            >
                S'inscrire
            </a>

            <a
                href="{{ route('login') }}"
                class="px-4 py-2 text-xs font-extrabold text-white
                       bg-primary hover:bg-[#1b123d]
                       active:scale-95 rounded-xl shadow-sm
                       transition-all duration-200"
            >
                Se connecter
            </a>

        @endguest


        {{-- Utilisateur connecté --}}
        @auth

            <a
                href="{{ Auth::user()->role === 'user'
                    ? route('user-dashboard')
                    : route('dashboard') }}"
                class="inline-flex items-center space-x-3 p-1.5 pr-3
                       rounded-2xl hover:bg-slate-100/80
                       transition-all duration-200 focus:outline-none group"
            >

                {{-- Avatar --}}
                <div class="w-10 h-10 rounded-full bg-primary text-white
                            font-black text-xs flex items-center justify-center
                            shadow-sm group-hover:scale-105 transition-transform">

                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}

                </div>

                {{-- Nom --}}
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-extrabold text-[#110B29] leading-none">
                        {{ Auth::user()->name ?? 'Utilisateur' }}
                    </p>
                </div>

            </a>

        @endauth

    </div>

</nav>

