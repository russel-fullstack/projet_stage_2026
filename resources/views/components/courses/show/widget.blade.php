@props([
    'forumUrl' => '#'
])

<div class="bg-emerald-50/60 p-6 rounded-2xl border border-emerald-100/80 space-y-3">
    <h4 class="text-xs font-extrabold uppercase tracking-wider text-emerald-800">
        Besoin d'aide ?
    </h4>
    <p class="text-xs text-emerald-900/80 leading-relaxed font-medium">
        Rejoignez notre Discord communautaire pour poser vos questions en direct à l'équipe et aux autres étudiants.
    </p>

    <!-- Lien vers le forum -->
    <a
        href="{{ $forumUrl }}"
        class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 hover:text-emerald-950 transition-colors duration-150 group"
    >
        <span>Accéder au forum</span>
        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
        </svg>
    </a>
</div>
