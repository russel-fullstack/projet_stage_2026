<x-layouts.app-layout>
    <div class="min-h-screen bg-[#F8FAFC] pb-12">
        <!-- En-tête de page -->
        <div class="max-w-[1600px] mx-auto px-3 py-10 sm:px-6 lg:px-8 pt-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-primary tracking-tight">
                Catalogue de cours
            </h1>
            <p class="text-slate-500 text-sm md:text-base mt-2 font-medium">
                Découvrez des centaines de cours conçus pour propulser votre carrière.
            </p>
        </div>

        <!-- Layout principal -->
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 mt-8  relative">

            <!-- COLONNE CONTENU (Droite - 9 cols) -->
            <main class="lg:col-span-9 space-y-6">

                <!-- Barre de tri par catégories -->
                <div class="flex items-center gap-2 overflow-x-auto pb-3 scrollbar-none">
                    <button
                        class="px-5 py-2.5 bg-[#0A1D67] text-white text-xs font-extrabold rounded-full whitespace-nowrap">
                        Tous les cours
                    </button>
                    <button
                        class="px-5 py-2.5 bg-white border border-slate-100 hover:border-slate-200 text-accent text-xs font-extrabold rounded-full whitespace-nowrap transition-colors">
                        Développement
                    </button>
                    <button
                        class="px-5 py-2.5 bg-white border border-slate-100 hover:border-slate-200 text-accent text-xs font-extrabold rounded-full whitespace-nowrap transition-colors">
                        Business
                    </button>
                    <button
                        class="px-5 py-2.5 bg-white border border-slate-100 hover:border-slate-200 text-accent text-xs font-extrabold rounded-full whitespace-nowrap transition-colors">
                        Design
                    </button>
                    <button
                        class="px-5 py-2.5 bg-white border border-slate-100 hover:border-slate-200 text-accent text-xs font-extrabold rounded-full whitespace-nowrap transition-colors">
                        Bien-être
                    </button>
                </div>

                <!-- Grille des Cours -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    @foreach ($courses as $course)
                        <a href="{{ route('chapiters.test') }}">
                            <x-courses.course-card :course="$course" />
                        </a>
                    @endforeach
                    <x-courses.suggest-course />
                </div>

                <!-- Widget Suggestion -->
            </main>
    </div>

    <!-- Widget Progression Flottant (Affiché uniquement sur Mobile en bas à gauche de l'écran) -->
    </div>

</x-layouts.app-layout>
