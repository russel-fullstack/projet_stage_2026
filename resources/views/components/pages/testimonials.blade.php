@props([
    'testimonials' => [
        [
            'name' => 'Thomas Martin',
            'role' => 'Data Analyst chez TechCorp',
            'quote' => '"Les cours sur EduMaster sont d\'une qualité exceptionnelle. J\'ai pu apprendre la Data Science à mon rythme et décrocher un poste en moins de 6 mois."',
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop',
            'rating' => 5
        ],
        [
            'name' => 'Léa Dubois',
            'role' => 'Designer Freelance',
            'quote' => '"Le cursus UI/UX est très complet. Les projets pratiques m\'ont permis de construire un portfolio solide qui a impressionné mes clients."',
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format&fit=crop',
            'rating' => 5
        ],
        [
            'name' => 'Marc Lefebvre',
            'role' => 'Chef de Projet Digital',
            'quote' => '"Une expérience d\'apprentissage fluide et motivante. Le support de la communauté et des instructeurs fait toute la différence."',
            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&auto=format&fit=crop',
            'rating' => 5
        ]
    ]
])

<section class="max-w-[1600px] mx-auto px-8 py-20 space-y-16">
    <div class="text-center space-y-4">
        <h2 class="text-4xl font-bold text-primary">Ce que disent nos étudiants</h2>
        <p class="text-accent text-base max-w-2xl mx-auto leading-relaxed">
            Rejoignez des milliers de professionnels qui ont transformé leur carrière grâce à EduMaster.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($testimonials as $testimonial)
            <div class="bg-gray-50/50 rounded-3xl p-8 border border-gray-100 flex flex-col justify-between space-y-6 transition-all hover:bg-white hover:shadow-xl hover:shadow-gray-200/40">

                <div class="space-y-4">
                    <div class="flex items-center space-x-1 text-secondary">
                        @for ($i = 0; $i < $testimonial['rating']; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>

                    <p class="text-accent text-sm italic leading-relaxed">
                        {{ $testimonial['quote'] }}
                    </p>
                </div>

                <div class="flex items-center space-x-4 pt-4 border-t border-gray-100/60">
                    <img
                        src="{{ $testimonial['avatar'] }}"
                        alt="{{ $testimonial['name'] }}"
                        class="w-12 h-12 rounded-full object-cover border border-gray-100"
                    />
                    <div>
                        <h4 class="font-bold text-primary text-sm">{{ $testimonial['name'] }}</h4>
                        <p class="text-gray-400 text-xs">{{ $testimonial['role'] }}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</section>
