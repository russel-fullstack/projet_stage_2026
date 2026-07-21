
<div class="col-span-12 lg:col-span-8 bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm space-y-8">

    {{-- CHAMP : Nom du chapitre --}}
    <div class="space-y-2">
        <label for="chapter_title" class="block text-xs font-bold text-gray-700">Nom du chapitre</label>
        <input
            type="text"
            id="chapter_title"
            name="title"
            value="{{ old('title') }}"
            placeholder="Ex: Fondamentaux de l'UX Design"
            oninput="const preview = document.getElementById('preview-title'); if(preview) preview.innerText = this.value || 'Nouveau chapitre...';"
            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#18005A]/20 focus:border-[#18005A] transition-all"
            required
        >
        @error('title')
        <p class="text-[11px] text-red-500 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <hr class="border-gray-100">

    {{-- SECTION : Contenu du chapitre --}}
    <div class="space-y-4">
        <div>
            <h3 class="text-base font-black text-[#18005A]">Contenu du chapitre</h3>
            <p class="text-xs text-gray-400 font-medium">Commencez à structurer votre chapitre en ajoutant différents types de leçons.</p>
        </div>

        {{-- Boutons Types de Leçons --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <button type="button" class="p-4 rounded-2xl border-2 border-dashed border-gray-200 hover:border-[#18005A] bg-white hover:bg-indigo-50/10 text-center transition-all flex flex-col items-center justify-center space-y-2 group">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-[#18005A] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                    </svg>
                </div>
                <span class="text-xs font-black text-gray-700 group-hover:text-[#18005A]">Ajouter une vidéo</span>
            </button>

            <button type="button" class="p-4 rounded-2xl border-2 border-dashed border-gray-200 hover:border-emerald-500 bg-white hover:bg-emerald-50/10 text-center transition-all flex flex-col items-center justify-center space-y-2 group">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <span class="text-xs font-black text-gray-700 group-hover:text-emerald-600">Ajouter un document</span>
            </button>

            <button type="button" class="p-4 rounded-2xl border-2 border-dashed border-gray-200 hover:border-[#18005A] bg-white hover:bg-indigo-50/10 text-center transition-all flex flex-col items-center justify-center space-y-2 group">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-[#18005A] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M12 18h.01" />
                    </svg>
                </div>
                <span class="text-xs font-black text-gray-700 group-hover:text-[#18005A]">Ajouter un quiz</span>
            </button>
        </div>

        {{-- État Vide (Empty State) --}}
        <div class="p-8 border-2 border-dashed border-gray-100 rounded-3xl bg-gray-50/50 text-center space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-xs text-gray-400 font-medium max-w-xs mx-auto">
                Aucune leçon n'a été ajoutée à ce chapitre pour le moment. Utilisez les boutons ci-dessus pour commencer.
            </p>
        </div>
    </div>

</div>
