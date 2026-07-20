<div class="p-6 bg-white rounded-3xl border border-gray-100 shadow-sm flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-6">
    {{-- Image / Miniature du certificat --}}
    <div class="w-full md:w-48 h-32 bg-indigo-100/60 rounded-2xl flex items-center justify-center flex-shrink-0 text-indigo-400">
        @if($imageUrl)
            <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-full object-cover rounded-2xl">
        @else
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        @endif
    </div>

    {{-- Contenu & Actions --}}
    <div class="flex-1 space-y-3 w-full">
        <div class="flex items-start justify-between">
            <h3 class="text-sm font-black text-[#002266] leading-snug max-w-sm">{{ $title }}</h3>
            <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-[9px] font-black uppercase tracking-wider">
                Niveau {{ $level }}
            </span>
        </div>

        <p class="text-[10px] text-gray-400 font-medium">
            Délivré le {{ $deliveredAt }} • ID: {{ $certificateId }}
        </p>

        <div class="flex items-center space-x-2 pt-1">
            <a href="{{ $pdfUrl }}" class="px-4 py-2 bg-[#002266] hover:bg-opacity-95 text-white font-extrabold text-[10px] rounded-xl transition-all inline-flex items-center space-x-2 shadow-sm">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                <span>Télécharger PDF</span>
            </a>

            <a href="{{ $shareUrl }}" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-bold text-[10px] rounded-xl transition-all inline-flex items-center space-x-1.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                </svg>
                <span>Partager</span>
            </a>

            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
            </button>
        </div>
    </div>
</div>
