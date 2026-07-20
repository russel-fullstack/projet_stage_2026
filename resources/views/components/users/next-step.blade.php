<div class="p-4 bg-slate-50/60 rounded-2xl flex items-start space-x-3">
    <div class="{{ $iconColor }} mt-0.5 shrink-0">
        {{ $slot }}
    </div>
    <div>
        <p class="text-xs font-black text-gray-900">{{ $title }}</p>
        <p class="text-[10px] text-gray-400 font-medium mt-0.5">{{ $description }}</p>
    </div>
</div>
