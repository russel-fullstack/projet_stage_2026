<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center justify-center px-5 py-2.5 bg-white border border-slate-200/80 hover:bg-slate-50 active:bg-slate-100 text-slate-700 hover:text-[#110B29] font-extrabold text-xs rounded-2xl shadow-sm hover:shadow transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 focus:ring-offset-2 active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed'
]) }}>
    {{ $slot }}
</button>
