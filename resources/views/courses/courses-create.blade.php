<x-layouts.admin.admin-layout>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">

        <!-- HEADER DE PAGE -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3 py-1 mb-2 rounded-full bg-backcheck border border-slate-200/60 text-primary text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                    Éditeur de cours
                </div>
                <h1 class="text-3xl font-extrabold text-primary tracking-tight">
                    Nouveau cours
                </h1>
                <p class="text-sm text-primary">
                    Définissez les bases de votre module avant d'ajouter le programme pédagogique.
                </p>
            </div>

            <a href="{{ route('courses.index') }}"
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200/80 bg-white text-xs font-bold text-primary hover:bg-slate-50 hover:border-slate-300 transition-all duration-200 shadow-sm active:scale-[0.98]">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Retour
            </a>
        </div>

        <!-- INDICATEUR D'ÉTAPES -->
        <div class="pt-3">
            <x-admin.course-steps />
        </div>


        <!-- FORMULAIRE -->
        <form
            method="POST"
            action="{{ route('courses.store') }}"
            enctype="multipart/form-data"
            class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start"
        >
            @csrf

            <!-- SECTION GAUCHE : Informations (7/12) -->
            <div class="lg:col-span-7 bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-6">

                <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary text-white font-bold text-xs">01</span>
                    <h2 class="text-base font-bold text-primary">Informations générales</h2>
                </div>

                <!-- Spécialité -->
                <div class="space-y-2">
                    <label for="specialty_id" class="block text-xs font-bold uppercase tracking-wider text-primary">
                        Spécialité & Programme <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <select
                            id="specialty_id"
                            name="specialty_id"
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none appearance-none cursor-pointer"
                        >
                            <option value="" disabled selected>Sélectionnez une option...</option>
                            @foreach ($specialties as $specialty)
                                <option
                                    value="{{ $specialty->id }}"
                                    @selected(old('specialty_id') == $specialty->id)
                                >
                                    {{ $specialty->program->name }} — {{ $specialty->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                        </div>
                    </div>
                    @error('specialty_id')
                        <p class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Nom du cours -->
                <div class="space-y-2">
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-primary">
                        Titre du cours <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="title"
                        value="{{ old('title', old('name')) }}"
                        placeholder="ex. Développer une API REST avec Laravel"
                        class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none"
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
                    <label for="description" class="block text-xs font-bold uppercase tracking-wider text-primary">
                        Description
                    </label>
                    <textarea
                        id="description"
                        name="description"
                        rows="6"
                        placeholder="Résumez en quelques lignes le contenu et les objectifs du cours..."
                        class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none resize-none"
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            <!-- SECTION DROITE : Média & Actions (5/12) -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Zone Image -->
                <div class="bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-6">
                    <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary text-white font-bold text-xs">02</span>
                        <h2 class="text-base font-bold text-primary">Visuel de couverture</h2>
                    </div>

                    <div class="space-y-3">
                        <div class="p-1 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-slate-50 transition-colors">
                            <x-courses.create.file-uploader />
                        </div>

                        @error('image_cover')
                            <p class="text-xs font-semibold text-rose-600 flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/60 flex items-start gap-3">
                        <svg class="w-5 h-5 text-slate-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                        <p class="text-xs text-primary leading-relaxed font-normal">
                            Format recommandé : <strong class="text-primary font-semibold">16:9</strong> (ex. 1280×720 px). Fichiers acceptés : PNG, JPG, WebP.
                        </p>
                    </div>
                </div>

                <!-- Zone d'Action finale -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-3xl border border-slate-200/80 shadow-sm flex flex-col sm:flex-row items-center gap-3">
                    <a
                        href="{{ route('courses.index') }}"
                        class="w-full sm:w-1/3 py-3.5 px-4 rounded-xl border border-slate-200/80 text-center text-xs font-bold text-primary hover:bg-slate-50 transition-all active:scale-[0.98]"
                    >
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="w-full sm:w-2/3 py-3.5 px-6 rounded-xl bg-primary hover:bg-primary text-white text-xs font-bold tracking-wide shadow-md shadow-primary/10 hover:shadow-lg hover:shadow-primary/20 transition-all duration-200 active:scale-[0.98] flex items-center justify-center gap-2 group"
                    >
                        <span>Continuer</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </button>
                </div>

            </div>

        </form>

    </div>

</x-layouts.admin.admin-layout>
