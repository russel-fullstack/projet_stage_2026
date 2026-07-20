
<div class="w-full space-y-6 ">
    <!-- Barre d'onglets -->
    <div class="flex border-b border-tertiary/30">
        <!-- Onglet Description -->
        <button
            class="px-4 py-3 border-b-2 font-semibold text-sm transition-all duration-150 focus:outline-none"
        >
            Description
        </button>

        <!-- Onglet Ressources -->
        <button
            class="px-4 py-3  font-semibold text-sm transition-all duration-150 "
        >
            Ressources ({{ count($resources) }})
        </button>

        <!-- Onglet Questions & Réponses -->
        <button
            class="px-4 py-3  font-semibold text-sm transition-all duration-150 "
        >
            Questions & Réponses
        </button>
    </div>

    <!-- CONTENU DES ONGLETS -->
    <div class="space-y-6">
        <!-- Contenu : Description -->
        <div  class="space-y-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 space-y-4">
                <h3 class="text-lg font-bold text-primary">À propos de cette leçon</h3>
                <p class="text-accent text-sm md:text-base leading-relaxed">
                    {{ $description }}
                </p>

                @if(!empty($objectives))
                    <ul class="space-y-3 pt-2">
                        @foreach($objectives as $objective)
                            <li class="flex items-start gap-3 text-sm text-primary">
                                <!-- Icône check verte stylisée -->
                                <span class="shrink-0 w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg>
                                </span>
                                <span>{{ $objective }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <!-- Contenu : Ressources -->
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 space-y-4">
                <h3 class="text-lg font-bold text-primary">Ressources téléchargeables</h3>

                <div class="grid grid-cols-1 gap-3">
                    @forelse($resources as $resource)
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-slate-200 transition-colors duration-150">
                            <div class="flex items-center gap-3">
                                <!-- Icône selon le type de fichier -->
                                <div class="w-10 h-10 rounded-lg bg-indigo-50 flex items-center justify-center text-indigo-500">
                                    @if(str_ends_with($resource['name'], '.pdf'))
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-primary">{{ $resource['name'] }}</h4>
                                    <p class="text-xs text-tertiary font-medium">{{ $resource['size'] }}</p>
                                </div>
                            </div>

                            <!-- Bouton Télécharger -->
                            <a
                                href="{{ $resource['url'] }}"
                                download
                                class="p-2 rounded-lg hover:bg-slate-200/60 text-accent hover:text-slate-800 transition-colors duration-150"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                                </svg>
                            </a>
                        </div>
                    @empty
                        <p class="text-accent text-sm text-center py-4">Aucune ressource disponible pour cette leçon.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Contenu : Questions & Réponses -->
        <div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <h3 class="text-lg font-bold text-primary mb-4">Questions & Réponses</h3>
                <p class="text-tertiary text-sm">L'espace communautaire de discussion s'affichera ici.</p>
            </div>
        </div>
    </div>
</div>
