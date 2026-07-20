<x-layouts.users.user-layout>
    <x-slot:title>EduMaster - Étudiant</x-slot:title>

    <div class="p-6 md:p-10 max-w-7xl mx-auto space-y-8  min-h-screen">

        {{-- Titre et sous-titre --}}
        <div>
            <h1 class="text-2xl font-black text-[#002266]">Mes Certifications</h1>
            <p class="text-xs text-gray-400 font-medium mt-1">
                Célébrez vos réussites et suivez votre progression vers de nouveaux sommets académiques.
            </p>
        </div>

        {{-- Cartes de Statistiques du haut --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            {{-- Obtenus --}}
            <div class="p-5 bg-white rounded-2xl border border-gray-100 hover:border-emerald-500  shadow-sm flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 003-3V8.25a3 3 0 00-3-3h-9a3 3 0 00-3 3v7.5a3 3 0 003 3m9 0v-1.5a2.25 2.25 0 00-2.25-2.25h-4.5A2.25 2.25 0 006.75 17.25v1.5" />
                    </svg>
                </div>
                <div>
                    <p class="text-[9px] font-extrabold text-gray-400 uppercase tracking-wider">Obtenus</p>
                    <h3 class="text-xl font-black text-gray-900 mt-0.5">12</h3>
                </div>
            </div>

            {{-- En cours --}}
            <div class="p-5 bg-white rounded-2xl shadow-sm flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-[9px] font-extrabold text-gray-400 uppercase tracking-wider">En cours</p>
                    <h3 class="text-xl font-black text-gray-900 mt-0.5">3</h3>
                </div>
            </div>

            {{-- Points Académiques --}}
            <div class="p-5 bg-white rounded-2xl shadow-sm flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 005.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
                </div>
                <div>
                    <p class="text-[9px] font-extrabold text-gray-400 uppercase tracking-wider">Points académiques</p>
                    <h3 class="text-xl font-black text-gray-900 mt-0.5">2,450</h3>
                </div>
            </div>
        </div>

        {{-- Grille principale --}}
        <div class="grid grid-cols-12 gap-8">

            {{-- Section Certificats Validés (8 colonnes) --}}
            <div class="col-span-12 lg:col-span-8 space-y-5">
                <div class="flex items-center space-x-2 text-[#002266]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-sm font-black">Certificats Validés</h2>
                </div>

                <div class="space-y-4">
                    <x-users.certifications.validated-card
                        title="Expertise en Intelligence Artificielle"
                        level="Avancé"
                        delivered-at="14 Mars 2024"
                        certificate-id="EM-88293-AI"
                    />

                    <x-users.certifications.validated-card
                        title="Gestion de Projet Agile"
                        level="Intermédiaire"
                        delivered-at="02 Février 2024"
                        certificate-id="EM-77102-PM"
                    />
                </div>
            </div>

            {{-- Section En Cours & Motivation (4 colonnes) --}}
            <div class="col-span-12 lg:col-span-4 space-y-6">
                <div class="flex items-center space-x-2 text-[#002266]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-sm font-black">En cours</h2>
                </div>

                <div class="space-y-4">
                    {{-- Carte 1 : Data Science --}}
                    <x-users.certifications.in-progress-card
                        title="Data Science Appliquée"
                        percentage="85"
                        :criteria="[
                            ['label' => 'Module 4: Machine Learning', 'completed' => true],
                            ['label' => 'Projet final de certification', 'completed' => false],
                            ['label' => 'Examen de synthèse', 'completed' => false]
                        ]"
                        action-text="Continuer le cours"
                    />

                    {{-- Carte 2 : UI/UX --}}
                    <x-users.certifications.in-progress-card
                        title="Design UI/UX Expert"
                        percentage="40"
                        :criteria="[
                            ['label' => '4 modules théoriques', 'completed' => false],
                            ['label' => '2 ateliers pratiques', 'completed' => false]
                        ]"
                        action-text="Reprendre"
                    />

                    {{-- Bannière de motivation --}}
                    <x-users.certifications.motivation-banner />
                </div>
            </div>

        </div>

    </div>
</x-layouts.users.user-layout>
