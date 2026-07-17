@props([
    'course'
])

<div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between h-full">

    <!-- Zone Image / Badge -->
    <div class="relative h-48 w-full bg-[#E3E8FC]">
        @if($course['badge'])
            <span class="absolute top-4 left-4 z-10 px-3 py-1 text-[10px] font-bold rounded-md tracking-wider {{ $course['badge_color'] ?? 'bg-[#002266] text-white' }}">
                {{ $course['badge'] }}
            </span>
        @endif

        <img
            src="{{ $course['image'] }}"
            alt="{{ $course['title'] }}"
            class="w-full h-full object-cover"
        />
    </div>

    <!-- Corps de la carte -->
    <div class="p-6 space-y-3 grow">
        <!-- Catégorie & Niveau -->
        <div class="flex items-center space-x-2">
            <span class="px-2.5 py-1 text-[10px] font-extrabold rounded {{ $course['category_color'] }}">
                {{ $course['category'] }}
            </span>
            <span class="px-2.5 py-1 text-[10px] font-extrabold rounded {{ $course['level_color'] }}">
                {{ $course['level'] }}
            </span>
        </div>

        <!-- Titre -->
        <h3 class="text-xl font-bold text-[#002266] leading-snug">
            {{ $course['title'] }}
        </h3>

        <!-- Description -->
        <p class="text-gray-500 text-sm line-clamp-2 min-h-10">
            {{ $course['description'] }}
        </p>

        <!-- Durée & Étudiants -->
        <div class="flex items-center space-x-4 text-xs text-gray-500 pt-1">
            <div class="flex items-center space-x-1">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                </svg>
                <span>{{ $course['duration'] }}</span>
            </div>
            <div class="flex items-center space-x-1">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span>{{ $course['students'] }}</span>
            </div>
        </div>
    </div>

    <!-- Pied de carte : Prix & Action -->
    <div class="px-6 pb-6 pt-4 border-t border-gray-50 flex items-center justify-between">
        <span class="text-2xl font-black text-[#002266]">{{ $course['price'] }}</span>

        <button class="w-10 h-10 bg-[#002266] hover:bg-opacity-90 text-white rounded-lg flex items-center justify-center transition-colors shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>

</div>
