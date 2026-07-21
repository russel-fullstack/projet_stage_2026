
<div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col items-center text-center space-y-4">
    <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 self-start">
        Votre instructeur
    </span>

    <!-- Avatar de l'instructeur -->
    <div class="relative w-20 h-20">
        @if($avatarUrl)
            <img src="{{ $avatarUrl }}" alt="{{ $name }}" class="w-full h-full rounded-full object-cover border-2 border-slate-100">
        @else
            <!-- Avatar par défaut stylisé -->
            <div class="w-full h-full rounded-full bg-indigo-50 border-2 border-indigo-200 flex items-center justify-center text-indigo-600 font-bold text-xl">
                {{ collect(explode(' ', $name))->map(fn($n) => mb_substr($n, 0, 1))->implode('') }}
            </div>
        @endif
    </div>

    <!-- Informations -->
    <div>
        <h4 class="font-extrabold text-slate-900 text-sm md:text-base">{{ $name }}</h4>
        <p class="text-xs text-slate-400 font-medium mt-0.5">{{ $role }}</p>
    </div>

    <!-- Bouton de suivi -->
    <button class="w-full flex items-center justify-center gap-2 py-2 px-4 rounded-xl border border-slate-200 hover:border-[#7052FF] text-slate-600 hover:text-[#7052FF] font-semibold text-xs transition-all duration-150">
        <!-- Icône d'ajout / suivi -->
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
        </svg>
        <span>Suivre l'instructeur</span>
    </button>
</div>
