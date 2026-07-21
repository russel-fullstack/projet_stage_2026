@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'w-full px-4 py-3 bg-slate-50/50 border border-slate-200 rounded-2xl text-xs font-medium text-[#110B29] placeholder-slate-400 transition-all duration-200 focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 focus:border-[#110B29] disabled:bg-slate-100 disabled:text-slate-400 disabled:cursor-not-allowed disabled:border-slate-200'
    ]) }}
>
