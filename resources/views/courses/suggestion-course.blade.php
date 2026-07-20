<x-layouts.app-layout>
    <div class="p-6 md:p-10 max-w-6xl mx-auto space-y-8 bg-[#F8FAFC] min-h-screen">

        {{-- Bannière violette supérieure --}}
        <x-users.suggestions.header-banner />

        {{-- Section Principale (Formulaire + Sidebar) --}}
        <div class="grid grid-cols-12 gap-8">

            {{-- Colonne Gauche : Formulaire de suggestion (8 colonnes) --}}
            <div class="col-span-12 lg:col-span-8 bg-white rounded-3xl p-6 md:p-8 border border-gray-100 shadow-sm">
                <form action="" method="POST" class="space-y-6">
                    @csrf

                    {{-- 1. Titre du cours --}}
                    <div class="space-y-1.5">
                        <label for="title" class="block text-xs font-black text-gray-900">Titre du cours suggéré</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            placeholder="Ex: Maîtriser l'Architecture Microservices avec Rust"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all"
                            required
                        >
                    </div>

                    {{-- 2. Catégorie / Domaine --}}
                    <div class="space-y-1.5">
                        <label for="category" class="block text-xs font-black text-gray-900">Catégorie / Domaine</label>
                        <div class="relative">
                            <select
                                id="category"
                                name="category"
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all pr-10"
                                required
                            >
                                <option value="" disabled selected>Sélectionnez un domaine</option>
                                <option value="web_development">Développement Web & Mobile</option>
                                <option value="data_ai">Data Science & Intelligence Artificielle</option>
                                <option value="design">UI/UX & Graphic Design</option>
                                <option value="devops">DevOps & Cloud Computing</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Niveau visé (Sélecteur custom) --}}
                    <x-users.suggestions.level-selector selected="Intermédiaire" />

                    {{-- 4. Ce que vous souhaitez apprendre --}}
                    <div class="space-y-1.5">
                        <label for="learning_goals" class="block text-xs font-black text-gray-900">Ce que vous souhaitez apprendre</label>
                        <textarea
                            id="learning_goals"
                            name="learning_goals"
                            rows="4"
                            placeholder="Décrivez les sujets clés, les outils ou les concepts que vous aimeriez voir abordés dans ce cours..."
                            class="w-full p-4 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all resize-none"
                            required
                        ></textarea>
                    </div>

                    {{-- 5. Pourquoi ce cours est-il important pour vous ? (Optionnel) --}}
                    <div class="space-y-1.5">
                        <label for="importance" class="block text-xs font-black text-gray-900">
                            Pourquoi ce cours est-il important pour vous ? <span class="text-gray-400 font-normal">(Optionnel)</span>
                        </label>
                        <textarea
                            id="importance"
                            name="importance"
                            rows="3"
                            placeholder="Impact sur votre carrière, projet personnel, curiosité..."
                            class="w-full p-4 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all resize-none"
                        ></textarea>
                    </div>

                    {{-- Bouton de soumission --}}
                    <div class="pt-2">
                        <button
                            type="submit"
                            class="w-full py-4 bg-[#18005A] hover:bg-[#110042] text-white font-extrabold text-xs rounded-2xl shadow-md transition-all flex items-center justify-center space-x-2"
                        >
                            <span>Envoyer ma suggestion</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>

                </form>
            </div>

            {{-- Colonne Droite : Widgets d'Information (4 colonnes) --}}
            <div class="col-span-12 lg:col-span-4">
                <x-users.suggestions.info-sidebar />
            </div>

        </div>

    </div>
</x-layouts.app-layout>
