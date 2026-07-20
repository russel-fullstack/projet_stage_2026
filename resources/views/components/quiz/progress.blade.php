<div class="space-y-3">
    <div class="flex items-center justify-between text-xs font-black">
        <span class="text-gray-500">Question {{ $current }} sur {{ $total }}</span>
        <span class="text-[#18005A]">{{ $percentage }}% complété</span>
    </div>
    <div class="w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
        <div class="h-full bg-[#008A5E] transition-all duration-500 ease-out" style="width: {{ $percentage }}%;"></div>
    </div>
</div>
