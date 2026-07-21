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
        $chapters = [
            [
                'id' => 1,
                'title' => 'Chapitre 1 : Fondamentaux',
                'lessons' => [
                    [
                        'title' => '1. Introduction au cours',
                        'duration' => '05:20',
                        'status' => 'completed',
                        'type' => 'video',
                        'url' => '#',
                    ],
                    [
                        'title' => '2. Configuration de l\'environnement',
                        'duration' => '12:45',
                        'status' => 'completed',
                        'type' => 'video',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'id' => 2,
                'title' => 'Chapitre 2 : JSX et Rendering',
                'lessons' => [
                    [
                        'title' => '3. Syntaxe JSX avancée',
                        'duration' => '15:10',
                        'status' => 'completed',
                        'type' => 'video',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'id' => 3,
                'title' => 'Chapitre 3 : Architecture',
                'lessons' => [
                    [
                        'title' => '4. Hooks et Architecture',
                        'duration' => '18:20',
                        'status' => 'active',
                        'type' => 'video',
                        'url' => '#',
                    ],
                    [
                        'title' => '5. État Global avec Context API',
                        'duration' => '22:05',
                        'status' => 'pending',
                        'type' => 'video',
                        'url' => '#',
                    ],
                    [
                        'title' => '6. Gestion des formulaires',
                        'duration' => '14:40',
                        'status' => 'pending',
                        'type' => 'video',
                        'url' => '#',
                    ]
                ],
            ],
        ];
        $breadcrumbs = [
            [
                'label' => 'Masterclass React & Next.js',
                'url' => null // Le dernier élément n'a pas besoin d'URL
            ]
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
                    <x-courses.show.video-player
                        src="{{ asset('storage/figma.mp4') }}"/>
                    <!-- TODO: Composant <LessonHeader /> -->
                    <x-courses.show.lesson-header />


                    <!-- TODO: Composant <CourseTabs /> -->
                    <x-courses.show.course-tabs :description="$description" :objectives="$objectives" :resources="$resources" />
                </div>

                <!-- COLONNE DROITE : Progression, Chapitres et Widgets (Prend 4 colonnes sur 12) -->
                <div class="lg:col-span-4 flex flex-col space-y-6 ">
                    <!-- TODO: Composant <CourseProgressBar /> & <SidebarChapterList /> -->

                    <x-courses.show.aside-chapiters
                        :percent-complete="80"
                        :completed-lessons="20"
                        :total-lessons="25"
                        :chapters="$chapters" />



                    <!-- Section Widgets (Instructeur et Discord en grille 1x2 ou côte à côte) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                        <!-- TODO: Composant <InstructorCard /> -->
                    <x-courses.show.instructor-card
                        name="Paul synclair"
                        role="Admin"/>

                        <!-- TODO: Composant <SupportWidget /> -->
                  <x-courses.show.widget />
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-layouts.app-layout>
