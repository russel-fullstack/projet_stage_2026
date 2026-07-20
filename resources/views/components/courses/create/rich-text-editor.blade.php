<div class="space-y-1.5">
    <label for="{{ $name }}" class="block text-xs font-black text-gray-900">{{ $label }}</label>

    <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white focus-within:border-[#002266] focus-within:ring-2 focus-within:ring-[#002266]/10 transition-all">
        {{-- Barre d'outils de formatage --}}
        <div class="bg-gray-100/70 border-b border-gray-200/80 px-3 py-2 flex items-center justify-between text-gray-600">
            <div class="flex items-center space-x-1 sm:space-x-2">
                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs font-black" title="Gras">B</button>
                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs italic font-serif" title="Italique">I</button>
                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs underline" title="Souligné">U</button>

                <div class="h-4 w-px bg-gray-300 mx-1"></div>

                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs" title="Liste à puces">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12M8.25 17.25h12M3.75 6.75h.007v.008H3.75V6.75zm0 5.25h.007v.008H3.75V12zm0 5.25h.007v.008H3.75v-.008z" />
                    </svg>
                </button>
                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs" title="Liste numérotée">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12M8.25 17.25h12M3.75 6H5v3M3.75 12h1.5m-1.5 3h1.5v3h-1.5" />
                    </svg>
                </button>

                <div class="h-4 w-px bg-gray-300 mx-1"></div>

                <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-xs" title="Insérer un lien">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                </button>
            </div>

            <button type="button" class="p-1.5 hover:bg-gray-200/60 rounded-lg text-gray-500" title="Plein écran">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                </svg>
            </button>
        </div>

        {{-- Zone d'écriture --}}
        <textarea
            id="{{ $name }}"
            name="{{ $name }}"
            rows="8"
            placeholder="{{ $placeholder }}"
            class="w-full p-4 text-xs font-medium placeholder-gray-300 focus:outline-none resize-y border-none"
        >{{ old($name, $value) }}</textarea>
    </div>
</div>
