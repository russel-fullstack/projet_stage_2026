<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center justify-center px-5 py-2.5 bg-rose-600 hover:bg-rose-700 active:scale-95 text-white text-xs font-extrabold rounded-2xl shadow-sm hover:shadow transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-rose-500/20 disabled:opacity-50 disabled:cursor-not-allowed disabled:active:scale-100'
]) }}>
    {{ $slot }}
</button>
