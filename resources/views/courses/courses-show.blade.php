<x-layouts.app-layout>
    @php
        $description =
            "Dans cette leçon, nous allons explorer les concepts avancés de React et Next.js. Vous apprendrez à gérer l'état global avec Redux, à optimiser les performances de vos composants et à structurer un projet Next.js de manière efficace.";
        $objectives = [
            'Comprendre le cycle de vie des composants fonctionnels.',
            "Implémenter useMemo et useCallback pour l'optimisation.",
            'Structurer un projet Next.js avec le App Router.',
        ];

        $resources = [
            [
                'name' => 'Support de cours_Chap3.pdf',
                'size' => '2.4 MB',
                'url' => '#',
            ],
            [
                'name' => 'Projet_Initial_Architecture.zip',
                'size' => '11.8 MB',
                'url' => '#',
            ],
        ];
        $breadcrumbs = [
            [
                'label' => 'Masterclass React & Next.js',
                'url' => null, // Le dernier élément n'a pas besoin d'URL
            ],
        ];
    @endphp

    <div class="min-h-screen bg-slate-50 ">
        <!-- Barre de navigation optionnelle ou Header de ton LMS ici -->
        <main class="max-w-[1600px] mx-auto p-4 md:p-6 lg:p-8">
            <!-- Grille principale de la page -->

            <h1 class="py-4 text-4xl text-primary font-extrabold underline">Cours: {{ $course->title }}</h1>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- COLONNE GAUCHE : Lecteur, Titres, Onglets (Prend 8 colonnes sur 12) -->
                <div class="lg:col-span-8 flex flex-col space-y-6 ">
                    <!-- TODO: Composant <VideoPlayer /> -->
                    <x-courses.show.video-player :poster="$course->image_url" :src="$videoUrl" />
                    <!-- TODO: Composant <LessonHeader /> -->
                    <x-courses.show.lesson-header
                        :active-chapter="$activeChapter"
                        :active-lesson="$activeLesson"
                        :all-lessons="$allLessons"
                        :previous-lesson="$previousLesson"
                        :next-lesson="$nextLesson"
                    />

                    <!-- TODO: Composant <CourseTabs /> -->
                    <x-courses.show.course-tabs
                     :description="$description"
                     :objectives="$objectives"
                     :resources="$resources" />
                </div>

                <!-- COLONNE DROITE : Progression, Chapitres et Widgets (Prend 4 colonnes sur 12) -->
                <div class="lg:col-span-4 flex flex-col space-y-6 ">
                    <!-- TODO: Composant <CourseProgressBar /> & <SidebarChapterList /> -->

                    <x-courses.show.aside-chapiters
                    :percent-complete="0" :completed-lessons="0" :total-lessons="$course->chapiters->sum(fn($chapter) => $chapter->lessons->count())"
                        :chapters="$course->chapiters" />



                    <!-- Section Widgets (Instructeur et Discord en grille 1x2 ou côte à côte) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                        <!-- TODO: Composant <InstructorCard /> -->
                        <x-courses.show.instructor-card  role="Admin" />

                        <!-- TODO: Composant <SupportWidget /> -->
                        <x-courses.show.widget />
                    </div>
                </div>

            </div>
        </main>
    </div>

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const videoElement = document.getElementById('course-video');

    if (!videoElement) {
        console.error('Lecteur vidéo introuvable.');
        return;
    }

    /*
    |--------------------------------------------------------------------------
    | Initialisation Plyr
    |--------------------------------------------------------------------------
    */

    const player = new Plyr(videoElement);


    /*
    |--------------------------------------------------------------------------
    | Toutes les leçons
    |--------------------------------------------------------------------------
    */

    const lessonButtons = document.querySelectorAll('.lesson-item');

    console.log('Leçons trouvées :', lessonButtons.length);


    /*
    |--------------------------------------------------------------------------
    | Clic sur une leçon
    |--------------------------------------------------------------------------
    */

    lessonButtons.forEach(button => {

        button.addEventListener('click', function () {

            const videoUrl = this.dataset.videoUrl;
            const lessonTitle = this.dataset.videoTitle;

            console.log('Leçon sélectionnée :', lessonTitle);
            console.log('Vidéo :', videoUrl);


            /*
            |--------------------------------------------------------------------------
            | Vérifier que la vidéo existe
            |--------------------------------------------------------------------------
            */

            if (!videoUrl) {

                console.warn(
                    'Aucune vidéo disponible pour :',
                    lessonTitle
                );

                return;
            }

            /*
            |--------------------------------------------------------------------------
            | Changer la source Plyr
            |--------------------------------------------------------------------------
            */

            player.source = {

                type: 'video',

                title: lessonTitle,

                sources: [
                    {
                        src: videoUrl,
                        type: videoUrl.endsWith('.webm')
                            ? 'video/webm'
                            : 'video/mp4'
                    }
                ]

            };


            /*
            |--------------------------------------------------------------------------
            | Lancer la vidéo
            |--------------------------------------------------------------------------
            */

            player.play();


            /*
            |--------------------------------------------------------------------------
            | Mettre à jour la leçon active
            |--------------------------------------------------------------------------
            */

            lessonButtons.forEach(item => {

                item.classList.remove(
                    'bg-backcheck',
                    'text-primary',
                    'font-semibold'
                );

                item.classList.add(
                    'text-slate-700'
                );
                 const statusSpan = item.querySelector('.lesson-status');
                if (statusSpan && item.dataset.videoUrl) {
                    statusSpan.textContent = 'Vidéo disponible';
                }
            });


            this.classList.remove('text-slate-700');

            this.classList.add(
                'bg-backcheck',
                'text-primary',
                'font-semibold'
            );

            const activeStatus = this.querySelector('.lesson-status');
            if (activeStatus) {
                activeStatus.textContent = 'En lecture';
            }

               player.play().catch(error => {
                console.log(
                    'Lecture automatique bloquée par le navigateur.',
                    error
                );
            });

        });

    });

});
</script>

@endpush
</x-layouts.app-layout>
