<x-layouts.admin.admin-layout>

    <div class="max-w-3xl mx-auto p-6 space-y-6">

        <!-- Bouton Retour rapide -->
        <div>
            <a
                href="{{ route('specialties.index') }}"
                class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-primary transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux spécialités
            </a>
        </div>

        <!-- En-tête du formulaire -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="p-2 bg-amber-500/10 text-amber-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </span>
                    <div class="ml-3 space-y-2">
                        <h1 class="text-xl font-black text-primary tracking-tight">
                            Modifier la Spécialité
                        </h1>
                        <p class="text-sm text-slate-500">
                            Mettez à jour les informations de la spécialité <strong class="text-slate-700">{{ $specialty->name }}</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de modification -->
        <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm">

            <form
                method="POST"
                action=""
                class="space-y-6"
            >
                @csrf
                @method('PUT')

                <!-- Sélection de la Filière -->
                <div>
                    <label
                        for="program_id"
                        class="block mb-2 text-xs font-bold uppercase tracking-wider text-slate-700"
                    >
                        Filière rattachée <span class="text-rose-500">*</span>
                    </label>

                    <div class="relative">
                        <select
                            id="program_id"
                            name="program_id"
                            required
                            class="w-full px-4 py-3 rounded-xl border text-sm appearance-none bg-white transition-all duration-200 focus:outline-none focus:ring-2 @error('program_id') border-rose-300 bg-rose-50/30 text-rose-900 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:ring-primary/20 focus:border-primary text-slate-800 @enderror"
                        >
                            <option value="" disabled>
                                Sélectionnez une filière
                            </option>

                            @foreach ($programs as $program)
                                <option
                                    value="{{ $program->id }}"
                                    @selected(old('program_id', $specialty->program_id) == $program->id)
                                >
                                    {{ $program->name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Flèche déroulante personnalisée -->
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    @error('program_id')
                    <p class="mt-2 text-xs font-bold text-rose-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Champ Nom de la spécialité -->
                <div>
                    <label
                        for="name"
                        class="block mb-2 text-xs font-bold uppercase tracking-wider text-slate-700"
                    >
                        Nom de la spécialité <span class="text-rose-500">*</span>
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $specialty->name) }}"
                        required
                        placeholder="Ex : Développement Web, Mobile, SGBD..."
                        class="w-full px-4 py-3 rounded-xl border text-sm transition-all duration-200 placeholder:text-slate-400 focus:outline-none focus:ring-2 @error('name') border-rose-300 bg-rose-50/30 text-rose-900 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:ring-primary/20 focus:border-primary text-slate-800 @enderror"
                    >

                    @error('name')
                    <p class="mt-2 text-xs font-bold text-rose-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Champ Description -->
                <div>
                    <label
                        for="description"
                        class="block mb-2 text-xs font-bold uppercase tracking-wider text-slate-700"
                    >
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Présentez les objectifs ou spécificités de cette spécialité..."
                        class="w-full px-4 py-3 rounded-xl border text-sm transition-all duration-200 placeholder:text-slate-400 focus:outline-none focus:ring-2 @error('description') border-rose-300 bg-rose-50/30 text-rose-900 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:ring-primary/20 focus:border-primary text-slate-800 @enderror"
                    >{{ old('description', $specialty->description) }}</textarea>

                    @error('description')
                    <p class="mt-2 text-xs font-bold text-rose-600 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Actions du formulaire -->
                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">

                    <a
                        href="{{ route('specialties.index') }}"
                        class="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50 transition-colors"
                    >
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary hover:bg-[#001848] text-white text-xs font-bold shadow-md shadow-primary/20 hover:shadow-lg transition-all active:scale-95"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Enregistrer les modifications
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-layouts.admin.admin-layout>
