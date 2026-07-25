<x-layouts.admin.admin-layout>

    <div class="max-w-7xl mx-auto p-6">

        <div class="mb-8">
            <h1 class="text-xl font-extrabold text-primary">
                Ajouter un cours
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Créez un nouveau cours avec son image de couverture.
            </p>
        </div>

        <x-admin.course-steps/>

        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm">

            <form
                method="POST"
                action="{{ route('courses.store') }}"
                enctype="multipart/form-data"
                class="space-y-6"
            >

                @csrf

                {{-- Spécialité --}}
                <div>

                    <label
                        for="specialty_id"
                        class="block mb-2 text-sm font-bold text-slate-700"
                    >
                        Spécialité
                    </label>

                    <select
                        id="specialty_id"
                        name="specialty_id"

                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white text-sm"
                    >

                        <option value="">
                            Sélectionnez une spécialité
                        </option>

                        @foreach ($specialties as $specialty)

                            <option
                                value="{{ $specialty->id }}"
                                @selected(
                                    old(
                                        'specialty_id',

                                    ) == $specialty->id
                                )
                            >
                                {{ $specialty->program->name }}
                                —
                                {{ $specialty->name }}
                            </option>

                        @endforeach

                    </select>

                    @error('specialty_id')
                    <p class="mt-2 text-xs font-bold text-rose-600">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                {{-- Nom --}}
                <div>

                    <label
                        for="name"
                        class="block mb-2 text-sm font-bold text-slate-700"
                    >
                        Nom du cours
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="title"
                        value="{{ old('name') }}"
                        placeholder="Ex : Laravel de zéro à expert"

                        class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm"
                    >

                    @error('title')
                    <p class="mt-2 text-xs font-bold text-rose-600">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                {{-- Image --}}
                <div>

                    <label
                        for="image_cover"
                        class="block mb-2 text-sm font-bold text-slate-700"
                    >
                        Image de couverture
                    </label>

                    <x-courses.create.file-uploader/>

                    @error('image_cover')
                    <p class="mt-2 text-xs font-bold text-rose-600">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                {{-- Description --}}
                <div>

                    <label
                        for="description"
                        class="block mb-2 text-sm font-bold text-slate-700"
                    >
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        placeholder="Décrivez le contenu du cours..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm"
                    >{{ old('description') }}</textarea>

                    @error('description')
                    <p class="mt-2 text-xs font-bold text-rose-600">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                {{-- Actions --}}
                <div class="flex gap-3">

                    <a
                        href="{{ route('list-courses.index') }}"
                        class="px-5 py-3 rounded-xl border border-slate-200 text-sm font-bold text-slate-600"
                    >
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-3 rounded-xl bg-primary text-white text-sm font-bold"
                    >
                        Continuer vers les chapitres
                    </button>

                </div>

            </form>

        </div>

    </div>
</x-layouts.admin.admin-layout>
