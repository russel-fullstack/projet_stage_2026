<div @class([
    'py-3.5 px-4 rounded-xl flex items-center justify-between text-xs font-bold transition-all',
    'bg-indigo-50/50 border-l-4 border-[#002266] text-gray-900' => $status === 'in_progress',
    'text-gray-400 hover:bg-gray-50' => $status === 'completed',
    'text-gray-700 hover:bg-gray-50' => $status === 'default',
])>
    <div class="flex items-center space-x-3">
        {{-- Icône de statut --}}
        @if($status === 'completed')
            <div class="w-5 h-5 rounded-full border-2 border-emerald-500 flex items-center justify-center text-emerald-500">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                </svg>
            </div>
        @elseif($status === 'in_progress')
            <div class="w-5 h-5 rounded-full border-2 border-[#002266] flex items-center justify-center text-[#002266]">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5"/>
                </svg>
            </div>
        @else
            <div class="w-5 h-5 rounded-full border-2 border-gray-300"></div>
        @endif

        {{-- Titre de la leçon --}}
        <span @class(['line-through' => $status === 'completed'])>
            {{ $title }}
        </span>
    </div>

    {{-- Durée / Badge / Icône Exercice --}}
    <div class="flex items-center space-x-3">
        @if($status === 'in_progress')
            <span class="px-2 py-0.5 bg-[#002266] text-white text-[9px] font-black rounded uppercase tracking-wider">En cours</span>
        @endif

        @if($isExercise)
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
            </svg>
        @elseif($duration)
            <span class="text-[10px] text-gray-400 font-medium">{{ $duration }}</span>
        @endif
    </div>
</div>
