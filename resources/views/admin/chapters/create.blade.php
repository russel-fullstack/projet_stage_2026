<x-layouts.admin.admin-layout>

    <div class="max-w-6xl mx-auto px-6 py-10">

        {{-- En-tête --}}
        <div class="mb-8">

            <p class="text-xs font-bold uppercase tracking-wider text-blue-600">
                Création d'une formation
            </p>

            <h1 class="mt-2 text-2xl font-extrabold text-primary">
                Ajouter les chapitres
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Organisez le contenu de votre cours en plusieurs chapitres.
            </p>

        </div>

        {{-- Progression --}}
        <x-admin.course-steps current="2" />

        {{-- Informations du cours --}}
        <div
            class="mb-8 flex flex-col sm:flex-row gap-5
            bg-white rounded-3xl border border-slate-200
            p-5 shadow-sm"
        >

            {{-- Image --}}
            <img
                src="{{ asset('storage/'. $course->image_cover) }}"
                alt="{{ $course->title }}"
                class="w-full sm:w-40 h-28 object-cover rounded-2xl"
            >

            <div class="flex-1">

                <p class="text-xs font-bold text-blue-600 uppercase">
                    Cours en création
                </p>

                <h2 class="mt-1 text-lg font-extrabold text-primary">
                    {{ $course->title }}
                </h2>

                <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                    {{ $course->description }}
                </p>

            </div>

        </div>

        {{-- Messages --}}
        @if (session('success'))

            <div
                class="mb-6 p-4 rounded-xl
                bg-emerald-50 border border-emerald-200
                text-sm font-bold text-emerald-700"
            >
                {{ session('success') }}
            </div>

        @endif

        {{-- Layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Formulaire --}}
            <div
                class="lg:col-span-1
                bg-white rounded-3xl border border-slate-200
                shadow-sm p-6 h-fit"
            >

                <div class="mb-6">

                    <h2 class="text-base font-extrabold text-primary">
                        Ajouter un chapitre
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Créez une nouvelle partie de votre cours.
                    </p>

                </div>

                <form
                    method="POST"
                    action="{{ route(
                        'chapiters.store',
                        $course
                    ) }}"
                    class="space-y-5"
                >

                    @csrf

                    {{-- Titre --}}
                    <div>

                        <label
                            for="title"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Titre du chapitre
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Ex : Introduction à Laravel"
                            class="w-full px-4 py-3 rounded-xl
                            border border-slate-200
                            text-sm font-medium
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary"
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
                            for="description"
                            class="block mb-2 text-xs font-bold text-slate-700"
                        >
                            Description
                            <span class="font-normal text-slate-400">
                                (optionnelle)
                            </span>
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="5"
                            placeholder="Décrivez le contenu de ce chapitre..."
                            class="w-full px-4 py-3 rounded-xl
                            border border-slate-200
                            text-sm
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary"
                        >{{ old('description') }}</textarea>

                        @error('description')

                        <p class="mt-2 text-xs font-bold text-rose-600">
                            {{ $message }}
                        </p>

                        @enderror

                    </div>

                    <button
                        type="submit"
                        class="w-full px-5 py-3 rounded-xl
                        bg-primary text-white
                        text-sm font-bold
                        hover:bg-[#001a4d]
                        transition-colors"
                    >
                        + Ajouter le chapitre
                    </button>

                </form>

            </div>

            {{-- Liste des chapitres --}}
            <div class="lg:col-span-2">

                <div
                    class="bg-white rounded-3xl border border-slate-200
                    shadow-sm overflow-hidden"
                >

                    {{-- En-tête --}}
                    <div
                        class="p-6 border-b border-slate-100
                        flex items-center justify-between"
                    >

                        <div>

                            <h2 class="text-base font-extrabold text-primary">
                                Chapitres du cours
                            </h2>

                            <p class="mt-1 text-xs text-slate-500">
                                {{ $course->chapiters->count() }}
                                chapitre(s) ajouté(s)
                            </p>

                        </div>

                        <div
                            class="w-10 h-10 rounded-xl
                            bg-blue-50 text-blue-600
                            flex items-center justify-center
                            font-extrabold"
                        >
                            {{ $course->chapiters->count() }}
                        </div>

                    </div>

                    {{-- Liste --}}
                    <div class="divide-y divide-slate-100">

                        @forelse ($course->chapiters as $index => $chapiter)

                            <div
                                class="p-5 flex items-start gap-4"
                            >

                                {{-- Numéro --}}
                                <div
                                    class="shrink-0 w-10 h-10 rounded-xl
                                    bg-slate-100 text-primary
                                    flex items-center justify-center
                                    text-sm font-extrabold"
                                >
                                    {{ $index + 1 }}
                                </div>

                                {{-- Contenu --}}
                                <div class="flex-1 min-w-0">

                                    <h3
                                        class="text-sm font-extrabold
                                        text-slate-800"
                                    >
                                        {{ $chapiter->title }}
                                    </h3>

                                    @if ($chapiter->description)

                                        <p
                                            class="mt-1 text-xs
                                            text-slate-500 line-clamp-2"
                                        >
                                            {{ $chapiter->description }}
                                        </p>

                                    @endif

                                    <p
                                        class="mt-2 text-[11px]
                                        font-bold text-slate-400"
                                    >
                                        {{ $chapiter->lessons->count() }}
                                        leçon(s)
                                    </p>

                                </div>

                                {{-- Actions --}}
                                <div class="flex items-center gap-2">

                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'chapiters.destroy',
                                            $chapiter
                                        ) }}"
                                        onsubmit="return confirm(
                                            'Voulez-vous vraiment supprimer ce chapitre ?'
                                        )"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="w-9 h-9 rounded-lg
                                            flex items-center justify-center
                                            text-rose-500
                                            hover:bg-rose-50
                                            transition-colors"
                                            title="Supprimer"
                                        >
                                            🗑️
                                        </button>

                                    </form>

                                </div>

                            </div>

                        @empty

                            <div class="p-12 text-center">

                                <div class="text-4xl mb-4">
                                    📚
                                </div>

                                <h3
                                    class="text-sm font-extrabold
                                    text-slate-700"
                                >
                                    Aucun chapitre pour le moment
                                </h3>

                                <p
                                    class="mt-2 text-xs
                                    text-slate-500"
                                >
                                    Commencez par ajouter votre premier chapitre.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </div>

            </div>

        </div>

        {{-- Navigation --}}
        <div
            class="mt-8 flex items-center justify-between
            bg-white rounded-3xl border border-slate-200
            p-5 shadow-sm"
        >

            <a
                href="{{ route('courses.create') }}"
                class="px-5 py-3 rounded-xl
                border border-slate-200
                text-sm font-bold text-slate-600
                hover:bg-slate-50"
            >
                ← Retour
            </a>

            @if ($course->chapiters->count() > 0)

                <a
                    href="{{ route(
                        'list-courses.lesson-create',
                        $course
                    ) }}"
                    class="px-6 py-3 rounded-xl
                    bg-primary text-white
                    text-sm font-bold
                    hover:bg-[#001a4d]"
                >
                    Continuer vers les leçons →
                </a>

            @else

                <button
                    type="button"
                    disabled
                    class="px-6 py-3 rounded-xl
                    bg-slate-200 text-slate-400
                    text-sm font-bold cursor-not-allowed"
                >
                    Ajoutez un chapitre pour continuer →
                </button>

            @endif

        </div>

    </div>

</x-layouts.admin.admin-layout>
