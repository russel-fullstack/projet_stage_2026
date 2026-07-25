<x-layouts.admin.admin-layout>

    <div class="max-w-7xl mx-auto p-6 space-y-6">

        <!-- En-tête de page -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="p-2 bg-[#002266]/10 text-primary  rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </span>
                  <div class="ml-3">
                      <h1 class="text-xl font-black text-primary tracking-tight">
                          Spécialités
                      </h1>
                      <p class="text-sm text-slate-500">
                          Gérez le catalogue des spécialités et rattachez-les aux filières correspondantes.
                      </p>
                  </div>
                </div>
            </div>

            <a
                href="{{ route('specialties.create') }}"
                class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-primary  hover:bg-[#001848] text-white rounded-xl text-sm font-bold shadow-md shadow-[#002266]/20 hover:shadow-lg transition-all duration-200 active:scale-95"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Nouvelle spécialité
            </a>
        </div>

        <!-- Alerte de succès -->
        @if (session('success'))
            <div class="flex items-start gap-3 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl shadow-sm">
                <div class="p-1 bg-emerald-100 text-emerald-600 rounded-lg shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-emerald-800">Succès</h3>
                    <p class="text-xs text-emerald-600 mt-0.5">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Conteneur Principal de la Table -->
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200/80">
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                            Informations sur la spécialité
                        </th>
                        <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                            Filière rattachée
                        </th>
                        <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-wider text-slate-500">
                            Actions
                        </th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                    @forelse ($specialties as $specialty)
                        <tr class="hover:bg-slate-50/80 transition-colors duration-150 group">

                            <!-- Nom & Description -->
                            <td class="px-6 py-4 min-w-[300px]">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-slate-100 text-primary  font-bold flex items-center justify-center text-sm border border-slate-200/60 shrink-0 group-hover:bg-primary  group-hover:text-white transition-colors">
                                        {{ strtoupper(substr($specialty->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-800 group-hover:text-primary  transition-colors">
                                            {{ $specialty->name }}
                                        </p>
                                        @if ($specialty->description)
                                            <p class="mt-1 text-xs text-slate-500 line-clamp-1">
                                                {{ $specialty->description }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <!-- Badge Filière -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200/60">
                                        {{ $specialty->program->name }}
                                    </span>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="inline-flex items-center justify-end gap-2">

                                    <a
                                        href="{{ route('specialties.show', $specialty) }}"
                                        class="inline-flex items-center justify-center w-8 h-8 text-slate-400 hover:text-blue-600 bg-slate-50 hover:bg-blue-50 rounded-lg transition-all"
                                        title="Voir les détails"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </a>

                                    <a
                                        href="{{ route('specialties.edit', $specialty) }}"
                                        class="inline-flex items-center justify-center w-8 h-8 text-slate-400 hover:text-amber-600 bg-slate-50 hover:bg-amber-50 rounded-lg transition-all"
                                        title="Modifier"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>

                                    <form method="POST" action="{{ route('specialties.destroy', $specialty) }}" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette spécialité ?');"
                                            class="inline-flex items-center justify-center w-8 h-8 text-slate-400 hover:text-rose-600 bg-slate-50 hover:bg-rose-50 rounded-lg transition-all"
                                            title="Supprimer"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-16 text-center">
                                <div class="max-w-sm mx-auto space-y-3">
                                    <div class="w-16 h-16 bg-slate-100 text-slate-400 rounded-2xl flex items-center justify-center mx-auto">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </div>
                                    <p class="text-base font-bold text-slate-700">Aucune spécialité trouvée</p>
                                    <p class="text-xs text-slate-500">Il n'y a actuellement aucune spécialité enregistrée dans le catalogue.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Footer & Pagination -->
            @if(method_exists($specialties, 'hasPages') && $specialties->hasPages())
                <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
                    {{ $specialties->links() }}
                </div>
            @endif

        </div>

    </div>

</x-layouts.admin.admin-layout>
