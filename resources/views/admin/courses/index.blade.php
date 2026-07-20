<x-layouts.admin.admin-layout>
    <div class="space-y-8">

        <!-- EN-TÊTE DE LA PAGE & BOUTON CRÉER -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-3xl font-black text-[#002266] tracking-tight">Gestion des cours</h2>
                <p class="text-gray-500 text-sm mt-1">Surveillez, approuvez et gérez le catalogue de formation EduMaster.</p>
            </div>
        </div>

        <!-- BLOC DES 4 CARTES STATISTIQUES RÉDUITES -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Cours -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-accent uppercase tracking-wider">Total Cours</p>
                <h4 class="text-2xl font-black text-primary">1,284</h4>
                <span class="text-[10px] text-secondary font-extrabold flex items-center">
                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path></svg>
                +12% ce mois
            </span>
            </div>

            <!-- En attente -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-accent uppercase tracking-wider">En attente</p>
                <h4 class="text-2xl font-black text-primary">42</h4>
                <span class="text-[10px] text-[#002266] font-extrabold flex items-center">
                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                À réviser urgemment
            </span>
            </div>

            <!-- Inscriptions -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-accent uppercase tracking-wider">Inscriptions</p>
                <h4 class="text-2xl font-black text-primary">45.2k</h4>
                <span class="text-[10px] text-secondary font-extrabold flex items-center">
                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Record atteint
            </span>
            </div>

            <!-- Signalés -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-accent uppercase tracking-wider">Signalés</p>
                <h4 class="text-2xl font-black text-primary">5</h4>
                <span class="text-[10px] text-red font-extrabold flex items-center">
                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"></path></svg>
                Action requise
            </span>
            </div>
        </div>

        <!-- TABLEAU & FILTRES DE NAVIGATION -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-6">

            <!-- Barre d'onglets de filtrage et filtre rapide -->
            <div class="flex items-center justify-between border-b border-gray-100 pb-2">
                <div class="flex flex-wrap gap-2 text-xs font-bold text-gray-500">
                    <button class="px-4 py-2 bg-secondary text-white rounded-xl shadow-sm shadow-secondary/20 transition-all">Tous</button>
                    <button class="px-4 py-2 hover:bg-gray-50 text-tertiary rounded-xl transition-colors">Publiés</button>
                    <button class="px-4 py-2 hover:bg-gray-50 text-tertiary rounded-xl transition-colors">En attente (42)</button>
                    <button class="px-4 py-2 hover:bg-gray-50 text-tertiary rounded-xl transition-colors">Signalés</button>
                </div>

                <a class="flex items-center justify-center space-x-2 px-5 py-3 bg-[#002266] hover:bg-opacity-95 text-white text-xs font-bold rounded-xl shadow-sm transition-colors whitespace-nowrap self-start sm:self-center" href="{{ route('course.create') }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Créer un cours</span>
                </a>
            </div>

            <!-- La Table des Cours -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="border-b border-gray-100 text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">
                        <th class="pb-4">Cours</th>
                        <th class="pb-4">Instructeur</th>
                        <th class="pb-4">Inscriptions</th>
                        <th class="pb-4">Date</th>
                        <th class="pb-4">Statut</th>
                        <th class="pb-4 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-xs font-bold divide-y divide-gray-50">

                    <!-- Ligne 1 : Masterclass UI/UX Design -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3 max-w-70">
                            <div class="w-10 h-10 bg-indigo-100 rounded-xl shrink-0 flex items-center justify-center text-indigo-500 font-bold"></div>
                            <div class="truncate">
                                <p class="font-black text-primary truncate">Masterclass UI/UX Design</p>
                                <p class="text-[10px] text-accent font-medium mt-0.5">Design & Créativité</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-full flex items-center justify-center">MT</div>
                                <span class="text-gray-700 font-bold">Marc Tisserand</span>
                            </div>
                        </td>
                        <td class="py-4 text-tertiary font-black">1,420</td>
                        <td class="py-4 text-accent font-medium leading-tight">12 Oct<br><span class="text-[10px]">2023</span></td>
                        <td class="py-4">
                            <x-admin.dashboard.badge color="green">
                                published
                            </x-admin.dashboard.badge>
                        </td>
                        <td class="py-4 text-center">

                            <button class="p-2 text-accent hover:text-tertiary hover:bg-gray-50 rounded-xl transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Ligne 2 : Analyse de Marché Financier -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3 max-w-70">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl shrink-0"></div>
                            <div class="truncate">
                                <p class="font-black text-primary truncate">Analyse de Marché Financier</p>
                                <p class="text-[10px] text-accent font-medium mt-0.5">Finance</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 bg-indigo-50 text-indigo-600 text-[10px] font-black rounded-full flex items-center justify-center">SL</div>
                                <span class="text-gray-700 font-bold">Sarah Laurent</span>
                            </div>
                        </td>
                        <td class="py-4 text-tertiary font-black">0</td>
                        <td class="py-4 text-accent font-medium leading-tight">Hier,<br><span class="text-[10px]">14:20</span></td>
                        <td class="py-4">
                            <x-admin.dashboard.badge color="amber" >
                                pending
                            </x-admin.dashboard.badge>
                        </td>
                        <td class="py-4 flex items-center justify-center space-x-2">
                            <button class="px-4 py-2 bg-[#002266] text-white text-[10px] font-extrabold rounded-lg hover:bg-opacity-95 transition-colors shadow-sm">
                                Approuver
                            </button>
                            <button class="p-2 text-accent hover:text-tertiary hover:bg-gray-50 rounded-xl transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Ligne 3 : Introduction au Hacking -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3 max-w-70">
                            <div class="w-10 h-10 bg-purple-100 rounded-xl shrink-0"></div>
                            <div class="truncate">
                                <p class="font-black text-red truncate">Introduction au Hacking</p>
                                <p class="text-[10px] text-accent font-medium mt-0.5">Informatique</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 bg-slate-100 text-slate-600 text-[10px] font-black rounded-full flex items-center justify-center">??</div>
                                <span class="text-gray-700 font-bold">Inconnu</span>
                            </div>
                        </td>
                        <td class="py-4 text-tertiary font-black">12</td>
                        <td class="py-4 text-accent font-medium leading-tight">02 Nov<br><span class="text-[10px]">2023</span></td>
                        <td class="py-4">
                            <x-admin.dashboard.badge color="red">
                                reported
                            </x-admin.dashboard.badge>
                        </td>
                        <td class="py-4 text-center space-x-1">
                            <button class="p-2 text-red hover:bg-red-50 rounded-xl transition-all" title="Supprimer">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path></svg>
                            </button>
                            <button class="p-2 text-accent hover:text-tertiary hover:bg-gray-50 rounded-xl transition-all" title="Inspecter">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Ligne 4 : Leadership Moderne -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3 max-w-70">
                            <div class="w-10 h-10 bg-indigo-100 rounded-xl shrink-0 flex items-center justify-center relative">
                                <span class="w-1.5 h-1.5 bg-[#002266] rounded-full absolute top-1 left-1"></span>
                            </div>
                            <div class="truncate">
                                <div class="flex items-center space-x-2">
                                    <p class="font-black text-primary truncate">Leadership Moderne</p>
                                    <span class="px-1 py-0.5 bg-indigo-50 text-[#002266] text-[8px] font-black rounded uppercase tracking-wide">Star</span>
                                </div>
                                <p class="text-[10px] text-accent font-medium mt-0.5">Business</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-full flex items-center justify-center">JP</div>
                                <span class="text-gray-700 font-bold">Jean Pierre</span>
                            </div>
                        </td>
                        <td class="py-4 text-tertiary font-black">8,902</td>
                        <td class="py-4 text-accent font-medium leading-tight">15 Juin<br><span class="text-[10px]">2023</span></td>
                        <td class="py-4">
                            <x-admin.dashboard.badge color="green">
                                published
                            </x-admin.dashboard.badge>
                        </td>
                        <td class="py-4 text-center">
                            <button class="p-2 text-accent hover:text-tertiary hover:bg-gray-50 rounded-xl transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path></svg>
                            </button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="flex flex-col sm:flex-row items-center justify-between border-t border-gray-100 pt-4 gap-4 text-xs font-semibold text-accent">
                <span>Affichage de 1-4 sur 1,284 cours</span>

                <div class="flex items-center space-x-1">
                    <button class="px-3 py-1.5 border border-gray-100 rounded-lg text-accent hover:bg-gray-50 text-[11px] font-bold transition-all">Précédent</button>
                    <button class="w-10 h-7 bg-[#002266] text-white rounded-lg font-bold text-xs">Suivant</button>
                </div>
            </div>
        </div>

    </div>

</x-layouts.admin.admin-layout>
