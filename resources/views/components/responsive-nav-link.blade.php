@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center w-full ps-4 pe-4 py-3 border-l-4 border-[#002266] text-start text-xs font-black text-[#002266] bg-slate-50 transition duration-150 ease-in-out'
                : 'flex items-center w-full ps-4 pe-4 py-3 border-l-4 border-transparent text-start text-xs font-bold text-slate-600 hover:text-slate-900 hover:bg-slate-50 hover:border-slate-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
