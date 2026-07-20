<x-layouts.admin.admin-layout>

    <div class="space-y-8">

        <!-- EN-TÊTE DE LA PAGE & MINI STATS -->
        <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-6">
            <div>
                <h2 class="text-3xl font-black text-[#002266] tracking-tight">Gestion des Utilisateurs</h2>
                <p class="text-gray-500 text-sm mt-1">Visualisez, filtrez et gérez tous les membres de la plateforme EduMaster.</p>
            </div>

            <!-- Blocs compteurs du haut -->
            <div class="flex flex-wrap items-center gap-4 sm:flex-nowrap">
                <!-- Total -->
                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex items-center space-x-4 min-w-50 flex-1 sm:flex-initial">
                    <div class="p-3 bg-indigo-50 text-[#002266] rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Utilisateurs</p>
                        <h4 class="text-xl font-black text-gray-900 leading-tight">12,842</h4>
                    </div>
                </div>

                <!-- Nouveaux -->
                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex items-center space-x-4 min-w-50 flex-1 sm:flex-initial">
                    <div class="p-3 bg-emerald-50 text-emerald-500 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Nouveaux (30j)</p>
                        <h4 class="text-xl font-black text-gray-900 leading-tight">+154</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- ZONE DE RECHERCHE, FILTRES & BOUTON ACTION -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

                <!-- Recherche et Selects -->
                <div class="flex flex-wrap items-center gap-3 flex-1">
                    <!-- Recherche -->
                    <div class="relative w-full sm:max-w-xs">
                        <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg>
                        <input type="text" placeholder="Rechercher par nom, email..." class="w-full text-xs font-medium pl-9 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#002266]/10 focus:bg-white transition-all" />
                    </div>

                    <!-- Filtre Rôle -->
                    <div class="relative min-w-35 w-full sm:w-auto">
                        <select class="w-full text-xs font-bold px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl appearance-none pr-10 focus:outline-none cursor-pointer">
                            <option>Tous les rôles</option>
                            <option>Admin</option>
                            <option>Instructeur</option>
                            <option>Étudiant</option>
                        </select>
                        <svg class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
                    </div>

                    <!-- Filtre Statut -->
                    <div class="relative min-w-35 w-full sm:w-auto">
                        <select class="w-full text-xs font-bold px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl appearance-none pr-10 focus:outline-none cursor-pointer">
                            <option>Tous les statuts</option>
                            <option>Actif</option>
                            <option>Banni</option>
                        </select>
                        <svg class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
                    </div>
                </div>

                <!-- Bouton Ajouter -->
                <button class="flex items-center justify-center space-x-2 px-5 py-3 bg-[#002266] hover:bg-opacity-95 text-white text-xs font-bold rounded-xl shadow-sm transition-colors whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v10.5m-10.5-5.25h10.5m-14.25 0a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0z"></path>
                    </svg>
                    <span>Ajouter un utilisateur</span>
                </button>
            </div>

            <!-- TABLE DES UTILISATEURS -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="border-b border-gray-100 text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">
                        <th class="pb-4">Utilisateur</th>
                        <th class="pb-4">Rôle</th>
                        <th class="pb-4">Date d'inscription</th>
                        <th class="pb-4">Statut</th>
                        <th class="pb-4 text-right pr-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-xs font-bold divide-y divide-gray-50">

                    <!-- Ligne 1 : Admin -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3">
                            <div class="w-9 h-9 bg-[#002266] text-white rounded-full flex items-center justify-center font-extrabold tracking-wide">JA</div>
                            <div>
                                <p class="font-black text-gray-900">Jean-Luc Picard</p>
                                <p class="text-[10px] text-gray-400 font-medium">jeanluc@enterprise.com</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md text-[9px] font-black uppercase tracking-wider">Admin</span>
                        </td>
                        <td class="py-4 text-gray-500 font-medium">12 Jan 2024</td>
                        <td class="py-4">
                            <div class="flex items-center space-x-1.5 text-emerald-600">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                <span>Actif</span>
                            </div>
                        </td>
                        <td class="py-4 text-right space-x-1 pr-2">
                            <x-admin.users.table-action type="edit" />
                            <x-admin.users.table-action type="suspend" status="active" />
                            <x-admin.users.table-action type="delete" />
                        </td>
                    </tr>

                    <!-- Ligne 2 : Instructeur -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3">
                            <div class="w-9 h-9 bg-indigo-50 text-indigo-500 rounded-full flex items-center justify-center font-extrabold">MC</div>
                            <div>
                                <p class="font-black text-gray-900">Marie Curie</p>
                                <p class="text-[10px] text-gray-400 font-medium">marie.curie@science.edu</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-md text-[9px] font-black uppercase tracking-wider">Instructeur</span>
                        </td>
                        <td class="py-4 text-gray-500 font-medium">05 Fév 2024</td>
                        <td class="py-4">
                            <div class="flex items-center space-x-1.5 text-emerald-600">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                <span>Actif</span>
                            </div>
                        </td>
                        <td class="py-4 text-right space-x-1 pr-2">
                            <x-admin.users.table-action type="edit" />
                            <x-admin.users.table-action type="suspend" status="active" />
                            <x-admin.users.table-action type="delete" />
                        </td>
                    </tr>

                    <!-- Ligne 3 : Étudiant Banni -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3">
                            <div class="w-9 h-9 bg-slate-200 text-slate-600 rounded-full flex items-center justify-center font-extrabold">ST</div>
                            <div>
                                <p class="font-black text-gray-900">Sylvain Tardy</p>
                                <p class="text-[10px] text-gray-400 font-medium">sylvain@tardy.fr</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 bg-orange-50 text-orange-600 rounded-md text-[9px] font-black uppercase tracking-wider">Étudiant</span>
                        </td>
                        <td class="py-4 text-gray-500 font-medium">18 Nov 2023</td>
                        <td class="py-4">
                            <div class="flex items-center space-x-1.5 text-red-500">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                <span>Banni</span>
                            </div>
                        </td>
                        <td class="py-4 text-right space-x-1 pr-2">
                            <x-admin.users.table-action type="edit" />
                            <x-admin.users.table-action type="suspend" status="banned" />
                            <x-admin.users.table-action type="delete" />
                        </td>
                    </tr>

                    <!-- Ligne 4 : Étudiant Actif -->
                    <tr>
                        <td class="py-4 flex items-center space-x-3">
                            <div class="w-9 h-9 bg-indigo-50 text-indigo-500 rounded-full flex items-center justify-center font-extrabold">TE</div>
                            <div>
                                <p class="font-black text-gray-900">Thomas Edison</p>
                                <p class="text-[10px] text-gray-400 font-medium">tom@invention.com</p>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="px-2.5 py-1 bg-orange-50 text-orange-600 rounded-md text-[9px] font-black uppercase tracking-wider">Étudiant</span>
                        </td>
                        <td class="py-4 text-gray-500 font-medium">24 Déc 2023</td>
                        <td class="py-4">
                            <div class="flex items-center space-x-1.5 text-emerald-600">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>
                                <span>Actif</span>
                            </div>
                        </td>
                        <td class="py-4 text-right space-x-1 pr-2">
                            <x-admin.users.table-action type="edit" />
                            <x-admin.users.table-action type="suspend" status="active" />
                            <x-admin.users.table-action type="delete" />
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="flex flex-col sm:flex-row items-center justify-between border-t border-gray-100 pt-4 gap-4 text-xs font-semibold text-gray-400">
                <span>Affichage de 1-4 sur 12,842</span>

                <div class="flex items-center space-x-1">
                    <button class="p-2 border border-gray-100 rounded-lg text-gray-300 hover:bg-gray-50 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path></svg>
                    </button>
                    <button class="w-8 h-8 bg-[#002266] text-white rounded-lg font-bold text-xs">1</button>
                    <button class="w-8 h-8 border border-gray-100 text-gray-600 hover:bg-gray-50 rounded-lg font-bold text-xs transition-colors">2</button>
                    <button class="w-8 h-8 border border-gray-100 text-gray-600 hover:bg-gray-50 rounded-lg font-bold text-xs transition-colors">3</button>
                    <button class="p-2 border border-gray-100 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- BLOC BAS : DOSSIER GLOBAL FOOTER -->
        <div class="bg-gray-200/60 rounded-3xl p-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500 font-bold">
            <div>
                <span class="text-sm font-black text-[#002266] block md:inline mr-2">EduMaster</span>
                <span>© 2024 EduMaster. Excellence Académique.</span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-gray-900 transition-colors">À propos</a>
                <a href="#" class="hover:text-gray-900 transition-colors">Aide</a>
                <a href="#" class="hover:text-gray-900 transition-colors">Confidentialité</a>
                <a href="#" class="hover:text-gray-900 transition-colors">Langue</a>
            </div>
        </div>

    </div>
</x-layouts.admin.admin-layout>
