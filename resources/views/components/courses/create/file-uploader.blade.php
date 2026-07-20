<div class="space-y-1.5" x-data="{ fileName: '' }">
    <label class="block text-xs font-black text-gray-900">{{ $label }}</label>

    <div class="relative border-2 border-dashed border-indigo-200/80 hover:border-indigo-400 bg-gray-50/30 rounded-2xl p-6 text-center transition-all cursor-pointer group">
        <input
            type="file"
            name="{{ $name }}"
            id="{{ $name }}"
            accept="image/png, image/jpeg, image/webp"
            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
            @change="fileName = $event.target.files[0] ? $event.target.files[0].name : ''"
        >

        <div class="flex flex-col items-center justify-center space-y-2">
            {{-- Bouton Sélecteur Fichier simulé + statut --}}
            <div class="flex items-center space-x-2 text-xs text-gray-500">
                <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg font-extrabold text-gray-700 shadow-sm group-hover:border-gray-300">
                    Choisir un fichier
                </span>
                <span class="text-gray-400 font-medium" x-text="fileName ? fileName : 'Aucun fichier choisi'"></span>
            </div>

            {{-- Icône Nuage --}}
            <div class="text-[#18005A] pt-2">
                <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                </svg>
            </div>

            <p class="text-xs font-black text-gray-800">
                Glissez-déposez ou cliquez pour télécharger
            </p>

            <p class="text-[10px] text-gray-400 font-semibold">
                {{ $hint }}
            </p>
        </div>
    </div>
</div>
