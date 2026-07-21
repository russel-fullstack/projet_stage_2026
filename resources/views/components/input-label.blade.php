@props(['value'])

<label {{ $attributes->merge([
    'class' => 'block text-xs font-extrabold text-[#110B29] tracking-tight mb-1.5 select-none'
]) }}>
    {{ $value ?? $slot }}
</label>
