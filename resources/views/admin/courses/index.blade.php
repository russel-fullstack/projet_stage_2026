<x-layouts.admin.admin-layout>
    <div class="space-y-8">

        <!-- EN-TÊTE DE LA PAGE -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-3xl font-black text-primary tracking-tight">Gestion des cours</h2>
                <p class="text-slate-500 text-sm mt-1">Surveillez, approuvez et gérez le catalogue de formation Lumina.</p>
            </div>
        </div>

        <!-- MESSAGE DE SUCCÈS -->
        @if (session('success'))
            <div class="flex items-center gap-3 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl text-emerald-800 text-xs font-bold shadow-sm">
                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- BLOC DES 4 CARTES STATISTIQUES RÉDUITES -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Cours -->
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Cours</p>
                <h4 class="text-2xl font-black text-primary">{{ method_exists($courses, 'total') ? $courses->total() : count($courses) }}</h4>
                <span class="text-[10px] text-emerald-600 font-extrabold flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path></svg>
                    Catalogue actif
                </span>
            </div>

            <!-- En attente -->
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">En attente</p>
                <h4 class="text-2xl font-black text-primary">0</h4>
                <span class="text-[10px] text-primary font-extrabold flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    À réviser
                </span>
            </div>

            <!-- Inscriptions -->
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Inscriptions</p>
                <h4 class="text-2xl font-black text-primary">--</h4>
                <span class="text-[10px] text-emerald-600 font-extrabold flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Mises à jour en direct
                </span>
            </div>

            <!-- Signalés -->
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm space-y-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Signalés</p>
                <h4 class="text-2xl font-black text-primary">0</h4>
                <span class="text-[10px] text-rose-600 font-extrabold flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"></path></svg>
                    Aucun problème
                </span>
            </div>
        </div>

        <!-- TABLEAU & FILTRES DE NAVIGATION -->
        <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm space-y-6">

            <!-- Barre d'onglets de filtrage et bouton Créer -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between border-b border-slate-100 pb-4 gap-4">
                <div class="flex flex-wrap gap-2 text-xs font-bold text-slate-500">
                    <button class="px-4 py-2 bg-primary text-white rounded-xl shadow-sm transition-all">Tous</button>
                    <button class="px-4 py-2 hover:bg-slate-50 text-slate-600 rounded-xl transition-colors">Publiés</button>
                    <button class="px-4 py-2 hover:bg-slate-50 text-slate-600 rounded-xl transition-colors">En attente</button>
                </div>

                <a class="flex items-center justify-center space-x-2 px-5 py-2.5 bg-primary hover:bg-[#001848] text-white text-xs font-bold rounded-xl shadow-md shadow-primary/20 transition-all active:scale-95 shrink-0" href="{{ route('list-courses.create') }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Créer un cours</span>
                </a>
            </div>

            <!-- La Table dynamique des Cours -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="border-b border-slate-100 text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">
                        <th class="pb-4">Cours & Couverture</th>
                        <th class="pb-4">Filière</th>
                        <th class="pb-4">Spécialité</th>
                        <th class="pb-4 text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-xs divide-y divide-slate-100">

                    @forelse ($courses as $course)
                        <tr class="hover:bg-slate-50/80 transition-colors group">

                            <!-- Couverture + Nom + Description -->
                            <td class="py-4 min-w-75">
                                <div class="flex items-center space-x-3">
                                    <!-- Dynamic Cover Image / Fallback -->
                                    <div class="w-14 h-11 bg-slate-100 rounded-xl overflow-hidden shrink-0 border border-slate-200/80 relative shadow-sm">
                                        @if ($course->image_url)
                                            <img
                                                src="{{  $course->image_url }}"
                                                alt=""
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                            >
                                        @else
                                            <div class="w-full h-full flex items-center justify-center" style="background: url('{{ asset('storage/images/wallpaper1.jpg') }}') center/cover">

                                            </div>
                                        @endif
                                    </div>

                                    <div class="truncate">
                                        <p class="font-black text-primary group-hover:text-blue-600 transition-colors truncate">
                                            {{ $course->title }}
                                        </p>
                                        @if ($course->description)
                                            <p class="text-[10px] text-slate-500 font-medium mt-0.5 line-clamp-2 max-w-xs">
                                                {{ $course->description }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <!-- Filière -->
                            <td class="py-4 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                    {{ $course->specialty->program->name }}
                                </span>
                            </td>

                            <!-- Spécialité -->
                            <td class="py-4 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700 border border-blue-200/60">
                                     {{ $course->specialty->name }}
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="py-4 text-right whitespace-nowrap">
                                <div class="inline-flex items-center justify-end gap-1.5">

                                    <!-- Voir -->
                                    <a
                                        href="{{ route('courses.show', $course) }}"
                                        class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all"
                                        title="Voir"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </a>

                                    <!-- Modifier -->
                                    <a
                                        href="{{ route('courses.edit', $course) }}"
                                        class="p-2 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-xl transition-all"
                                        title="Modifier"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125"></path>
                                        </svg>
                                    </a>

                                    <!-- Supprimer -->
                                    <form method="POST" action="{{ route('courses.destroy', $course) }}" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ce cours ?')"
                                            class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-xl transition-all"
                                            title="Supprimer"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-12 text-center text-slate-500 font-bold">
                                Aucun cours enregistré dans le système.
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>

            <!-- PAGINATION DYNAMIQUE -->
            <div class="border-t border-slate-100 pt-4">
                {{ $courses->links() }}
            </div>

        </div>

    </div>
</x-layouts.admin.admin-layout>
