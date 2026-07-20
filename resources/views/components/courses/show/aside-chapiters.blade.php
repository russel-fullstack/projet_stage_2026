@props([
    'percentComplete' => 75,
    'completedLessons' => 18,
    'totalLessons' => 24,
    'chapters' => []
])

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col divide-y divide-slate-100">

    <!-- 1. En-tête : Progression du cours -->
    <div class="p-6 space-y-3">
        <h3 class="text-base font-extrabold text-[#110B29]">Progression du cours</h3>

        <div class="flex items-center justify-between text-xs font-semibold">
            <span class="text-slate-500">{{ $percentComplete }}% complété</span>
            <span class="text-[#110B29]">{{ $completedLessons }}/{{ $totalLessons }} leçons</span>
        </div>

        <!-- Barre de progression -->
        <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
            <div
                class="h-full bg-emerald-500 rounded-full transition-all duration-500"
                style="width: {{ $percentComplete }}%"
            ></div>
        </div>
    </div>

    <!-- 2. Liste des Chapitres (Accordéons en HTML natif <details>) -->
    <div class="divide-y divide-slate-100">
        @foreach($chapters as $chapter)
            <!--
                Chaque chapitre est enveloppé dans un <details>.
                On utilise la classe 'group' de Tailwind pour pouvoir cibler les enfants quand le details est ouvert.
                'open' est ajouté si c'est le chapitre actif (ex: Chapitre 3).
            -->
            <details
                class="group w-full"
                {{ $chapter['id'] === 3 ? 'open' : '' }}
            >
                <!-- L'élément <summary> sert de bouton de déclenchement (retire la puce par défaut avec 'list-none' et '[-webkit-details-marker]:hidden') -->
                <summary class="list-none [&::-webkit-details-marker]:hidden w-full px-6 py-4 flex items-center justify-between text-left hover:bg-slate-50/50 cursor-pointer transition-colors duration-150 select-none">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-slate-500 group-open:text-slate-800">
                        {{ $chapter['title'] }}
                    </span>

                    <!-- La flèche pivote automatiquement grâce à 'group-open:rotate-180' -->
                    <svg
                        class="w-4 h-4 text-slate-400 transition-transform duration-200 group-open:rotate-180 group-open:text-slate-800"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </summary>

                <!-- Le contenu à l'intérieur s'affiche naturellement quand le details est ouvert -->
                <div class="px-4 pb-4 space-y-2">
                    @foreach($chapter['lessons'] as $lesson)
                        @php
                            $isActive = $lesson['status'] === 'active';
                            $isCompleted = $lesson['status'] === 'completed';
                            $isQuiz = $lesson['type'] === 'quiz';
                        @endphp

                        <a
                            href="{{ $lesson['url'] }}"
                            class="flex items-start gap-3 p-3 rounded-xl transition-all duration-150 w-full text-left
                            {{ $isActive
                                ? 'bg-backcheck text-primary font-semibold'
                                : ($isCompleted
                                    ? 'bg-slate-50 text-accent hover:bg-slate-100/70'
                                    : 'text-slate-700 hover:bg-slate-50') }}"
                        >
                            <!-- Icône d'état -->
                            <div class="shrink-0 mt-0.5">
                                @if($isCompleted)
                                    <span class="flex items-center justify-center w-5 h-5 rounded-full bg-checkbox text-white">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                    </span>
                                @elseif($isActive)
                                    <span class="flex items-center justify-center w-5 h-5 rounded-full bg-checkbox text-white">
                                        <svg class="w-2.5 h-2.5 ml-0.5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </span>
                                @else
                                    <span class="block w-5 h-5 rounded-full border-2 border-slate-300"></span>
                                @endif
                            </div>

                            <!-- Infos de la leçon -->
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs md:text-sm leading-snug line-clamp-2">
                                    {{ $lesson['title'] }}
                                </h4>
                                <span class="text-[10px] md:text-xs opacity-75 font-medium mt-0.5 block">
                                    @if($isActive)
                                        En lecture • {{ $lesson['duration'] }}
                                    @elseif($isQuiz)
                                        Quiz • {{ $lesson['questions_count'] }} questions
                                    @else
                                        {{ $lesson['duration'] }}
                                    @endif
                                </span>
                            </div>
                        </a>
                    @endforeach
                    <a class="flex px-3 gap-3 text-tertiary hover:cursor-pointer" href="{{ route('quizzes.index') }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                        </svg>
                        Quiz
                    </a>
                </div>
            </details>
        @endforeach
    </div>

</div>
