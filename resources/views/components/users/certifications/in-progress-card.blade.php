<div class="p-5 bg-white rounded-3xl border border-gray-100 shadow-sm space-y-4">
    <div class="flex items-center justify-between">
        <h4 class="text-xs font-black text-[#002266]">{{ $title }}</h4>
        <span class="text-[10px] font-extrabold text-[#002266]">{{ $percentage }}%</span>
    </div>

    {{-- Barre de progression --}}
    <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
        <div class="h-full bg-emerald-500 rounded-full transition-all duration-300" style="width: {{ $percentage }}%"></div>
    </div>

    {{-- Critères restants --}}
    <div class="space-y-2">
        <p class="text-[9px] font-extrabold text-gray-400 uppercase tracking-wider">Critères restants :</p>

        <ul class="space-y-1.5 text-[10px] font-bold">
            @foreach($criteria as $criterion)
                <li class="flex items-center space-x-2 {{ $criterion['completed'] ?? false ? 'text-gray-700' : 'text-gray-400' }}">
                    @if($criterion['completed'] ?? false)
                        <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    @else
                        <div class="w-3.5 h-3.5 rounded-full border border-gray-300 flex-shrink-0"></div>
                    @endif
                    <span class="{{ ($criterion['completed'] ?? false) ? 'line-through text-gray-400' : '' }}">
                        {{ $criterion['label'] }}
                    </span>
                </li>
            @endforeach
        </ul>
    </div>

    <a href="{{ $actionUrl }}" class="w-full py-2.5 bg-indigo-50/70 hover:bg-indigo-100/70 text-[#002266] text-xs font-extrabold rounded-xl transition-colors text-center block">
        {{ $actionText }}
    </a>
</div>
