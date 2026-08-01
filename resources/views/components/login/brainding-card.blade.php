<div
    class="relative hidden lg:flex h-full min-h-screen overflow-hidden
           bg-[#110B29] text-white"
>
    {{-- IMAGE / VISUEL DE FOND --}}
    <img
        src="{{ app(\App\Services\MinioService::class)->url('test.avif') }}"
        alt="EduMaster"
        class="absolute inset-0 w-full h-full object-cover"
    >

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-linear-to-br
                from-[#110B29]/95
                via-[#110B29]/80
                to-[#110B29]/50">
    </div>

    {{-- FORMES DÉCORATIVES --}}
    <div
        class="absolute -top-32 -left-32 w-96 h-96
               rounded-full bg-secondary/20 blur-3xl">
    </div>

    <div
        class="absolute -bottom-32 -right-32 w-120 h-120
               rounded-full bg-indigo-500/20 blur-3xl">
    </div>

    <div
        class="absolute top-1/3 right-10
               w-32 h-32 rounded-full
               border border-white/10">
    </div>

    {{-- CONTENU --}}
    <div class="relative z-10 flex flex-col justify-between
                w-full p-10 xl:p-14">

        {{-- LOGO --}}
        <div>
            <a href="{{ route('accueil') }}"
               class="inline-flex items-center gap-3 group">

                <div
                    class="w-11 h-11 rounded-2xl
                           bg-white backdrop-blur-md
                           border border-white/15
                           flex items-center justify-center
                           shadow-xl"
                >
                    <img src="{{ asset('logo.png') }}"
                         alt="Logo EduMaster"
                         class="w-8 h-8 object-contain"
                    />
                </div>

                <div>
                    <span class="block text-xl font-black tracking-tight">
                        EduMaster
                    </span>

                    <span class="block text-[10px] uppercase
                                 tracking-[0.25em] text-white/50">
                        Learning platform
                    </span>
                </div>

            </a>
        </div>


        {{-- CENTRE --}}
        <div class="max-w-xl">

            {{-- BADGE --}}
            <div
                class="inline-flex items-center gap-2
                       px-3 py-1.5 mb-7
                       rounded-full
                       bg-white/10 backdrop-blur-md
                       border border-white/10
                       text-xs font-semibold text-white/80"
            >
                <span
                    class="w-2 h-2 rounded-full
                           bg-emerald-400
                           shadow-[0_0_12px_rgba(52,211,153,0.8)]
                           "
                ></span>

                Apprendre. Progresser. Réussir.
            </div>


            {{-- TITRE --}}
            <h1
                class="text-4xl xl:text-5xl
                       font-black tracking-tight
                       leading-[1.08]"
            >
                Construisez vos compétences.
                <span class="text-secondary">
                    Préparez votre avenir.
                </span>
            </h1>


            {{-- DESCRIPTION --}}
            <p
                class="mt-6 max-w-lg
                       text-sm xl:text-base
                       leading-relaxed
                       text-white/65"
            >
                Bienvenue sur EduMaster, votre espace dédié à
                l'apprentissage et au développement de nouvelles
                compétences grâce à des formations structurées
                et accessibles.
            </p>


            {{-- AVANTAGES --}}
            <div class="mt-8 grid grid-cols-2 gap-3 max-w-lg">

                {{-- ITEM --}}
                <div
                    class="flex items-center gap-3
                           p-3.5 rounded-2xl
                           bg-white/5
                           border border-white/10
                           backdrop-blur-sm
                           hover:bg-white/10
                           transition"
                >
                    <div
                        class="w-9 h-9 rounded-xl
                               bg-white/10
                               flex items-center justify-center
                               shrink-0"
                    >
                        <svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                            />
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-bold">
                            Formations structurées
                        </p>

                        <p class="text-[10px] text-white/45 mt-0.5">
                            Apprenez étape par étape
                        </p>
                    </div>
                </div>


                {{-- ITEM --}}
                <div
                    class="flex items-center gap-3
                           p-3.5 rounded-2xl
                           bg-white/5
                           border border-white/10
                           backdrop-blur-sm
                           hover:bg-white/10
                           transition"
                >
                    <div
                        class="w-9 h-9 rounded-xl
                               bg-white/10
                               flex items-center justify-center
                               shrink-0"
                    >
                        <svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-bold">
                            Suivez votre progression
                        </p>

                        <p class="text-[10px] text-white/45 mt-0.5">
                            Avancez à votre rythme
                        </p>
                    </div>
                </div>

            </div>

        </div>


        {{-- FOOTER --}}
        <div
            class="flex items-center justify-between
                   text-[10px] text-white/35
                   pt-8"
        >
            <span>
                © {{ date('Y') }} EduMaster
            </span>

            <span class="flex items-center gap-2">
                <span class="w-1 h-1 rounded-full bg-white/30"></span>
                Plateforme d'apprentissage
            </span>
        </div>

    </div>

</div>
