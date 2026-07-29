<div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full">

    <!-- Zone Image avec badges superposés -->
    <div class="relative h-52 w-full bg-[#E3E8FC] overflow-hidden">
        <img
            src="{{ $course->image_url }}"
            alt="{{ $course->title }}"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
        />

        <!-- Overlay sombre très léger pour faire ressortir les badges -->
        <div class="absolute inset-0 bg-linear-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>

        <!-- Badges flottants en haut de l'image -->
        <div class="absolute top-3 left-3 right-3 flex items-center justify-between gap-2">
            <x-pages.badge color="purple" class="backdrop-blur-md bg-white/90 shadow-sm font-medium">
                {{ data_get($course, 'specialty.name') }}
            </x-pages.badge>

            <x-pages.badge color="green" class="backdrop-blur-md bg-white/90 shadow-sm font-medium">
                Débutant
            </x-pages.badge>
        </div>
    </div>

    <!-- Corps de la carte -->
    <div class="p-8 space-y-4 grow flex flex-col justify-between">
        <div class="space-y-2">
            <!-- Titre -->
            <h3 class="text-lg font-bold text-gray-900 group-hover:text-[#002266] transition-colors line-clamp-2 leading-snug">
                {{ $course->title }}
            </h3>

            <!-- Description -->
            <p class="text-gray-500 text-sm line-clamp-2 leading-relaxed">
                {{ $course->description }}
            </p>
        </div>

        <!-- Durée & Chapitres -->
        <div class="flex items-center justify-between pt-3 border-t border-gray-100 text-xs text-gray-600 font-medium">
            <div class="flex items-center space-x-1.5 bg-gray-50 px-2.5 py-1.5 rounded-lg">
                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span>2h 30min</span>
            </div>

            <div class="flex items-center space-x-1.5 bg-gray-50 px-2.5 py-1.5 rounded-lg">
                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span>5 chapitres</span>
            </div>
        </div>
    </div>

    <!-- Pied de carte : Bouton d'action full-width -->
    <div class="px-6 pb-6 pt-2">
        <button class="w-full py-3 bg-[#002266] hover:bg-[#001744] text-white font-semibold text-sm rounded-xl flex items-center justify-center space-x-2 transition-all duration-200 shadow-md hover:shadow-lg active:scale-[0.99] group/btn">
            <span>Suivre le cours</span>
            <svg class="w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
    </div>

</div>
