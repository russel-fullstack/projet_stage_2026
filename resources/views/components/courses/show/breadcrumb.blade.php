@props([
    'items' => []
])

<nav aria-label="Breadcrumb" class="py-4">
    <ol class="flex items-center flex-wrap gap-2 text-xs md:text-sm font-semibold">
        <!-- Lien d'accueil ou racine (Optionnel, mais recommandé pour l'UX) -->
        <li>
            <a href="/" class="text-accent hover:text-hover transition-colors duration-150">
                Accueil
            </a>
        </li>

        @foreach($items as $item)
            <!-- Séparateur Chevron (on l'affiche avant chaque élément suivant) -->
            <li class="text-tertiary select-none" aria-hidden="true">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                </svg>
            </li>

            <li>
                @if($item['label'] )

                    <span class="text-primary font-extrabold" aria-current="page">
                        {{ $item['label'] }}
                    </span>
                @else
                    <a
                        href="{{ $item['url'] ?? '#' }}"
                        class="text-slate-500 hover:text-hover transition-colors duration-150"
                    >
                        {{ $item['label'] }}
                    </a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
