<x-layouts.users.user-layout>
    <div class="text-slate-800 flex">
        {{-- Contenu Principal --}}
        <main class="flex-1 md:p-10 space-y-8 max-w-[1600px] ">

            {{-- 1. En-tête / Bannière du cours --}}
            <x-users.header-card
                title="UI Design Expert : Maîtriser Figma & le Design System"
                description="Apprenez à concevoir des interfaces professionnelles, accessibles et scalables. Ce module couvre l'intégralité du workflow d'un Senior Designer."
                category="Design Graphique"
                chapters-count="12"
                action-url="#"
            />

            {{-- Grille principale : Chapitres à gauche, Sidebars à droite --}}
            <div class="grid grid-cols-12 gap-8">

                {{-- Colonne Gauche : Accordéon des chapitres et leçons (8 cols) --}}
                <div class="col-span-12 lg:col-span-8 space-y-4">

                    {{-- Chapitre 1 : Terminé --}}
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4">
                        <div class="flex items-center justify-between cursor-pointer">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-black text-gray-900">Chapitre 1: Fondamentaux de l'UI</h3>
                                    <p class="text-[10px] text-gray-400 font-medium mt-0.5">4 leçons • Terminées</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>

                        <div class="space-y-1.5 pt-2">
                            <x-users.lesson-item
                                title="1.1 Introduction au Design System"
                                duration="12:45"
                                status="completed"
                            />
                            <x-users.lesson-item
                                title="1.2 Les principes de la Grille de 8px"
                                duration="08:20"
                                status="completed"
                            />
                        </div>
                    </div>

                    {{-- Chapitre 2 : En cours --}}
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4 ring-2 ring-[#002266]/5">
                        <div class="flex items-center justify-between cursor-pointer">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-[#002266] text-white flex items-center justify-center">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-black text-[#002266]">Chapitre 2: Typographie et Hiérarchie</h3>
                                    <p class="text-[10px] text-indigo-600 font-bold mt-0.5">3 leçons • 1 en cours</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/>
                            </svg>
                        </div>

                        <div class="space-y-1.5 pt-2">
                            <x-users.lesson-item
                                title="2.1 Choisir sa police de caractères"
                                duration="15:30"
                                status="completed"
                            />
                            <x-users.lesson-item
                                title="2.2 Échelles typographiques & Rythme Vertical"
                                status="in_progress"
                            />
                            <x-users.lesson-item
                                title="2.3 Exercice Pratique : Hiérarchie du Dashboard"
                                status="default"
                                :is-exercise="true"
                            />
                        </div>
                    </div>

                    {{-- Chapitre 3 : Verrouillé --}}
                    <div class="bg-gray-100/60 rounded-3xl p-6 border border-gray-100 flex items-center justify-between text-gray-400 opacity-80">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-gray-500">Chapitre 3: Composants & États</h3>
                                <p class="text-[10px] text-gray-400 font-medium mt-0.5">5 leçons • Verrouillé</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>

                    {{-- Chapitre 4 : Verrouillé --}}
                    <div class="bg-gray-100/60 rounded-3xl p-6 border border-gray-100 flex items-center justify-between text-gray-400 opacity-80">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-gray-500">Chapitre 4: Prototypage Avancé</h3>
                                <p class="text-[10px] text-gray-400 font-medium mt-0.5">6 leçons • Verrouillé</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>

                </div>

                {{-- Colonne Droite : Widgets latéraux (4 cols) --}}
                <div class="col-span-12 lg:col-span-4 space-y-6">

                    {{-- Carte 1 : Formateur --}}
                    <x-users.instructor-card
                        name="Julien Delacroix"
                        role="Senior Design Lead @ StudioTech"
                    />

                    {{-- Carte 2 : Ressources du cours --}}
                    <div class="bg-[#18005A] rounded-3xl p-6 text-white space-y-4 shadow-xl">
                        <h3 class="text-[10px] font-black text-purple-200 uppercase tracking-wider">Ressources du cours</h3>
                        <div class="space-y-2">
                            <x-users.resource-item
                                title="Figma Starter Kit.fig"
                                type="figma"
                            />
                            <x-users.resource-item
                                title="Guide d'Accessibilité UI"
                                type="pdf"
                            />
                            <x-users.resource-item
                                title="Bibliothèque de Plugins"
                                type="link"
                            />
                        </div>
                    </div>

                    {{-- Carte 3 : Prochaine Étape / Teaser --}}
                    <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-3 relative overflow-hidden">
                        <h3 class="text-[10px] font-black text-emerald-600 uppercase tracking-wider">Prochaine étape</h3>
                        <h4 class="text-xs font-black text-gray-900">Quiz : Validation du Module 2</h4>
                        <p class="text-[10px] text-gray-400 font-medium leading-relaxed">
                            Préparez-vous à tester vos connaissances sur la typographie pour débloquer le Chapitre 3.
                        </p>
                        <button disabled class="w-full py-2.5 bg-gray-100 text-gray-400 text-xs font-black rounded-xl cursor-not-allowed flex items-center justify-center space-x-2">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                            <span>Bientôt disponible</span>
                        </button>
                    </div>

                </div>

            </div>

        </main>
    </div>
</x-layouts.users.user-layout>
