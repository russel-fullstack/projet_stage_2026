@props([
    'activeChapter' => null,
    'activeLesson' => null,
    'allLessons' => collect(),
    'previousLesson' => null,
    'nextLesson' => null,
])

@php

    $currentLessonNumber = $activeLesson
        ? $allLessons->search(
            fn ($lesson) => $lesson->id === $activeLesson->id
        ) + 1
        : 0;

    $totalLessonsCount = $allLessons->count();

@endphp


<div
    class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-slate-100 mb-5"
>

    {{-- INFORMATIONS --}}
    <div class="flex-1 min-w-0">

        {{-- CHAPITRE --}}
        <h1
            id="lesson-chapter-title"
            class="text-xl md:text-2xl font-extrabold text-primary leading-tight"
        >

            @if($activeChapter)

                Chapitre {{ $activeChapter->order }} :
                {{ $activeChapter->title }}

            @else

                Aucun chapitre

            @endif

        </h1>


        {{-- LEÇON --}}
        <p
            class="text-tertiary text-xs md:text-sm mt-1.5 font-medium flex items-center gap-2"
        >

            <span id="lesson-position">

                Leçon {{ $currentLessonNumber }}
                sur {{ $totalLessonsCount }}

            </span>

            <span class="inline-block w-1 h-1 rounded-full bg-slate-300"></span>

            <span id="lesson-duration">

                @if($activeLesson?->duration)

                    {{ $activeLesson->duration }}

                @else

                    Vidéo

                @endif

            </span>

        </p>

    </div>


    {{-- NAVIGATION --}}
    <div class="flex items-center gap-3">

        {{-- PRÉCÉDENT --}}
        @if($previousLesson)

            <a
                href="{{ route('courses.show', [
                    'course' => $previousLesson->chapiter->course_id,
                    'lesson' => $previousLesson->id
                ]) }}"
                data-autoplay="true"
                class="flex items-center justify-center gap-2 px-5 py-2.5 rounded-full border border-slate-300 text-primary font-semibold text-sm hover:bg-slate-50 transition-all duration-150"
            >

                <svg
                    class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5L8.25 12l7.5-7.5"
                    />
                </svg>

                <span>Précédent</span>

            </a>

        @else

            <button
                type="button"
                disabled
                class="flex items-center justify-center gap-2 px-5 py-2.5 rounded-full border border-slate-200 text-slate-300 font-semibold text-sm cursor-not-allowed"
            >

                <svg
                    class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5L8.25 12l7.5-7.5"
                    />
                </svg>

                <span>Précédent</span>

            </button>

        @endif


        {{-- SUIVANT --}}
        @if($nextLesson)

            <a
                href="{{ route('courses.show', [
                    'course' => $nextLesson->chapiter->course_id,
                    'lesson' => $nextLesson->id
                ]) }}"
                data-autoplay="true"
                class="flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-[#110B29] text-white font-semibold text-sm hover:bg-opacity-90 shadow-sm hover:shadow-md transition-all duration-150"
            >

                <span>Suivant</span>

                <svg
                    class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 4.5l7.5 7.5-7.5 7.5"
                    />
                </svg>

            </a>

        @else

            <button
                type="button"
                disabled
                class="flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-slate-200 text-slate-400 font-semibold text-sm cursor-not-allowed"
            >

                <span>Suivant</span>

                <svg
                    class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 4.5l7.5 7.5-7.5 7.5"
                    />
                </svg>

            </button>

        @endif

    </div>

</div>
