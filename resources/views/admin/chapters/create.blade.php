<x-layouts.admin.admin-layout>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- EN-TÊTE DE LA PAGE -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3 py-1 mb-2 rounded-full bg-blue-50 border border-primary/10 text-primary/80 text-xs font-bold">
                    <span class="w-2 h-2 rounded-full bg-primary/80 animate-pulse"></span>
                    Création d'une formation
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-primary tracking-tight">
                    Ajouter les chapitres
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

        <!-- PROGRESSION DES ÉTAPES -->
            <x-admin.course-steps current="2" />

        <!-- CARTE DE RÉSUMÉ DU COURS -->

            <div class="flex-1 space-y-2 text-center sm:text-left">
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
         
        </div>

        <!-- NOTIFICATION DE SUCCÈS -->
        @if (session('success'))
            <div class="p-4 rounded-2xl bg-emerald-50/80 border border-emerald-200/80 text-xs sm:text-sm font-bold text-emerald-800 flex items-center gap-3 shadow-sm">
                <div class="w-7 h-7 rounded-lg bg-emerald-500/10 flex items-center justify-center shrink-0 text-emerald-600">
                    <svg class="w-4 h-4 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                </div>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- CONTENU EN 2 COLONNES -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- COLONNE GAUCHE : Formulaire (5/12) -->
            <div class="lg:col-span-5 bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 shadow-sm p-6 sm:p-8 space-y-6">

                <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary/80 text-white font-bold text-xs shadow-md shadow-primary/50/20">+</span>
                    <h2 class="text-base font-extrabold text-primary">Créer un chapitre</h2>
                </div>

                <form
                    method="POST"
                    action="{{ route('chapiters.store', $course) }}"
                    class="space-y-5"
                >
                    @csrf

                    <!-- Titre -->
                    <div class="space-y-2">
                        <label for="title" class="block text-xs font-bold uppercase tracking-wider text-slate-500">
                            Titre du chapitre <span class="text-rose-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="ex. Les fondamentaux de la syntaxe"
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary/80 focus:ring-4 focus:ring-primary/80/10 transition-all duration-200 outline-none"
                        >
                        @error('title')
                            <p class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="space-y-2">
                        <label for="description" class="block text-xs font-bold uppercase tracking-wider text-slate-500">
                            Description <span class="font-normal text-slate-400 lowercase">(optionnel)</span>
                        </label>
                        <textarea
                            id="description"
                            name="description"
                            rows="4"
                            placeholder="Aperçu des objectifs de cette section..."
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary/80 focus:ring-4 focus:ring-primary/80/10 transition-all duration-200 outline-none resize-none"
                        >{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 rounded-xl bg-primary/90 cursor-pointer text-white text-xs font-extrabold tracking-wide shadow-md shadow-primary/50/20 hover:shadow-lg hover:shadow-primary/50/30 transition-all duration-200 active:scale-[0.98] flex items-center justify-center gap-2 group"
                    >
                        <span>Ajouter le chapitre</span>
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                    </button>
                </form>

            </div>

            <!-- COLONNE DROITE : Liste des chapitres (7/12) -->
            <div class="lg:col-span-7 space-y-6">

                <div class="bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">

                    <!-- En-tête de la liste -->
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-extrabold text-primary">
                                Programme du cours
                            </h2>
                            <p class="text-xs font-medium text-slate-400 mt-0.5">
                                {{ $course->chapiters->count() }} chapitre(s) actuellement configuré(s)
                            </p>
                        </div>

                        <span class="px-3 py-1 rounded-xl bg-blue-50 text-primary/80 font-black text-xs border border-primary/10">
                            {{ $course->chapiters->count() }}
                        </span>
                    </div>

                    <!-- Liste fluide des chapitres -->
                    <div class="divide-y divide-slate-100">
                        @forelse ($course->chapiters as $index => $chapiter)
                            <div class="p-5 sm:p-6 flex items-start gap-4 hover:bg-slate-50/60 transition-colors group">

                                <!-- Numéro d'ordre -->
                                <div class="shrink-0 w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center text-xs font-black shadow-sm group-hover:bg-primary/80 transition-colors">
                                    0{{ $index + 1 }}
                                </div>

                                <!-- Détails du chapitre -->
                                <div class="flex-1 min-w-0 space-y-1">
                                    <h3 class="text-sm font-bold text-primary leading-snug">
                                        {{ $chapiter->title }}
                                    </h3>

                                    @if ($chapiter->description)
                                        <p class="text-xs text-slate-500 font-medium line-clamp-2 leading-relaxed">
                                            {{ $chapiter->description }}
                                        </p>
                                    @endif

                                    <div class="pt-1.5 flex items-center gap-2">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-600 text-[11px] font-semibold">
                                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"/></svg>
                                            {{ $chapiter->lessons->count() }} leçon(s)
                                        </span>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="shrink-0">
                                    <form
                                        method="POST"
                                        action="{{ route('chapiters.destroy', $chapiter) }}"
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer ce chapitre ?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="w-9 h-9 rounded-xl border border-slate-200/80 bg-white text-slate-400 hover:text-rose-600 hover:border-rose-200 hover:bg-rose-50/50 transition-all duration-200 flex items-center justify-center shadow-sm"
                                            title="Supprimer ce chapitre"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        @empty
                            <div class="p-12 text-center space-y-3">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-primary/80 flex items-center justify-center mx-auto shadow-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18c-2.305 0-4.408.867-6 2.292m0-14.25v14.25"/></svg>
                                </div>
                                <h3 class="text-sm font-extrabold text-primary tracking-tight">
                                    Aucun chapitre pour le moment
                                </h3>
                                <p class="text-xs font-medium text-slate-400 max-w-xs mx-auto">
                                    Remplissez le formulaire de gauche pour structurer les grandes parties de ce cours.
                                </p>
                            </div>
                        @endforelse
                    </div>

                </div>

            </div>

        </div>

        <!-- BARRE DE NAVIGATION EN BAS DE PAGE -->
        <div class="bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 p-5 shadow-sm flex items-center justify-between gap-4">
            <a
                href="{{ route('courses.create') }}"
                class="px-5 py-3 rounded-xl border border-slate-200/80 text-xs font-bold text-slate-600 hover:bg-slate-50 transition-all active:scale-[0.98]"
            >
                ← Retour
            </a>

            @if ($course->chapiters->count() > 0)
                <a
                    href="{{ route('list-courses.lesson-create', $course) }}"
                    class="px-6 py-3 rounded-xl bg-primary/90  text-white text-xs font-extrabold tracking-wide shadow-md shadow-primary/50/20 hover:shadow-lg hover:shadow-primary/50/30 transition-all active:scale-[0.98] flex items-center gap-2 group"
                >
                    <span>Continuer vers les leçons</span>
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            @else
                <button
                    type="button"
                    disabled
                    class="px-6 py-3 rounded-xl bg-slate-100 text-slate-400 text-xs font-bold cursor-not-allowed border border-slate-200/60"
                >
                    Ajoutez au moins un chapitre pour continuer →
                </button>
            @endif
        </div>

    </div>

</x-layouts.admin.admin-layout>
