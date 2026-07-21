
<div class="p-4 bg-gray-50 rounded-2xl border border-gray-100 space-y-3">
    <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl shrink-0 {{ $bgImage }}"></div>
        <div class="truncate">
            <p class="text-xs font-black text-gray-900 truncate">{{ $title }}</p>
            <p class="text-[10px] text-gray-400 font-medium">Par: <span class="font-bold text-gray-600">{{ $author }}</span></p>
            <p class="text-[9px] text-gray-400 font-medium mt-0.5">{{ $time }}</p>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2 text-[10px] font-extrabold">
        <button class="py-2 bg-[#002266] text-white rounded-lg hover:bg-opacity-90 transition-colors">Approuver</button>
        <button class="py-2 bg-white border border-gray-200 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">Rejeter</button>
    </div>
</div>
