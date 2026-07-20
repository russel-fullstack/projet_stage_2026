<x-layouts.admin.admin-layout>
    <div class="space-y-8">

        <!-- EN-TÊTE DE LA PAGE & BOUTONS D'EXPORT -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-3xl font-black text-primary tracking-tight">Analyse de la Plateforme</h2>
                <p class="text-gray-500 text-sm mt-1">Rapports détaillés sur la croissance et les performances globales.</p>
            </div>

            <div class="flex items-center space-x-3 self-start sm:self-center">
                <!-- Bouton CSV -->
                <button class="flex items-center space-x-2 px-4 py-2.5 bg-white border border-gray-200 text-gray-700 text-xs font-bold rounded-xl shadow-sm hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 text-tertiary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                    </svg>
                    <span>CSV</span>
                </button>
                <!-- Bouton Exporter PDF -->
                <button class="flex items-center space-x-2 px-4 py-2.5 bg-primary hover:bg-opacity-95 text-white text-xs font-bold rounded-xl shadow-sm transition-colors whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path>
                    </svg>
                    <span>Exporter PDF</span>
                </button>
            </div>
        </div>

        <!-- GRILLE DES 4 MINI-METRICS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Apprenants -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"></path></svg>
                    </div>
                    <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-lg">+12.5%</span>
                </div>
                <div class="mt-4">
                    <p class="text-[10px] font-bold text-tertiary uppercase tracking-wider">Total Apprenants</p>
                    <h4 class="text-2xl font-black text-primary mt-0.5">48,294</h4>
                </div>
            </div>

            <!-- Cours Actifs -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-emerald-50 text-emerald-500 rounded-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"></path></svg>
                    </div>
                    <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-lg">+5.2%</span>
                </div>
                <div class="mt-4">
                    <p class="text-[10px] font-bold text-tertiary uppercase tracking-wider">Cours Actifs</p>
                    <h4 class="text-2xl font-black text-primary mt-0.5">1,124</h4>
                </div>
            </div>

            <!-- Taux de Complétion -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-purple-50 text-purple-600 rounded-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.174L3 11m13.74-1.174L18 11m-8.174 4.26L9 17m5.826-1.74L15 17m3.308-4.708l-.707-.707M6.343 17.657l-.707-.707m12.022-12.022l-.707-.707M6.343 6.343l-.707-.707M14 12a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-lg">+18%</span>
                </div>
                <div class="mt-4">
                    <p class="text-[10px] font-bold text-tertiary uppercase tracking-wider">Taux de Complétion</p>
                    <h4 class="text-2xl font-black text-primary mt-0.5">64.2%</h4>
                </div>
            </div>
        </div>

        <!-- SECTION DEUX COLONNES : GRAPHIQUE CROISSANCE & GEOGRAPHIE -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Graphique Croissance des utilisateurs (Prend 2 colonnes) -->
            <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-black text-primary">Croissance des utilisateurs</h3>
                    <div class="relative">
                        <select class="text-[10px] font-bold bg-gray-100 text-accent px-3 py-1.5 rounded-lg appearance-none pr-7 focus:outline-none cursor-pointer">
                            <option>Derniers 12 mois</option>
                        </select>
                        <svg class="w-3 h-3 text-tertiary absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
                    </div>
                </div>

                <!-- Structure Pure Tailwind du Bar Chart -->
                <div class="space-y-2">
                    <div class="h-48 flex items-end justify-between gap-2 pt-4 px-2 border-b border-gray-100">
                        <!-- Jan -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-200/70 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 40%"></div>
                        </div>
                        <!-- Fév -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-200 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 55%"></div>
                        </div>
                        <!-- Mar -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-300/80 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 50%"></div>
                        </div>
                        <!-- Avr -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-300 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 68%"></div>
                        </div>
                        <!-- Mai -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-400/80 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 75%"></div>
                        </div>
                        <!-- Juin -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-400 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 90%"></div>
                        </div>
                        <!-- Juil -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-500/80 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 85%"></div>
                        </div>
                        <!-- Aoû -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-500 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 110px"></div>
                        </div>
                        <!-- Sep -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-indigo-600/90 w-full rounded-t-md transition-all group-hover:bg-primary" style="height: 140px"></div>
                        </div>
                        <!-- Oct -->
                        <div class="w-full flex flex-col items-center group">
                            <div class="bg-primary w-full rounded-t-md transition-all" style="height: 160px"></div>
                        </div>
                    </div>
                    <!-- Labels des mois -->
                    <div class="flex justify-between text-[9px] font-bold text-tertiary px-1">
                        <span class="w-full text-center">Jan</span>
                        <span class="w-full text-center">Mar</span>
                        <span class="w-full text-center">Mai</span>
                        <span class="w-full text-center">Juil</span>
                        <span class="w-full text-center">Sep</span>
                        <span class="w-full text-center">Nov</span>
                    </div>
                </div>
            </div>

            <!-- Distribution Géo -->
            <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between space-y-6">
                <div>
                    <h3 class="text-base font-black text-primary">Distribution Géo</h3>
                </div>

                <!-- Liste des pays -->
                <div class="space-y-4 flex-1 flex flex-col justify-center">
                    <!-- France -->
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-700">
                            <span>France</span>
                            <span>42%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 42%"></div>
                        </div>
                    </div>
                    <!-- Canada -->
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-700">
                            <span>Canada</span>
                            <span>18%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 18%"></div>
                        </div>
                    </div>
                    <!-- Belgique -->
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-700">
                            <span>Belgique</span>
                            <span>12%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                    <!-- Maroc -->
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-700">
                            <span>Maroc</span>
                            <span>9%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 9%"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-2 border-t border-gray-50">
                    <a href="#" class="text-[11px] font-black text-primary hover:underline">Voir la carte mondiale</a>
                </div>
            </div>
        </div>

        <!-- SECTION DEUX COLONNES BAS : COURS POPULAIRES & INSTRUCTEURS -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Cours les plus populaires (2 colonnes) -->
            <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm lg:col-span-2 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-black text-primary">Cours les plus populaires</h3>
                    <a href="#" class="text-[11px] font-black text-primary hover:underline">Tout voir</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                        <tr class="border-b border-gray-50 text-[9px] font-extrabold text-slate-400 uppercase tracking-wider">
                            <th class="pb-3">Titre du cours</th>
                            <th class="pb-3 text-center">Inscriptions</th>
                            <th class="pb-3 text-center">Revenu</th>
                            <th class="pb-3 text-right pr-2">Note</th>
                        </tr>
                        </thead>
                        <tbody class="text-xs font-bold divide-y divide-gray-50/50">
                        <!-- Cours 1 -->
                        <tr>
                            <td class="py-3 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-primary text-white text-[10px] font-black rounded-lg flex items-center justify-center shrink-0">AI</div>
                                <div>
                                    <p class="font-black text-gray-900 leading-tight">Masterclass Intelligence Artificielle</p>
                                    <p class="text-[10px] text-tertiary font-medium">Jean Dupont</p>
                                </div>
                            </td>
                            <td class="py-3 text-center text-accent">8,245</td>
                            <td class="py-3 text-center text-gray-900 font-black">12,4k €</td>
                            <td class="py-3 text-right pr-2">
                                <div class="inline-flex items-center space-x-1 text-emerald-600 font-black">
                                    <svg class="w-3 h-3 text-emerald-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span>4.9</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Cours 2 -->
                        <tr>
                            <td class="py-3 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-emerald-100 text-emerald-600 text-[10px] font-black rounded-lg flex items-center justify-center shrink-0">UX</div>
                                <div>
                                    <p class="font-black text-gray-900 leading-tight">Design Thinking Fondamentaux</p>
                                    <p class="text-[10px] text-tertiary font-medium">Sarah Lemoine</p>
                                </div>
                            </td>
                            <td class="py-3 text-center text-accent">6,120</td>
                            <td class="py-3 text-center text-gray-900 font-black">8,9k €</td>
                            <td class="py-3 text-right pr-2">
                                <div class="inline-flex items-center space-x-1 text-emerald-600 font-black">
                                    <svg class="w-3 h-3 text-emerald-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span>4.8</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Cours 3 -->
                        <tr>
                            <td class="py-3 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-indigo-900 text-white text-[10px] font-black rounded-lg flex items-center justify-center shrink-0">PY</div>
                                <div>
                                    <p class="font-black text-gray-900 leading-tight">Python pour la Data Science</p>
                                    <p class="text-[10px] text-tertiary font-medium">Marc Weber</p>
                                </div>
                            </td>
                            <td class="py-3 text-center text-accent">4,890</td>
                            <td class="py-3 text-center text-gray-900 font-black">10,2k €</td>
                            <td class="py-3 text-right pr-2">
                                <div class="inline-flex items-center space-x-1 text-emerald-600 font-black">
                                    <svg class="w-3 h-3 text-emerald-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span>4.7</span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Performance Instructeurs -->
            <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between space-y-4">
                <h3 class="text-base font-black text-primary">Performance Instructeurs</h3>

                <div class="space-y-3 flex-1 flex flex-col justify-center">
                    <!-- Top Performer: Jean Dupont -->
                    <div class="p-3 bg-gray-50 rounded-2xl flex items-center justify-between border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <div class="w-7 h-7 bg-indigo-100 text-indigo-600 text-[10px] font-black rounded-full flex items-center justify-center">JD</div>
                            <div>
                                <p class="font-black text-gray-900 text-xs">Jean Dupont</p>
                                <p class="text-[9px] text-tertiary font-medium">12 Cours • 4.9 Moyenne</p>
                            </div>
                        </div>
                        <span class="text-[9px] font-black text-emerald-600 text-right leading-tight uppercase tracking-wider">Top<br>Performer</span>
                    </div>

                    <!-- Instructeur 2 -->
                    <div class="p-3 hover:bg-gray-50/50 rounded-2xl flex items-center justify-between transition-colors cursor-pointer group">
                        <div class="flex items-center space-x-3">
                            <div class="w-7 h-7 bg-purple-50 text-purple-500 text-[10px] font-black rounded-full flex items-center justify-center">SL</div>
                            <div>
                                <p class="font-black text-gray-900 text-xs">Sarah Lemoine</p>
                                <p class="text-[9px] text-tertiary font-medium">8 Cours • 4.8 Moyenne</p>
                            </div>
                        </div>
                        <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg>
                    </div>

                    <!-- Instructeur 3 -->
                    <div class="p-3 hover:bg-gray-50/50 rounded-2xl flex items-center justify-between transition-colors cursor-pointer group">
                        <div class="flex items-center space-x-3">
                            <div class="w-7 h-7 bg-blue-50 text-blue-500 text-[10px] font-black rounded-full flex items-center justify-center">MW</div>
                            <div>
                                <p class="font-black text-gray-900 text-xs">Marc Weber</p>
                                <p class="text-[9px] text-tertiary font-medium">15 Cours • 4.7 Moyenne</p>
                            </div>
                        </div>
                        <svg class="w-3.5 h-3.5 text-gray-300 group-hover:text-gray-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg>
                    </div>
                </div>

                <!-- Bouton du bas -->
                <button class="w-full py-2.5 bg-white border border-dashed border-gray-300 text-gray-700 text-[11px] font-black rounded-xl hover:bg-gray-50 hover:border-tertiary transition-all">
                    Gérer les commissions
                </button>
            </div>
        </div>

    </div>
</x-layouts.admin.admin-layout>
