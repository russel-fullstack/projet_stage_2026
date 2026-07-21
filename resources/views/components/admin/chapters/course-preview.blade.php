<div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4">
    <h3 class="text-xs font-black text-[#18005A] uppercase tracking-wider">Aperçu du cours</h3>

    <div class="space-y-2">
        @foreach($chapters as $chapter)
            <div class="p-3 bg-gray-50 rounded-2xl flex items-center justify-between text-xs font-bold text-gray-700">
                <span>{{ $chapter['title'] }}</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        @endforeach

        {{-- Item Actuel --}}
        <div class="p-3 bg-indigo-50/60 border border-indigo-200/60 rounded-2xl flex items-center justify-between text-xs font-black text-[#18005A]">
            <span id="preview-title">Nouveau chapitre...</span>
            <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </div>
    </div>
</div>
