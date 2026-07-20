<x-layouts.app-layout>
    <div class="min-h-screen bg-[#F8FAFC] py-12 px-4 sm:px-6">
        <div class="max-w-3xl mx-auto space-y-8">

            {{-- En-tête et Progression --}}
            <div class="space-y-6">
                <x-quiz.header
                    module-name="Module 3 : Développement Web Moderne"
                    quiz-title="Quiz : Concepts Fondamentaux de React"
                />

                <x-quiz.progress current="3" total="10" percentage="30" />
            </div>

            {{-- Conteneur Principal de la Question --}}
            <div class="bg-white border border-gray-100 shadow-sm rounded-3xl p-8 md:p-10">
                <form action="" method="POST" class="space-y-8">
                    @csrf

                    {{-- L'énoncé de la question --}}
                    <h2 class="text-xl md:text-2xl font-black text-gray-900 leading-tight">
                        Quel hook est utilisé pour gérer l'état local dans un composant fonctionnel ?
                    </h2>

                    {{-- Liste des choix --}}
                    <div class="space-y-3">
                        <x-quiz.option
                            name="answer"
                            value="useEffect"
                            label="useEffect"
                        />
                        <x-quiz.option
                            name="answer"
                            value="useState"
                            label="useState"
                            :checked="true"
                        />
                        <x-quiz.option
                            name="answer"
                            value="useContext"
                            label="useContext"
                        />
                        <x-quiz.option
                            name="answer"
                            value="useReducer"
                            label="useReducer"
                        />
                    </div>

                    {{-- Actions de Navigation --}}
                    <div class="flex flex-col-reverse md:flex-row md:items-center justify-between pt-4 gap-4">
                        {{-- Bouton Précédent --}}
                        <a href="#" class="px-6 py-3 border border-[#18005A] text-[#18005A] rounded-xl text-xs font-black inline-flex items-center justify-center space-x-2 hover:bg-indigo-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            <span>Question précédente</span>
                        </a>

                        <div class="flex items-center justify-between md:justify-end gap-6">
                            {{-- Passer la question --}}
                            <a href="#" class="text-xs font-bold text-gray-500 hover:text-gray-900 transition-colors">
                                Passer la question
                            </a>

                            {{-- Bouton Suivant --}}
                            <button type="submit" class="px-6 py-3 bg-[#18005A] text-white rounded-xl text-xs font-black inline-flex items-center justify-center space-x-2 hover:bg-[#110042] shadow-md transition-colors">
                                <span>Question suivante</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Indice --}}
            <x-quiz.hint
                description="Consultez la leçon &quot;Introduction aux Hooks&quot; pour revoir les bases de la gestion d'état dans React."
                link-url=""
            />

        </div>
    </div>
</x-layouts.app-layout>
