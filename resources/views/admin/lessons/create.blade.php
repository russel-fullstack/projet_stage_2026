<x-layouts.admin.admin-layout>
    <div class="min-h-screen  py-10 px-4 sm:px-6">
        <div class="max-w-7xl mx-auto space-y-8">

            <!-- 1. En-tête & Fil d'Ariane -->
            <div class="space-y-4">
                <nav class="flex items-center space-x-2 text-xs font-bold text-slate-400">
                    <a href="{{ route('list-courses.index') }}" class="hover:text-slate-600 transition-colors">Mes cours</a>
                    <span>&rsaquo;</span>
                    <a href="{{ route('list-courses.create') }}" class="hover:text-slate-600 transition-colors">nouveau cours</a>
                    <span>&rsaquo;</span>
                    <a href="{{ route('list-courses.chapter') }}" class="hover:text-slate-600 transition-colors">nouveau chapitre</a>
                    <span>&rsaquo;</span>
                    <span class="text-[#110B29] font-extrabold">nouvelle leçon</span>
                </nav>
                <h1 class="text-2xl font-black text-[#110B29] tracking-tight">Ajouter une nouvelle leçon</h1>
                <p class="text-xs font-medium text-slate-500">Structurez votre contenu pédagogique en choisissant le format le plus adapté.</p>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- 2. Sélection du type de contenu (Radio Buttons HTML avec CSS Peer) -->
                <div class="space-y-3">
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-400">1. Type de contenu</label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                        <!-- Option Vidéo -->
                        <label class="relative cursor-pointer">
                            <input type="radio" name="type" value="video" class="peer sr-only type-radio" checked onchange="handleTypeChange('video')">
                            <div class="p-5 rounded-2xl border border-slate-100 bg-white text-center transition-all flex flex-col items-center justify-center space-y-2 peer-checked:border-[#110B29] peer-checked:bg-purple-50/40 peer-checked:ring-2 peer-checked:ring-[#110B29]/10 hover:border-slate-200">
                                <div class="w-12 h-12 rounded-2xl bg-purple-100/70 text-[#110B29] flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-extrabold text-[#110B29]">Vidéo</h4>
                                    <p class="text-[10px] font-medium text-slate-400 mt-0.5">Cours magistral, démo</p>
                                </div>
                            </div>
                        </label>

                        <!-- Option Document -->
                        <label class="relative cursor-pointer">
                            <input type="radio" name="type" value="document" class="peer sr-only type-radio" onchange="handleTypeChange('document')">
                            <div class="p-5 rounded-2xl border border-slate-100 bg-white text-center transition-all flex flex-col items-center justify-center space-y-2 peer-checked:border-emerald-500 peer-checked:bg-emerald-50/40 peer-checked:ring-2 peer-checked:ring-emerald-500/10 hover:border-slate-200">
                                <div class="w-12 h-12 rounded-2xl bg-emerald-100/70 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-extrabold text-[#110B29]">Document</h4>
                                    <p class="text-[10px] font-medium text-slate-400 mt-0.5">PDF, Support de cours</p>
                                </div>
                            </div>
                        </label>

                        <!-- Option Quiz -->
                        <label class="relative cursor-pointer">
                            <input type="radio" name="type" value="quiz" class="peer sr-only type-radio" onchange="handleTypeChange('quiz')">
                            <div class="p-5 rounded-2xl border border-slate-100 bg-white text-center transition-all flex flex-col items-center justify-center space-y-2 peer-checked:border-purple-600 peer-checked:bg-purple-50/40 peer-checked:ring-2 peer-checked:ring-purple-600/10 hover:border-slate-200">
                                <div class="w-12 h-12 rounded-2xl bg-purple-100/80 text-purple-700 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M12 18h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-extrabold text-[#110B29]">Quiz</h4>
                                    <p class="text-[10px] font-medium text-slate-400 mt-0.5">Évaluation, QCM</p>
                                </div>
                            </div>
                        </label>

                    </div>
                </div>

                <!-- 3. Formulaire des détails -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm space-y-6">
                    <h3 class="text-xs font-black uppercase tracking-wider text-slate-400">2. Détails de la leçon</h3>

                    <!-- Titre -->
                    <div class="space-y-1.5">
                        <label for="title" class="block text-xs font-extrabold text-[#110B29]">
                            Titre de la leçon <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            placeholder="ex: Introduction aux principes du Design System"
                            class="w-full px-4 py-3 bg-slate-50/50 border border-slate-200 rounded-2xl text-xs font-medium placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 focus:border-[#110B29] transition-all"
                            required
                        >
                    </div>

                    <!-- Description -->
                    <div class="space-y-1.5">
                        <label for="description" class="block text-xs font-extrabold text-[#110B29]">Description ou instructions</label>
                        <textarea
                            id="description"
                            name="description"
                            rows="3"
                            placeholder="Détaillez les objectifs de cette leçon ou donnez des consignes spécifiques à vos étudiants..."
                            class="w-full px-4 py-3 bg-slate-50/50 border border-slate-200 rounded-2xl text-xs font-medium placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 focus:border-[#110B29] transition-all resize-none"
                        ></textarea>
                    </div>

                    <!-- Zone de Fichier (Dynamique via JS Natif) -->
                    <div id="file-wrapper" class="space-y-1.5">
                        <label class="block text-xs font-extrabold text-[#110B29]">
                            Fichier de la leçon <span id="file-extension-hint" class="text-slate-400 font-normal">(MP4, MKV)</span>
                        </label>

                        <div class="border-2 border-dashed border-slate-200 rounded-2xl p-8 bg-slate-50/30 text-center hover:bg-slate-50/80 transition-all cursor-pointer relative group">
                            <input type="file" id="file_input" name="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" onchange="updateFileName(this)">
                            <div class="space-y-3">
                                <div class="w-10 h-10 rounded-2xl bg-white border border-slate-100 text-slate-400 group-hover:text-[#110B29] flex items-center justify-center mx-auto shadow-sm transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>
                                </div>
                                <div class="text-xs">
                                    <span id="file-label-text" class="font-bold text-[#110B29]">Glissez-déposez votre fichier ici</span>
                                    <span id="file-sub-text" class="text-slate-400 font-medium"> ou cliquez pour parcourir</span>
                                </div>
                                <span class="inline-block px-3 py-1 bg-slate-200/50 text-slate-500 font-semibold text-[10px] rounded-full">
                                    MAXIMUM 500 MB
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Options complémentaires (Durée & Aperçu) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">

                        <!-- Durée estimée -->
                        <div class="p-4 bg-slate-50/60 rounded-2xl border border-slate-100 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-xl bg-purple-100/70 text-[#110B29] flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-extrabold text-[#110B29]">Durée estimée</p>
                                    <p class="text-[10px] text-slate-400 font-medium">Temps pour compléter</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-1">
                                <input
                                    type="number"
                                    name="duration"
                                    placeholder="15"
                                    class="w-14 px-2 py-1.5 bg-white border border-slate-200 rounded-xl text-center text-xs font-bold text-[#110B29] focus:outline-none focus:border-[#110B29]"
                                >
                                <span class="text-xs font-bold text-slate-400">min</span>
                            </div>
                        </div>

                        <!-- Aperçu Gratuit avec Checkbox cachée CSS Natif -->
                        <label class="p-4 bg-slate-50/60 rounded-2xl border border-slate-100 flex items-center justify-between cursor-pointer select-none">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-xl bg-emerald-100/70 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-extrabold text-[#110B29]">Aperçu gratuit</p>
                                    <p class="text-[10px] text-slate-400 font-medium">Visible sans achat</p>
                                </div>
                            </div>

                            <!-- Switch en CSS pur via l'état :checked -->
                            <input type="checkbox" name="is_free" value="1" class="peer sr-only">
                            <div class="w-11 h-6 bg-slate-200 peer-checked:bg-emerald-500 rounded-full p-1 transition-colors duration-200 relative flex items-center">
                                <div class="bg-white w-4 h-4 rounded-full shadow-md transform transition-transform duration-200 peer-checked:translate-x-5"></div>
                            </div>
                        </label>

                    </div>

                </div>

                <!-- 4. Barre d'actions -->
                <div class="flex items-center justify-end space-x-3 pt-2">
                    <a href="{{ route('list-courses.chapter') }}" class="px-6 py-3 border border-slate-200 hover:bg-slate-100 text-slate-700 font-extrabold text-xs rounded-2xl transition-all">
                        Annuler
                    </a>

                    <button type="submit" class="px-6 py-3 bg-[#110B29] hover:bg-[#1b123d] text-white font-extrabold text-xs rounded-2xl shadow-sm transition-all flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                        </svg>
                        <span>Enregistrer la leçon</span>
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- JavaScript Natif ultra-léger pour basculer les types -->
    <script>
        function handleTypeChange(selectedType) {
            const fileWrapper = document.getElementById('file-wrapper');
            const fileHint = document.getElementById('file-extension-hint');

            if (selectedType === 'quiz') {
                fileWrapper.classList.add('hidden');
            } else {
                fileWrapper.classList.remove('hidden');
                if (selectedType === 'video') {
                    fileHint.innerText = '(MP4, MKV)';
                } else if (selectedType === 'document') {
                    fileHint.innerText = '(PDF, DOCX)';
                }
            }
        }

        function updateFileName(input) {
            const labelText = document.getElementById('file-label-text');
            const subText = document.getElementById('file-sub-text');

            if (input.files && input.files[0]) {
                labelText.innerText = input.files[0].name;
                subText.innerText = " (Fichier sélectionné)";
            }
        }
    </script>
</x-layouts.admin.admin-layout>
