<x-layouts.admin.admin-layout>

    <div class="max-w-7xl mx-auto p-6 space-y-6">

        <!-- Fil d'Ariane & Bouton Retour -->
        <div class="flex items-center justify-between">
            <a
                href="{{ route('specialties.index') }}"
                class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-primary  transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux spécialités
            </a>

            <!-- Fil d'Ariane épuré -->
            <nav class="hidden sm:flex items-center gap-2 text-xs font-bold text-slate-400">
                <a href="{{ route('specialties.index') }}" class="hover:text-slate-600 transition-colors">Spécialités</a>
                <span>/</span>
                <span class="text-primary ">{{ $specialty->name }}</span>
            </nav>
        </div>

        <!-- En-tête de la Spécialité -->
        <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="space-y-3 max-w-3xl">
                <div class="flex items-center gap-3">
                    <span class="p-4 bg-secondary/20 text-primary  rounded-xl font-bold text-sm">
                        {{ strtoupper(substr($specialty->name, 0, 2)) }}
                    </span>
                    <div class="ml-3 space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700 border border-blue-200/60">
                                🎓 {{ $specialty->program->name }}
                            </span>
                        </div>
                        <h1 class="text-2xl font-black text-primary  tracking-tight mt-0.5">
                            {{ $specialty->name }}
                        </h1>
                        <div>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $specialty->description ?: 'Aucune description rédigée pour cette spécialité.' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Description intégrée dans l'en-tête -->
            </div>

            <!-- Bouton de modification principale -->
            <div class="shrink-0 flex items-center gap-3">
                <a
                    href="{{ route('specialties.edit', $specialty) }}"
                    class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-slate-100 hover:bg-amber-50 text-slate-700 hover:text-amber-700 border border-slate-200 rounded-xl text-xs font-bold transition-all active:scale-95"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Modifier la spécialité
                </a>
            </div>
        </div>

        <!-- Section Cours associés -->
        <div class="space-y-4">

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="space-y-1">
                    <h2 class="text-base font-bold text-slate-800 flex items-center gap-2">
                        <span>Programme & Cours de formation</span>
                        <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                            {{ count($specialty->courses) }}
                        </span>
                    </h2>
                    <p class="text-xs text-slate-500">
                        Liste des modules et enseignements rattachés à cette spécialité.
                    </p>
                </div>

                <a
                    href="{{ route('courses.create', ['specialty' => $specialty]) }}"
                    class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-primary  hover:bg-[#001848] text-white rounded-xl text-xs font-bold shadow-md shadow-primary /20 hover:shadow-lg transition-all shrink-0 active:scale-95"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Ajouter un cours
                </a>
            </div>

            <!-- Grille des cours -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                @forelse ($specialty->courses as $course)

                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-4 group">

                        <div class="space-y-2">
                            <div class="flex items-start justify-between gap-2">
                                <h3 class="text-base font-bold text-slate-800 group-hover:text-primary  transition-colors">
                                    {{ $course->name }}
                                </h3>
                                <span class="p-1.5 bg-blue-50 text-blue-600 rounded-lg shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </span>
                            </div>

                            @if ($course->description)
                                <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed">
                                    {{ $course->description }}
                                </p>
                            @else
                                <p class="text-xs text-slate-400 italic">
                                    Aucune description courte disponible.
                                </p>
                            @endif
                        </div>

                        <!-- Actions du cours -->
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-2">

                            <a
                                href="{{ route('courses.show', $course) }}"
                                class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-blue-600 bg-slate-50 hover:bg-blue-50 rounded-lg transition-all"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                Voir
                            </a>

                            <a
                                href="{{ route('courses.edit', $course) }}"
                                class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-amber-600 bg-slate-50 hover:bg-amber-50 rounded-lg transition-all"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Modifier
                            </a>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full bg-white p-12 rounded-2xl border border-slate-200/80 shadow-sm text-center">
                        <div class="max-w-xs mx-auto space-y-3">
                            <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mx-auto">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <p class="text-sm font-bold text-slate-700">Aucun cours associé</p>
                            <p class="text-xs text-slate-400">Il n'y a actuellement aucun cours enregistré sous la spécialité {{ $specialty->name }}.</p>
                        </div>
                    </div>

                @endforelse

            </div>
        </div>

    </div>

</x-layouts.admin.admin-layout>
