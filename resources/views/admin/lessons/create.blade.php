<x-layouts.admin.admin-layout>

    <div class="max-w-7xl mx-auto px-6 py-10">

        {{-- En-tête --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-9">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3 py-1 mb-2 rounded-full bg-backcheck border border-primary/10 text-primary text-xs font-bold">
                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                    Création d'une formation
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-primary tracking-tight">
                    Ajouter les leçons
                </h1>
                <p class="text-sm font-medium text-slate-500">
                    Organisez et structurez le programme pédagogique de votre cours.
                </p>
            </div>

            <a href="{{ route('courses.create') }}"
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200/80 bg-white text-xs font-bold text-slate-700 hover:bg-slate-50 hover:border-slate-300 transition-all duration-200 shadow-sm active:scale-[0.98] self-start md:self-center">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Étape précédente
            </a>
        </div>

           {{-- Progression --}}
        <x-admin.course-steps current="3" />

        {{-- Cours --}}
        <div class="mb-8 bg-white rounded-3xl border border-slate-200 p-5 shadow-sm">

            <div class="flex flex-col sm:flex-row gap-5">

                <img
                    src="{{ asset('storage/' . $course->image_cover) }}"
                    alt="{{ $course->title }}"
                    class="w-full sm:w-40 h-28 object-cover rounded-2xl"
                >

                <div>

                    <p class="text-xs font-bold uppercase text-secondary">
                        Cours en création
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-primary">
                        {{ $course->title }}
                    </h2>

                    <p class="mt-2 text-sm text-slate-500">
                        {{ $course->chapiters->count() }}
                        chapitre(s)
                    </p>

                </div>

            </div>

        </div>

        {{-- Message --}}
        @if (session('success'))

            <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-sm font-bold text-emerald-700">
                {{ session('success') }}
            </div>

        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Formulaire --}}
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 h-fit">

                <h2 class="text-base font-extrabold text-primary">
                    Ajouter une leçon
                </h2>

                <p class="mt-1 mb-6 text-xs text-slate-500">
                    Ajoutez une nouvelle vidéo à votre formation.
                </p>

                <form
                    method="POST"
                    action="{{ route(
                        'list-courses.lessons.store',
                        $course
                    ) }}"
                    enctype="multipart/form-data"
                    class="space-y-5"
                >

                    @csrf

                    {{-- Chapitre --}}
                    <div>

                        <label
                            for="chapiter_id"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Chapitre
                        </label>

                        <select
                            id="chapiter_id"
                            name="chapiter_id"

                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm"
                        >

                            <option value="">
                                Sélectionner un chapitre
                            </option>

                            @foreach ($course->chapiters as $chapter)

                                <option
                                    value="{{ $chapter->id }}"
                                    {{ old('chapiter_id') == $chapter->id ? 'selected' : '' }}
                                >
                                    {{ $chapter->order }}.
                                    {{ $chapter->title }}
                                </option>

                            @endforeach

                        </select>

                        @error('chapiter_id')

                        <p class="mt-2 text-xs font-bold text-rose-600">
                            {{ $message }}
                        </p>

                        @enderror

                    </div>

                    {{-- Titre --}}
                    <div>

                        <label
                            for="title"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Titre de la leçon
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"

                            placeholder="Ex : Installation de Laravel"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm"
                        >

                        @error('title')

                        <p class="mt-2 text-xs font-bold text-rose-600">
                            {{ $message }}
                        </p>

                        @enderror

                    </div>

                    {{-- Description --}}
                    <div>

                        <label
                            for="content"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Contenu
                        </label>

                        <textarea
                            id="content"
                            name="content"
                            rows="4"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm"
                        >{{ old('content') }}</textarea>

                    </div>

                    {{-- Vidéo --}}
                    <div>

                        <label
                            for="video"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Vidéo
                        </label>

                        <input
                            type="file"
                            id="video"
                            name="video_url"
                            accept="video/mp4,video/webm,video/quicktime"

                            class="w-full text-sm"
                        >

                        <p class="mt-2 text-[11px] text-slate-400">
                            Formats acceptés : MP4, WebM, MOV.
                        </p>

                        @error('video_url')

                        <p class="mt-2 text-xs font-bold text-rose-600">
                            {{ $message }}
                        </p>

                        @enderror

                    </div>

                    <button
                        type="submit"
                        class="w-full px-5 py-3 rounded-xl bg-primary text-white text-sm font-bold hover:bg-[#001a4d]"
                    >
                        + Ajouter la leçon
                    </button>

                </form>

            </div>

            {{-- Liste --}}
            <div class="lg:col-span-2 space-y-6">

                @forelse ($course->chapiters as $chapter)

                    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">

                        <div class="p-5 border-b border-slate-100">

                            <p class="text-xs font-bold text-secondary pb-1">
                                CHAPITRE {{ $chapter->order }}
                            </p>

                            <h2 class="mt-1 text-base font-extrabold text-primary">
                                {{ $chapter->title }}
                            </h2>

                        </div>

                        <div class="divide-y divide-slate-100">

                            @forelse ($chapter->lessons as $lesson)

                                <div class="p-5 flex items-center gap-4">

                                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center">
                                        🎥
                                    </div>

                                    <div class="flex-1">

                                        <h3 class="text-sm font-bold text-slate-800">
                                            {{ $lesson->title }}
                                        </h3>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Leçon {{ $lesson->order }}
                                        </p>

                                    </div>

                                </div>

                            @empty

                                <div class="p-6 text-center text-xs text-slate-500">
                                    Aucune leçon ajoutée dans ce chapitre.
                                </div>

                            @endforelse

                        </div>

                    </div>

                @empty

                    <div class="bg-white rounded-3xl p-10 text-center">
                        Aucun chapitre disponible.
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</x-layouts.admin.admin-layout>
