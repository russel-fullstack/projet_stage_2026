<x-layouts.admin.admin-layout>

    <div class="p-6 max-w-7xl mx-auto space-y-6">

        <!-- En-tête de page & Action principale -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="p-2 bg-primary/10 text-primary rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                        </svg>
                    </span>
                    <div class="ml-3">
                        <h1 class="text-xl font-black text-primary tracking-tight">
                            Gestion des Filières
                        </h1>
                        <p class="text-sm text-slate-500">
                            Organisez les départements académiques et suivez les parcours de formation.
                        </p>
                    </div>
                </div>
            </div>

            <a
                href="{{ route('programs.create') }}"
                class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-primary hover:bg-[#001848] text-white rounded-xl text-sm font-bold shadow-md shadow-primary/20 hover:shadow-lg transition-all duration-200 active:scale-95"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Nouvelle filière
            </a>
        </div>

        <!-- Conteneur Table avec Barre d'Outils -->
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">

            <!-- Barre de filtre/recherche visuelle -->
            <div class="p-4 border-b border-slate-100 bg-slate-50/50 flex flex-col sm:flex-row items-center justify-between gap-3">
                <div class="relative w-full sm:w-72">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </span>
                    <input
                        type="text"
                        placeholder="Rechercher une filière..."
                        class="w-full pl-9 pr-4 py-2 text-sm bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                    >
                </div>
                <span class="text-xs text-slate-500 font-medium self-end sm:self-center">
                    Affichage des données enregistrées
                </span>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200/80">
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                            Intitulé de la filière
                        </th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                            Spécialités
                        </th>
                        <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-wider text-slate-500">
                            Actions
                        </th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                    @forelse ($programs as $program)
                        <tr class="hover:bg-slate-50/80 transition-colors duration-150 group">

                            <!-- Nom & Avatar / Icône générée -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-slate-100 text-primary font-bold flex items-center justify-center text-sm border border-slate-200/60 group-hover:bg-primary group-hover:text-white transition-colors">
                                        {{ strtoupper(substr($program->name, 0, 2)) }}
                                    </div>
                                    <span class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors">
                                            {{ $program->name }}
                                        </span>
                                </div>
                            </td>

                            <!-- Spécialités (Badge Moderne) -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        {{ $program->specialties_count }} Spécialité(s)
                                    </span>
                            </td>

                            <!-- Actions avec boutons stylisés -->
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                <div class="inline-flex items-center justify-end gap-2">
                                    <a
                                        href="{{ route('programs.show', $program) }}"
                                        class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-blue-600 bg-slate-100 hover:bg-blue-50 rounded-lg transition-all"
                                    >
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        Voir
                                    </a>

                                    <a
                                        href="{{ route('programs.edit', $program) }}"
                                        class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-bold text-slate-600 hover:text-amber-600 bg-slate-100 hover:bg-amber-50 rounded-lg transition-all"
                                    >
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                        Modifier
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-16 text-center">
                                <div class="max-w-sm mx-auto space-y-3">
                                    <div class="w-16 h-16 bg-slate-100 text-slate-400 rounded-2xl flex items-center justify-center mx-auto">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                    </div>
                                    <p class="text-base font-bold text-slate-700">Aucune filière trouvée</p>
                                    <p class="text-xs text-slate-500">Il n'y a actuellement aucune filière enregistrée dans le système.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Footer & Pagination -->
            @if($programs->hasPages())
                <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
                    {{ $programs->links() }}
                </div>
            @endif
        </div>

    </div>

</x-layouts.admin.admin-layout>
