@php
    $items = [
        [
            'name' => 'Mon profil',
            'route' => 'profile.edit',
            'icon' => 'user',
        ],
        [
            'name' => 'Mot de passe',
            'route' => 'profile.password.edit',
            'icon' => 'lock',
        ],
        [
            'name' => 'Two-Factor Auth',
            'route' => 'profile.security',
            'icon' => 'shield',
        ],
        [
            'name' => 'Infos connexion',
            'route' => 'profile.login-info',
            'icon' => 'login',
        ],

    ];
@endphp

<aside class="w-full lg:w-64 shrink-0">
    {{-- En-tête --}}
    <div class="mb-10">

        <h1 class="text-2xl font-black text-primary">
            Paramètres
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Gérez votre compte et vos préférences.
        </p>

    </div>


    <nav class="space-y-1">

        @foreach ($items as $item)

            <a
                href="{{ route($item['route']) }}"
                class="
                    flex items-center gap-4
                    px-4 py-3
                    rounded-xl
                    text-sm font-medium
                    transition-all duration-200

                    {{ request()->routeIs($item['route'])
                        ? 'bg-backcheck text-primary font-extrabold'
                        : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'
                    }}
                "
            >

                {{-- Icône utilisateur --}}
                @if ($item['icon'] === 'user')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a7.5 7.5 0 0115 0"
                        />
                    </svg>

                    {{-- Cadenas --}}
                @elseif ($item['icon'] === 'lock')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M16.5 10.5V7.75a4.5 4.5 0 00-9 0v2.75M6 10.5h12v9H6v-9z"
                        />
                    </svg>

                    {{-- Sécurité --}}
                @elseif ($item['icon'] === 'shield')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M12 3l7 3v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M9.5 12l1.7 1.7 3.3-3.4"
                        />
                    </svg>

                    {{-- Connexion --}}
                @elseif ($item['icon'] === 'login')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M10 17l5-5-5-5M15 12H3"
                        />
                    </svg>

                    {{-- Réseaux sociaux --}}
                @elseif ($item['icon'] === 'share')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="18" cy="5" r="2" stroke-width="1.7"/>
                        <circle cx="6" cy="12" r="2" stroke-width="1.7"/>
                        <circle cx="18" cy="19" r="2" stroke-width="1.7"/>
                        <path
                            stroke-linecap="round"
                            stroke-width="1.7"
                            d="M8 11l8-5M8 13l8 5"
                        />
                    </svg>

                    {{-- Apparence --}}
                @elseif ($item['icon'] === 'palette')

                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M12 3a9 9 0 100 18h1.5a1.5 1.5 0 000-3H12a1.5 1.5 0 010-3h3a6 6 0 000-12h-3z"
                        />
                        <circle cx="7.5" cy="10" r=".8" fill="currentColor"/>
                        <circle cx="10" cy="7" r=".8" fill="currentColor"/>
                        <circle cx="14" cy="7" r=".8" fill="currentColor"/>
                    </svg>

                @endif


                <span>
                    {{ $item['name'] }}
                </span>

            </a>

        @endforeach

    </nav>

</aside>
