<div class="p-5 bg-white border border-gray-100 shadow-sm rounded-2xl flex items-start space-x-4">
    <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0 text-[#18005A]">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.82 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.496 1.509 1.333 1.509 2.316V18" />
        </svg>
    </div>
    <div class="space-y-1">
        <h4 class="text-xs font-black text-gray-900">{{ $title }}</h4>
        <p class="text-[11px] text-gray-500 font-medium leading-relaxed">
            {{ $description }}
        </p>
        <a href="{{ $linkUrl }}" class="inline-flex items-center space-x-1 text-[10px] font-black text-[#18005A] hover:underline pt-1">
            <span>{{ $linkText }}</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</div>
