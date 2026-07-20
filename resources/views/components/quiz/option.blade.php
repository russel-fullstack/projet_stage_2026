<label class="block relative cursor-pointer group">
    <input
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        class="peer sr-only"
        {{ $checked ? 'checked' : '' }}
        required
    >
    <div class="p-4 md:p-5 bg-white border border-gray-200 rounded-xl transition-all duration-200 ease-in-out
                peer-checked:border-[#18005A] peer-checked:bg-indigo-50/30 peer-checked:shadow-sm
                hover:border-gray-300 flex items-center justify-between">

        <div class="flex items-center space-x-4">
            {{-- Cercle du radio --}}
            <div class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center
                        peer-checked:border-[5px] peer-checked:border-[#18005A] transition-all">
            </div>

            {{-- Texte de l'option --}}
            <span class="text-sm font-semibold text-gray-700 peer-checked:text-[#18005A] transition-colors">
                {{ $label }}
            </span>
        </div>

        {{-- Icône de validation (visible uniquement si sélectionné) --}}
        <div class="hidden peer-checked:block text-[#18005A]">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
        </div>
    </div>
</label>
