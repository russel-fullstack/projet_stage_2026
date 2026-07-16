@props([
    'courses' => [
        [
            'title' => 'Maîtrise de la Data Science & ML',
            'description' => 'Apprenez les fondamentaux du machine learning et de l\'analyse de données avec Python.',
            'category' => 'DATA',
            'category_color' => 'bg-indigo-100 text-indigo-700',
            'level' => 'AVANCÉ',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '45 heures',
            'students' => '12.4k inscrits',
            'price' => 'Gratuit',
            'badge' => 'BESTSELLER',
            'badge_color' => 'bg-[#002266] text-white',
            'image' => 'https://images.unsplash.com/photo-1527474305487-b87b222841cc?q=80&w=600&auto=format&fit=crop'
        ],
        [
            'title' => 'Stratégie Marketing Digital 2024',
            'description' => 'Découvrez les dernières tendances en SEO, social media et publicité payante.',
            'category' => 'BUSINESS',
            'category_color' => 'bg-purple-100 text-purple-700',
            'level' => 'DÉBUTANT',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '28 heures',
            'students' => '8.2k inscrits',
            'price' => 'Gratuit',
            'badge' => null,
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop'
        ],
        [
            'title' => 'UI/UX Design: De Zéro à Pro',
            'description' => 'Maîtrisez Figma et les principes fondamentaux du design centré sur l\'utilisateur.',
            'category' => 'DESIGN',
            'category_color' => 'bg-blue-100 text-blue-700',
            'level' => 'INTERMÉDIAIRE',
            'level_color' => 'bg-[#D1FAE5] text-[#059669]',
            'duration' => '32 heures',
            'students' => '5.1k inscrits',
            'price' => 'Gratuit',
            'badge' => 'NOUVEAU',
            'badge_color' => 'bg-blue-800 text-white',
            'image' => 'https://images.unsplash.com/photo-1581291518655-9523c932dedf?q=80&w=600&auto=format&fit=crop'
        ]
    ]
])

<section class="max-w-7xl mx-auto px-8 py-20 space-y-12">
    <div class="flex items-end justify-between mb-10">
        <div class="space-y-2">
            <h2 class="text-3xl font-bold text-[#002266]">Cours populaires</h2>
            <p class="text-gray-500 text-sm">Les formations les plus plébiscitées par notre communauté ce mois-ci.</p>
        </div>
        <a href="#" class="flex items-center space-x-2 text-sm font-semibold text-[#002266] hover:underline group">
            <span>Tout explorer</span>
            <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($courses as $course)
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                
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

                <div class="p-6 space-y-3 flex-grow">
                    <div class="flex items-center space-x-2">
                        <span class="px-2.5 py-1 text-[10px] font-extrabold rounded {{ $course['category_color'] }}">
                            {{ $course['category'] }}
                        </span>
                        <span class="px-2.5 py-1 text-[10px] font-extrabold rounded {{ $course['level_color'] }}">
                            {{ $course['level'] }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-[#002266] leading-snug">
                        {{ $course['title'] }}
                    </h3>

                    <p class="text-gray-500 text-sm line-clamp-2 min-h-[2.5rem]">
                        {{ $course['description'] }}
                    </p>

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

                <div class="px-6 pb-6 pt-4 border-t border-gray-50 flex items-center justify-between">
                    <span class="text-2xl font-black text-[#002266]">{{ $course['price'] }}</span>
                    
                    <button class="w-10 h-10 bg-[#002266] hover:bg-opacity-90 text-white rounded-lg flex items-center justify-center transition-colors shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

            </div>
        @endforeach
    </div>
</section>