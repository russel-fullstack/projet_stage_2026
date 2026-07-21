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
