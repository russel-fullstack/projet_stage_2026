<x-layouts.admin.admin-layout>

    <div class="max-w-3xl mx-auto p-6 space-y-6">

        <!-- Bouton Retour rapide -->
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

        <!-- En-tête du formulaire -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between gap-7">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="p-2 bg-[#002266]/10 text-primary rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                   <div class="ml-3">
                       <h1 class="text-xl font-black text-primary tracking-tight">
                           Nouvelle Filière
                       </h1>
                       <p class="text-sm text-slate-500">
                           Renseignez les informations de base pour créer une nouvelle filière de formation.
                       </p>
                   </div>
                </div>


            </div>
        </div>

        <!-- Formulaire de création -->
        <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm">

            <form
                method="POST"
                action="{{ route('programs.store') }}"
                class="space-y-6"
            >
                @csrf

                <!-- Champ Nom de la filière -->
                <div>
                    <label
                        for="name"
                        class="block mb-2 text-xs font-bold uppercase tracking-wider text-slate-700"
                    >
                        Nom de la filière <span class="text-rose-500">*</span>
                    </label>

                    <div class="relative">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Ex : Génie Logiciel, Informatique de Gestion..."
                            class="w-full px-4 py-3 rounded-xl border text-sm transition-all duration-200 placeholder:text-slate-400 focus:outline-none focus:ring-2 @error('name') border-rose-300 bg-rose-50/30 text-rose-900 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:ring-[#002266]/20 focus:border-primary text-slate-800 @enderror"
                        >
                    </div>

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
                        Description de la filière
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Présentez les objectifs principaux, le contenu général ou les prérequis de cette filière..."
                        class="w-full px-4 py-3 rounded-xl border text-sm transition-all duration-200 placeholder:text-slate-400 focus:outline-none focus:ring-2 @error('description') border-rose-300 bg-rose-50/30 text-rose-900 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:ring-[#002266]/20 focus:border-primary text-slate-800 @enderror"
                    >{{ old('description') }}</textarea>

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
                        href="{{ route('programs.index') }}"
                        class="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50 transition-colors"
                    >
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary hover:bg-[#001848] text-white text-xs font-bold shadow-md shadow-[#002266]/20 hover:shadow-lg transition-all active:scale-95"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Enregistrer la filière
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-layouts.admin.admin-layout>
