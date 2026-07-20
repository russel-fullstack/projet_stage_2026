<div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center space-x-5">
    <!-- Icon Wrapper -->
    <div class="p-3.5 rounded-2xl {{ $iconColor }}">
        {{ $slot }}
    </div>

    <!-- Content -->
    <div>
        <p class="text-xs font-bold text-accent leading-tight">{{ $title }}</p>
        <h4 class="text-2xl font-black text-gray-900 mt-1">{{ $value }}</h4>

        @if($hasTrend)
            <span class="text-[10px] font-extrabold mt-0.5 inline-block {{ $trendColor }}">
                {{ $trend }}
            </span>
        @endif
    </div>
</div>
