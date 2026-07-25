<x-layouts.admin.admin-layout>

    <div class="max-w-7xl mx-auto p-6 space-y-6">

        <!-- Bouton de retour -->
        <div>
            <a
                href="{{ route('programs.index') }}"
                class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-primary transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux filières
            </a>
        </div>

        <!-- En-tête de la Filière -->
        <div class="bg-white p-6  sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="space-y-2 max-w-3xl">
                <div class="flex items-center gap-3">
                    <span class="p-4 bg-primary/10 text-primary rounded-xl font-bold text-sm">
                        {{ strtoupper(substr($program->name, 0, 2)) }}
                    </span>
                    <div class="ml-3 space-y-2">
                        <h1 class="text-2xl font-black text-primary tracking-tight">
                            {{ $program->name }}
                        </h1>
                        @if($program->description)
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $program->description }}
                            </p>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Bouton d'action principale -->
            <a
                href="{{ route('specialties.create', ['program' => $program]) }}"
                class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-primary hover:bg-[#001848] text-white rounded-xl text-xs font-bold shadow-md shadow-primary/20 hover:shadow-lg transition-all shrink-0 active:scale-95"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Ajouter une spécialité
            </a>
        </div>

        <!-- Section Spécialités -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-base font-bold text-slate-800 flex items-center gap-2">
                    <span>Spécialités associées</span>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                        {{ $program->specialties->count() }}
                    </span>
                </h2>
            </div>

            <!-- Grille des spécialités -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                @forelse ($program->specialties as $specialty)

                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-4 group">

                        <div class="space-y-2">
                            <div class="flex items-start justify-between gap-2">
                                <h3 class="text-base font-bold text-slate-800 group-hover:text-primary transition-colors">
                                    {{ $specialty->name }}
                                </h3>
                                <p class="text-xs font-bold text-accent group-hover:text-primary transition-colors">
                                    {{ $specialty->description }}
                                </p>
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            </div>

                            @if(isset($specialty->description) && $specialty->description)
                                <p class="text-xs text-slate-500 line-clamp-2">
                                    {{ $specialty->description }}
                                </p>
                            @endif
                        </div>

                        <!-- Bar d'actions de la carte -->
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-2">

                            <a
                                href="{{ route('specialties.edit', $specialty) }}"
                                class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-amber-600 bg-slate-50 hover:bg-amber-50 rounded-lg transition-all"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Modifier
                            </a>

                            <form
                                method="POST"
                                action="{{ route('specialties.destroy', $specialty) }}"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette spécialité ?');"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-rose-600 bg-slate-50 hover:bg-rose-50 rounded-lg transition-all"
                                >
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    Supprimer
                                </button>
                            </form>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full bg-white p-12 rounded-2xl border border-slate-200/80 shadow-sm text-center">
                        <div class="max-w-xs mx-auto space-y-3">
                            <div class="w-12 h-12 bg-slate-100 text-slate-400 rounded-xl flex items-center justify-center mx-auto">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            <p class="text-sm font-bold text-slate-700">Aucune spécialité pour le moment</p>
                            <p class="text-xs text-slate-400">Ajoutez la première spécialité rattachée à la filière {{ $program->name }}.</p>
                        </div>
                    </div>

                @endforelse

            </div>
        </div>

    </div>

</x-layouts.admin.admin-layout>
