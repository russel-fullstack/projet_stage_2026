<div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4">
    <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-wider">Votre formateur</h3>

    <div class="flex items-center space-x-3">
        <div class="w-12 h-12 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center font-black text-indigo-600 flex-shrink-0">
            @if($avatar)
                <img src="{{ $avatar }}" alt="{{ $name }}" class="w-full h-full object-cover rounded-2xl">
            @else
                <svg class="w-6 h-6 text-indigo-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                </svg>
            @endif
        </div>
        <div>
            <h4 class="text-xs font-black text-gray-900">{{ $name }}</h4>
            <p class="text-[10px] text-gray-400 font-medium leading-tight mt-0.5">{{ $role }}</p>
        </div>
    </div>

    <button class="w-full py-2.5 border border-gray-200 text-gray-700 hover:bg-gray-50 text-xs font-bold rounded-xl transition-colors">
        Poser une question
    </button>
</div>
