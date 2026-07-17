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

<section class="max-w-[1600px] mx-auto px-8 py-20 space-y-12">
    <div class="flex items-end justify-between mb-10">
        <div class="space-y-2">
            <h2 class="text-3xl font-bold text-[#002266]">Cours populaires</h2>
            <p class="text-gray-500 text-sm">Les formations les plus plébiscitées par notre communauté ce mois-ci.</p>
        </div>
        <a href="{{ route('courses.index') }}" class="flex items-center space-x-2 text-sm font-semibold text-[#002266] hover:underline group">
            <span>Tout explorer</span>
            <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($courses as $course)
            <x-courses.course-card :course="$course" />
        @endforeach
    </div>
</section>
