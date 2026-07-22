<a {{ $attributes->merge([
    'class' => 'group flex items-center w-full px-3.5 py-2.5 text-xs font-bold text-slate-700 hover:text-[#002266] hover:bg-slate-50 rounded-xl transition-all duration-150 ease-in-out'
]) }}>
    {{ $slot }}
</a>
