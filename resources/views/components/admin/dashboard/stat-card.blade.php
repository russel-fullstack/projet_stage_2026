@props([
    'title',
    'value',
    'trend',
    'trendColor' => 'text-emerald-500',
    'iconColor' => 'bg-indigo-50 text-indigo-600'
])

<div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center space-x-5">
    <div class="p-3.5 rounded-2xl {{ $iconColor }}">
        {{ $slot }}
    </div>
    <div>
        <p class="text-xs font-bold text-accent leading-tight">{{ $title }}</p>
        <h4 class="text-2xl font-black text-gray-900 mt-1">{{ $value }}</h4>
        <span class="text-[10px] font-extrabold mt-0.5 inline-block {{ $trendColor }}">{{ $trend }}</span>
    </div>
</div>
