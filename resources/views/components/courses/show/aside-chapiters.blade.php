{{-- resources/views/components/courses/show/aside-chapiters.blade.php --}}

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col divide-y divide-slate-100">

    {{-- PROGRESSION DU COURS --}}
    <div class="p-6 space-y-3">
        <h3 class="text-base font-extrabold text-[#110B29]">
            Progression du cours
        </h3>

        <div class="flex items-center justify-between text-xs font-semibold">
            <span class="text-slate-500">
                {{ $percentComplete }}% complété
            </span>
            <span class="text-[#110B29]">
                {{ $completedLessons }}/{{ $totalLessons }} leçons
            </span>
        </div>

        <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
            <div class="h-full bg-emerald-500 rounded-full transition-all duration-500"
                style="width: {{ $percentComplete }}%"></div>
        </div>
    </div>

    {{-- CHAPITRES --}}
    <div class="divide-y divide-slate-100">

        @forelse($chapters as $chapter)

            <details class="group w-full" @if ($loop->first) open @endif>

                {{-- TITRE DU CHAPITRE --}}
                <summary class="list-none [&::-webkit-details-marker]:hidden w-full px-6 py-4 flex items-center justify-between text-left hover:bg-slate-50/50 cursor-pointer transition-colors duration-150 select-none">

                    <span class="text-xs font-extrabold uppercase tracking-wider text-slate-500 group-open:text-slate-800">
                        <span class="underline">Chapitre {{ $chapter->order }}</span>: {{ $chapter->title }}
                    </span>

                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200 group-open:rotate-180 group-open:text-slate-800" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </summary>

                {{-- LEÇONS --}}
                <div class="px-4 pb-4 space-y-2">

                    @forelse($chapter->lessons as $lesson)
                        @php
                            $videoUrl = $lesson->video_url
                                ? app(\App\Services\MinioService::class)->url($lesson->video_url)
                                : null;

                            $isActive = $loop->parent->first && $loop->first;
                        @endphp

                        {{-- LEÇON --}}
                        <button
                            type="button"
                            class="lesson-item flex items-start gap-3 p-3 rounded-xl transition-all duration-150 w-full text-left {{ $isActive ? 'bg-backcheck text-primary font-semibold' : 'text-slate-700 hover:bg-slate-50' }} {{ !$videoUrl ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer' }}"
                            data-lesson-id="{{ $lesson->id }}"
                            data-video-url="{{ $videoUrl ?? '' }}"
                            data-video-title="{{ $lesson->title }}"
                            @if (!$videoUrl) disabled @endif
                        >

                            {{-- ICÔNE DE LECTURE --}}
                            <div class="shrink-0 mt-0.5">
                                @if ($videoUrl)
                                    <span class="flex items-center justify-center w-5 h-5 rounded-full border-2 border-slate-300">
                                        <svg class="w-2.5 h-2.5 ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </span>
                                @endif
                            </div>

                            {{-- INFORMATIONS --}}
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs md:text-sm leading-snug line-clamp-2">
                                    {{ $lesson->order }}. {{ $lesson->title }}
                                </h4>

                                <span class="lesson-status text-[10px] md:text-xs opacity-75 font-medium mt-0.5 block">
                                    @if ($isActive)
                                        En lecture
                                    @elseif($videoUrl)
                                        Vidéo disponible
                                    @else
                                        Vidéo indisponible
                                    @endif
                                </span>
                            </div>

                            {{-- ICÔNE VIDÉO --}}
                            @if ($videoUrl)
                                <svg class="w-4 h-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 5h8a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                                </svg>
                            @endif

                        </button>

                    @empty
                        <p class="px-3 py-2 text-sm text-slate-500">
                            Aucune leçon dans ce chapitre.
                        </p>
                    @endforelse

                </div>

            </details>

        @empty
            <div class="p-6 text-center">
                <p class="text-sm text-slate-500">
                    Aucun chapitre disponible.
                </p>
            </div>
        @endforelse

    </div>

    {{-- QUIZ --}}
    <button class="flex px-8 py-6 gap-3 text-tertiary hover:bg-slate-50 transition-colors cursor-not-allowed">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
        </svg>
        <span>Quiz</span>
    </button>

</div>
