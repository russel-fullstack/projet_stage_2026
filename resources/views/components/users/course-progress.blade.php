
<div class="flex items-center space-x-4">
    <div class="relative w-16 h-16 flex items-center justify-center shrink-0">
        <svg class="w-full h-full -rotate-90" viewBox="0 0 36 36">
            <path class="text-gray-100" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
            <path style="color: {{ $color }}" stroke-dasharray="{{ $percentage }}, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
        </svg>
        <span class="absolute text-xs font-black" style="color: {{ $color }}">{{ $percentage }}%</span>
    </div>
    <div>
        <h3 class="text-xs font-black text-gray-900">{{ $title }}</h3>
        <p class="text-[10px] text-gray-400 font-medium mt-0.5">{{ $subtitle }}</p>
        <span class="inline-block mt-2 px-2 py-0.5 {{ $badgeBg }} {{ $badgeText }} text-[9px] font-black rounded-md">Prochain: {{ $nextType }}</span>
    </div>
</div>
