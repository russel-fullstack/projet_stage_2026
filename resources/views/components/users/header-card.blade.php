<div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-6">
    <div class="space-y-3 max-w-2xl">
        <div class="flex items-center space-x-2 text-[10px] font-extrabold">
            <span class="px-2.5 py-1 bg-indigo-50 text-indigo-600 rounded-md uppercase tracking-wider">{{ $category }}</span>
            <span class="text-gray-300">•</span>
            <span class="text-gray-400">{{ $chaptersCount }} Chapitres</span>
        </div>
        <h1 class="text-2xl font-black text-[#002266] tracking-tight leading-snug">{{ $title }}</h1>
        <p class="text-xs text-gray-500 font-medium leading-relaxed">{{ $description }}</p>
    </div>

    <div class="shrink-0">
        <a href="{{ $actionUrl }}" class="px-6 py-3.5 bg-[#002266] hover:bg-opacity-95 text-white font-extrabold text-xs rounded-2xl shadow-md transition-all inline-flex items-center space-x-2">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
            </svg>
            <span>Reprendre la lecture</span>
        </a>
    </div>
</div>
