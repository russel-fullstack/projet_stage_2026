@props([
    'current' => 1,
])

<div class="mb-10">

    <div class="flex items-center">

        {{-- Étape 1 --}}
        <div class="flex items-center gap-3">

            <div
                class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold
                {{ $current >= 1
                    ? 'bg-secondary text-white'
                    : 'bg-slate-100 text-slate-400'
                }}"
            >
                @if ($current > 1)
                    ✓
                @else
                    1
                @endif
            </div>

            <div class="hidden sm:block">

                <p class="text-[10px] font-bold uppercase text-slate-400">
                    Étape 1
                </p>

                <p class="text-sm font-extrabold text-slate-700">
                    Informations
                </p>

            </div>

        </div>

        {{-- Ligne --}}
        <div
            class="flex-1 h-1 mx-4
            {{ $current >= 2
                ? 'bg-secondary'
                : 'bg-slate-200'
            }}"
        ></div>

        {{-- Étape 2 --}}
        <div class="flex items-center gap-3">

            <div
                class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold
                {{ $current >= 2
                    ? 'bg-secondary text-white'
                    : 'bg-slate-100 text-slate-400'
                }}"
            >
                @if ($current > 2)
                    ✓
                @else
                    2
                @endif
            </div>

            <div class="hidden sm:block">

                <p class="text-[10px] font-bold uppercase text-slate-400">
                    Étape 2
                </p>

                <p class="text-sm font-extrabold text-slate-700">
                    Chapitres
                </p>

            </div>

        </div>

        {{-- Ligne --}}
        <div
            class="flex-1 h-1 mx-4
            {{ $current >= 3
                ? 'bg-secondary'
                : 'bg-slate-200'
            }}"
        ></div>

        {{-- Étape 3 --}}
        <div class="flex items-center gap-3">

            <div
                class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold
                {{ $current >= 3
                    ? 'bg-secondary text-white'
                    : 'bg-slate-100 text-slate-400'
                }}"
            >
                3
            </div>

            <div class="hidden sm:block">

                <p class="text-[10px] font-bold uppercase text-slate-400">
                    Étape 3
                </p>

                <p class="text-sm font-extrabold text-slate-700">
                    Leçons
                </p>

            </div>

        </div>

    </div>

</div>
