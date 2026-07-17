@props([
    'chapterTitle' => 'Chapitre 3 : Architecture des composants et Hooks',
    'currentLesson' => 4,
    'totalLessons' => 12,
    'duration' => '18 minutes',
    'prevUrl' => '#',
    'nextUrl' => '#'
])

<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-slate-100 mb-5">
    <!-- Infos de la leçon (Titre et durée) -->
    <div class="flex-1">
        <h1 class="text-xl md:text-2xl font-extrabold text-primary leading-tight">
            {{ $chapterTitle }}
        </h1>
        <p class="text-tertiary text-xs md:text-sm mt-1.5 font-medium flex items-center gap-2">
            <span>Leçon {{ $currentLesson }} sur {{ $totalLessons }}</span>
            <span class="inline-block w-1 h-1 rounded-full bg-slate-300"></span>
            <span>{{ $duration }}</span>
        </p>
    </div>

    <!-- Boutons de Navigation (Précédent / Suivant) -->
    <div class="flex items-center gap-3">
        <!-- Bouton Précédent (Bordure arrondie, flèche gauche) -->
        <a
            href="{{ $prevUrl }}"
            class="flex items-center justify-center gap-2 px-5 py-2.5 rounded-full border border-slate-300 text-primary font-semibold text-sm hover:bg-slate-50  transition-all duration-150"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
            </svg>
            <span>Précédent</span>
        </a>

        <!-- Bouton Suivant (Fond bleu/violet foncé, flèche droite) -->
        <a
            href="{{ $nextUrl }}"
            class="flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-[#110B29] text-white font-semibold text-sm hover:bg-opacity-90 shadow-sm hover:shadow-md transition-all duration-150"
        >
            <span>Suivant</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>
    </div>
</div>
