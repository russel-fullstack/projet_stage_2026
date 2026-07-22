@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'py-1.5 bg-white',
])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'origin-top-left left-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-bottom-right right-0 bottom-full mb-2';
            break;
        case 'right':
        default:
            $alignmentClasses = 'origin-top-right right-0';
            break;
    }

    switch ($width) {
        case '48':
            $widthClass = 'w-48';
            break;
        case '56':
            $widthClass = 'w-56';
            break;
        case '64':
            $widthClass = 'w-64';
            break;
        default:
            $widthClass = $width;
            break;
    }
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <!-- Trigger (Bouton d'activation) -->
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <!-- Dropdown Menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute z-50 mt-2 {{ $widthClass }} rounded-2xl shadow-xl shadow-slate-900/10 border border-slate-100 {{ $alignmentClasses }}"
         style="display: none;"
         @click="open = false">
        <div class="rounded-2xl ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
