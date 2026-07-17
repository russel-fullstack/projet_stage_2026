       @props([
    'poster' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?q=80&w=1600&auto=format&fit=crop',
    'src' => 'https://cdn.coverr.co/videos/coverr-developer-coding-in-vs-code-4601/1080p.mp4'
])

<div x-data="{ isPaused: true }" class="relative group w-full aspect-video bg-slate-950 rounded-2xl shadow-xl overflow-hidden border border-slate-800 ">

    <!-- L'élément vidéo -->
    <video
        id="lessonVideo"
        class="w-full h-full object-cover"
        poster="{{ $poster }}"
        src="{{ $src }}"
        controls

    >
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <!-- Overlay personnalisé (disparaît en lecture, apparaît au survol) -->
    <div
        id="videoOverlay"
        class="absolute inset-0 flex items-center justify-center bg-slate-950/40 backdrop-blur-[2px] transition-opacity duration-300 opacity-0 group-hover:opacity-100 cursor-pointer"

    >
        <!-- Bouton Play central -->
        <button
            class="flex items-center justify-center w-24 h-24 rounded-full bg-black/50 border-[3px] border-indigo-400 text-indigo-400 hover:scale-105 hover:bg-black/60 transition-all duration-200 shadow-2xl"
            aria-label="Lire la vidéo"
        >
            <!-- Icône Play SVG -->
            <svg class="w-12 h-12 ml-2" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 2.14V21.86C5 22.1 5.06 22.33 5.18 22.52C5.3 22.7 5.48 22.84 5.69 22.92C5.89 23 6.12 23.01 6.33 22.96C6.54 22.9 6.72 22.79 6.87 22.62L22.87 12.62C23.01 12.53 23.13 12.4 23.21 12.26C23.29 12.11 23.33 11.95 23.33 11.79C23.33 11.62 23.29 11.46 23.21 11.31C23.13 11.17 23.01 11.04 22.87 10.95L6.87 1.05C6.72 0.88 6.54 0.77 6.33 0.71C6.12 0.66 5.89 0.67 5.69 0.75C5.48 0.83 5.3 0.97 5.18 1.15C5.06 1.34 5 1.57 5 1.81V1.81Z"/>
            </svg>
        </button>
    </div>
</div>
