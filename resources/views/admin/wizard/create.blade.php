<x-layouts.admin.admin-layout>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8" x-data="courseWizard()"
        @keydown.escape="resetForm()">

        <!-- HEADER DE PAGE -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="space-y-2">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 mb-2 rounded-full bg-backcheck border border-slate-200/60 text-primary text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                    Éditeur de cours
                </div>
                <h1 class="text-3xl font-extrabold text-primary tracking-tight">
                    Nouveau cours
                </h1>
                <p class="text-sm text-primary">
                    <span x-show="currentStep === 1">Définissez les bases de votre module avant d'ajouter le programme
                        pédagogique.</span>
                    <span x-show="currentStep === 2">Organisez et structurez le programme pédagogique de votre
                        cours.</span>
                    <span x-show="currentStep === 3">Complétez votre formation en ajoutant les leçons pratiques.</span>
                </p>
            </div>

            <a href="{{ route('courses.index') }}"
                class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200/80 bg-white text-xs font-bold text-primary hover:bg-slate-50 hover:border-slate-300 transition-all duration-200 shadow-sm active:scale-[0.98]">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Retour
            </a>
        </div>

        <!-- INDICATEUR D'ÉTAPES -->
        <div class="pt-3">
            <div class="flex items-center">

                <!-- Étape 1 -->
                <div class="flex items-center gap-3">
                    <div :class="{
                        'bg-secondary text-white': currentStep >= 1,
                        'bg-slate-100 text-slate-400': currentStep < 1
                    }"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold transition-colors duration-300">
                        <span x-show="currentStep > 1">✓</span>
                        <span x-show="currentStep <= 1">1</span>
                    </div>

                    <div class="hidden sm:block">
                        <p class="text-[10px] font-bold uppercase text-slate-400">Étape 1</p>
                        <p class="text-sm font-extrabold text-slate-700">Informations</p>
                    </div>
                </div>

                <!-- Ligne 1 -->
                <div :class="currentStep >= 2 ? 'bg-secondary' : 'bg-slate-200'"
                    class="flex-1 h-1 mx-4 transition-colors duration-300"></div>

                <!-- Étape 2 -->
                <div class="flex items-center gap-3">
                    <div :class="{
                        'bg-secondary text-white': currentStep >= 2,
                        'bg-slate-100 text-slate-400': currentStep < 2
                    }"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold transition-colors duration-300">
                        <span x-show="currentStep > 2">✓</span>
                        <span x-show="currentStep <= 2">2</span>
                    </div>

                    <div class="hidden sm:block">
                        <p class="text-[10px] font-bold uppercase text-slate-400">Étape 2</p>
                        <p class="text-sm font-extrabold text-slate-700">Chapitres</p>
                    </div>
                </div>

                <!-- Ligne 2 -->
                <div :class="currentStep >= 3 ? 'bg-secondary' : 'bg-slate-200'"
                    class="flex-1 h-1 mx-4 transition-colors duration-300"></div>

                <!-- Étape 3 -->
                <div class="flex items-center gap-3">
                    <div :class="{
                        'bg-secondary text-white': currentStep >= 3,
                        'bg-slate-100 text-slate-400': currentStep < 3
                    }"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold transition-colors duration-300">
                        <span x-show="currentStep > 3">✓</span>
                        <span x-show="currentStep <= 3">3</span>
                    </div>

                    <div class="hidden sm:block">
                        <p class="text-[10px] font-bold uppercase text-slate-400">Étape 3</p>
                        <p class="text-sm font-extrabold text-slate-700">Leçons</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ALERTE D'ERREUR -->
        <div x-show="hasErrors" @click="hasErrors = false"
            class="p-4 rounded-2xl bg-rose-50/80 border border-rose-200/80 text-xs sm:text-sm font-bold text-rose-800 flex items-center gap-3 shadow-sm cursor-pointer hover:bg-rose-50 transition">
            <div class="w-7 h-7 rounded-lg bg-rose-500/10 flex items-center justify-center shrink-0 text-rose-600">
                <svg class="w-4 h-4 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
            </div>
            <span x-text="errorMessage"></span>
        </div>

        <!-- FORMULAIRE WIZARD -->
        <form @submit.prevent="handleSubmit" class="space-y-8" enctype="multipart/form-data">
            @csrf

            <!-- ===== ÉTAPE 1: INFORMATIONS GÉNÉRALES ===== -->
            <div x-show="currentStep === 1" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Colonne gauche: Formulaire -->
                <div
                    class="lg:col-span-7 bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-6">

                    <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                        <span
                            class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary text-white font-bold text-xs">01</span>
                        <h2 class="text-base font-bold text-primary">Informations générales</h2>
                    </div>

                    <!-- Spécialité -->
                    <div class="space-y-2">
                        <label for="specialty_id" class="block text-xs font-bold uppercase tracking-wider text-primary">
                            Spécialité & Programme <span class="text-rose-500">*</span>
                        </label>
                        <div class="relative">
                            <select id="specialty_id" x-model="formData.specialty_id" @change="validateStep(1)"
                                class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none appearance-none cursor-pointer">
                                <option value="" disabled selected>Sélectionnez une option...</option>
                                @foreach ($specialties as $specialty)
                                    <option value="{{ $specialty->id }}">
                                        {{ $specialty->program->name }} — {{ $specialty->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div
                                class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                        <p x-show="errors.specialty_id"
                            class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            La spécialité est obligatoire
                        </p>
                    </div>

                    <!-- Titre du cours -->
                    <div class="space-y-2">
                        <label for="title" class="block text-xs font-bold uppercase tracking-wider text-primary">
                            Titre du cours <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="title" x-model="formData.title" @change="validateStep(1)"
                            placeholder="ex. Développer une API REST avec Laravel"
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none">
                        <p x-show="errors.title"
                            class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            Le titre est obligatoire (min 5 caractères)
                        </p>
                    </div>

                    <!-- Description -->
                    <div class="space-y-2">
                        <label for="description"
                            class="block text-xs font-bold uppercase tracking-wider text-primary">
                            Description
                        </label>
                        <textarea id="description" x-model="formData.description" @change="validateStep(1)" rows="6"
                            placeholder="Résumez en quelques lignes le contenu et les objectifs du cours..."
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all duration-200 outline-none resize-none"></textarea>
                        <p x-show="errors.description"
                            class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            La description est recommandée
                        </p>
                    </div>

                </div>

                <!-- Colonne droite: Image de couverture -->
                <div class="lg:col-span-5 space-y-6">

                    <div
                        class="bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-6">
                        <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                            <span
                                class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary text-white font-bold text-xs">02</span>
                            <h2 class="text-base font-bold text-primary">Visuel de couverture</h2>
                        </div>

                        <!-- Zone d'upload -->
                        <div class="space-y-3">
                            <div
                                class="p-1 border border-slate-200/80 rounded-2xl bg-slate-50/50 hover:bg-slate-50 transition-colors">
                                <div class="relative">
                                    <input type="file" @change="handleImageUpload($event)"
                                        accept="image/png,image/jpeg,image/webp" class="hidden" id="imageInput">
                                    <label for="imageInput"
                                        class="flex flex-col items-center justify-center py-12 px-4 rounded-xl cursor-pointer hover:bg-slate-50/50 transition">
                                        <svg x-show="!imagePreview" class="w-12 h-12 text-slate-300 mb-3"
                                            fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33A3 3 0 0116.5 19.5H6.75z" />
                                        </svg>
                                        <img x-show="imagePreview" :src="imagePreview"
                                            class="max-w-full h-auto rounded-xl max-h-64">
                                        <p class="text-sm text-slate-500 text-center mt-2">
                                            <span x-show="!imagePreview" class="font-medium">Cliquez pour télécharger
                                                une image</span>
                                            <span x-show="imagePreview" class="text-green-600 font-semibold">✓ Image
                                                chargée</span>
                                        </p>
                                    </label>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/60 flex items-start gap-3">
                                <svg class="w-5 h-5 text-slate-400 mt-0.5 shrink-0" fill="none"
                                    stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                                <p class="text-xs text-primary leading-relaxed font-normal">
                                    Format recommandé : <strong class="text-primary font-semibold">16:9</strong> (ex.
                                    1280×720 px). Fichiers acceptés : PNG, JPG, WebP.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- ===== ÉTAPE 2: CHAPITRES ===== -->
            <div x-show="currentStep === 2" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Formulaire Chapitre -->
                <div
                    class="lg:col-span-5 bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 shadow-sm p-6 sm:p-8 space-y-6">

                    <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                        <span
                            class="flex items-center justify-center w-7 h-7 rounded-lg bg-primary/80 text-white font-bold text-xs shadow-md shadow-primary/50/20">+</span>
                        <h2 class="text-base font-extrabold text-primary">Créer un chapitre</h2>
                    </div>

                    <!-- Titre du chapitre -->
                    <div class="space-y-2">
                        <label for="chapter_title"
                            class="block text-xs font-bold uppercase tracking-wider text-slate-500">
                            Titre du chapitre <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="chapter_title" x-model="newChapter.title"
                            placeholder="ex. Les fondamentaux de la syntaxe"
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary/80 focus:ring-4 focus:ring-primary/80/10 transition-all duration-200 outline-none">
                        <p x-show="errors.chapter_title"
                            class="text-xs font-semibold text-rose-600 flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            Le titre du chapitre est obligatoire
                        </p>
                    </div>

                    <!-- Description du chapitre -->
                    <div class="space-y-2">
                        <label for="chapter_desc"
                            class="block text-xs font-bold uppercase tracking-wider text-slate-500">
                            Description <span class="font-normal text-slate-400 lowercase">(optionnel)</span>
                        </label>
                        <textarea id="chapter_desc" x-model="newChapter.description" rows="4"
                            placeholder="Aperçu des objectifs de cette section..."
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-primary text-sm font-medium placeholder:text-slate-400 focus:bg-white focus:border-primary/80 focus:ring-4 focus:ring-primary/80/10 transition-all duration-200 outline-none resize-none"></textarea>
                    </div>

                    <button type="button" @click="addChapter()"
                        class="w-full py-3.5 px-6 rounded-xl bg-primary/90 cursor-pointer text-white text-xs font-extrabold tracking-wide shadow-md shadow-primary/50/20 hover:shadow-lg hover:shadow-primary/50/30 transition-all duration-200 active:scale-[0.98] flex items-center justify-center gap-2 group">
                        <span>Ajouter le chapitre</span>
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none"
                            stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>

                </div>

                <!-- Liste des chapitres -->
                <div class="lg:col-span-7">

                    <div
                        class="bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">

                        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-extrabold text-primary">
                                    Programme du cours
                                </h2>
                                <p class="text-xs font-medium text-slate-400 mt-0.5">
                                    <span x-text="chapters.length"></span> chapitre(s) ajouté(s)
                                </p>
                            </div>

                            <span
                                class="px-3 py-1 rounded-xl bg-blue-50 text-primary/80 font-black text-xs border border-primary/10"
                                x-text="chapters.length"></span>
                        </div>

                        <!-- Liste des chapitres -->
                        <div class="divide-y divide-slate-100">
                            <template x-for="(chapter, index) in chapters" :key="index">
                                <div
                                    class="p-5 sm:p-6 flex items-start gap-4 hover:bg-slate-50/60 transition-colors group">

                                    <div class="shrink-0 w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center text-xs font-black shadow-sm group-hover:bg-primary/80 transition-colors"
                                        x-text="String(index + 1).padStart(2, '0')"></div>

                                    <div class="flex-1 min-w-0 space-y-1">
                                        <h3 class="text-sm font-bold text-primary leading-snug"
                                            x-text="chapter.title"></h3>

                                        <p x-show="chapter.description"
                                            class="text-xs text-slate-500 font-medium line-clamp-2 leading-relaxed"
                                            x-text="chapter.description"></p>
                                    </div>

                                    <button type="button" @click="removeChapter(index)"
                                        class="w-9 h-9 rounded-xl border border-slate-200/80 bg-white text-slate-400 hover:text-rose-600 hover:border-rose-200 hover:bg-rose-50/50 transition-all duration-200 flex items-center justify-center shadow-sm shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>

                                </div>
                            </template>

                            <template x-if="chapters.length === 0">
                                <div class="p-12 text-center space-y-3">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-blue-50 text-primary/80 flex items-center justify-center mx-auto shadow-sm">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18c-2.305 0-4.408.867-6 2.292m0-14.25v14.25" />
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-extrabold text-primary tracking-tight">
                                        Aucun chapitre pour le moment
                                    </h3>
                                    <p class="text-xs font-medium text-slate-400 max-w-xs mx-auto">
                                        Remplissez le formulaire de gauche pour structurer les grandes parties de ce
                                        cours.
                                    </p>
                                </div>
                            </template>
                        </div>

                    </div>

                </div>

            </div>

            <!-- ===== ÉTAPE 3: LEÇONS ===== -->
            <div x-show="currentStep === 3" x-transition class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Formulaire Leçon -->
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 h-fit">

                    <h2 class="text-base font-extrabold text-primary">
                        Ajouter une leçon
                    </h2>

                    <p class="mt-1 mb-6 text-xs text-slate-500">
                        Ajoutez une nouvelle vidéo à votre formation.
                    </p>

                    <!-- Chapitre -->
                    <div class="mb-5">
                        <label for="lesson_chapter" class="block mb-2 text-xs font-bold text-slate-700">
                            Chapitre <span class="text-rose-500">*</span>
                        </label>
                        <select id="lesson_chapter" x-model="newLesson.chapiter_id"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none">
                            <option value="">Sélectionner un chapitre</option>
                            <template x-for="(chapter, index) in chapters" :key="index">
                                <option :value="index" x-text="chapter.title"></option>
                            </template>
                        </select>
                        <p x-show="errors.lesson_chapiter" class="mt-2 text-xs font-bold text-rose-600">
                            Le chapitre est obligatoire
                        </p>
                    </div>

                    <!-- Titre Leçon -->
                    <div class="mb-5">
                        <label for="lesson_title" class="block mb-2 text-xs font-bold text-slate-700">
                            Titre de la leçon <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" id="lesson_title" x-model="newLesson.title"
                            placeholder="Ex : Installation de Laravel"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none">
                        <p x-show="errors.lesson_title" class="mt-2 text-xs font-bold text-rose-600">
                            Le titre est obligatoire
                        </p>
                    </div>

                    <!-- Contenu Leçon -->
                    <div class="mb-5">
                        <label for="lesson_content" class="block mb-2 text-xs font-bold text-slate-700">
                            Contenu
                        </label>
                        <textarea id="lesson_content" x-model="newLesson.content" rows="3" placeholder="Description de la leçon..."
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none resize-none"></textarea>
                    </div>

                    <!-- Vidéo -->
                    <div class="mb-6">
                        <label for="lesson_video" class="block mb-2 text-xs font-bold text-slate-700">
                            Vidéo <span class="text-rose-500">*</span>
                        </label>
                        <input type="file" id="lesson_video" @change="handleVideoUpload($event)"
                            accept="video/mp4,video/webm,video/quicktime"
                            class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-primary file:text-white hover:file:bg-primary/90">

                        <p class="mt-2 text-[11px] text-slate-400">
                            Formats acceptés : MP4, WebM, MOV. La vidéo est obligatoire.
                        </p>

                        <p x-show="errors.lesson_video" class="mt-2 text-xs font-bold text-rose-600">
                            La vidéo de la leçon est obligatoire.
                        </p>
                    </div>

                    <button type="button" @click="addLesson()"
                        class="w-full px-5 py-3 rounded-xl bg-primary text-white text-sm font-bold hover:bg-primary/90 transition shadow-md active:scale-[0.98]">
                        + Ajouter la leçon
                    </button>

                </div>

                <!-- Liste des Leçons -->
                <div class="lg:col-span-2 space-y-6">

                    <template x-for="(chapter, index) in chapters" :key="index">
                        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">

                            <div class="p-5 border-b border-slate-100">
                                <p class="text-xs font-bold text-secondary pb-1">
                                    CHAPITRE <span x-text="index + 1"></span>
                                </p>
                                <h2 class="mt-1 text-base font-extrabold text-primary" x-text="chapter.title"></h2>
                            </div>

                            <div class="divide-y divide-slate-100">
                                <template x-for="(lesson, lessonIndex) in chapter.lessons || []"
                                    :key="lessonIndex">
                                    <div class="p-5 flex items-start gap-4 hover:bg-slate-50/50 transition group">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center shrink-0 group-hover:bg-blue-100 transition">
                                            🎥
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-sm font-bold text-slate-800" x-text="lesson.title"></h3>
                                            <p class="mt-1 text-xs text-slate-500">
                                                Leçon <span x-text="lessonIndex + 1"></span>
                                            </p>
                                        </div>
                                        <button type="button" @click="removeLesson(index, lessonIndex)"
                                            class="text-slate-400 hover:text-rose-600 transition shrink-0">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </template>

                                <template x-if="!chapter.lessons || chapter.lessons.length === 0">
                                    <div class="p-6 text-center text-xs text-slate-500">
                                        Aucune leçon ajoutée dans ce chapitre.
                                    </div>
                                </template>
                            </div>

                        </div>
                    </template>

                    <template x-if="chapters.length === 0">
                        <div class="bg-white rounded-3xl border border-slate-200 p-10 text-center">
                            <p class="text-sm font-bold text-slate-400">Aucun chapitre disponible</p>
                        </div>
                    </template>

                </div>

            </div>

            <!-- BOUTONS DE NAVIGATION -->
            <div
                class="bg-white/80 backdrop-blur-md rounded-3xl border border-slate-200/80 p-5 shadow-sm flex items-center justify-between gap-4 flex-wrap sm:flex-nowrap">
                <button type="button" @click="previousStep()" x-show="currentStep > 1"
                    class="px-5 py-3 rounded-xl border border-slate-200/80 text-xs font-bold text-slate-600 hover:bg-slate-50 transition-all active:scale-[0.98]">
                    ← Précédent
                </button>
                <div x-show="currentStep === 1"></div>

                <div class="flex gap-3 flex-wrap sm:flex-nowrap">
                    <button type="button" @click="resetForm()" x-show="currentStep > 1"
                        class="px-6 py-3 rounded-xl bg-slate-100 text-slate-700 text-xs font-bold hover:bg-slate-200 transition-all active:scale-[0.98]">
                        🔄 Réinitialiser
                    </button>

                    <button type="button" @click="nextStep()" x-show="currentStep < 3"
                        :disabled="!isStepValid(currentStep)"
                        :class="isStepValid(currentStep) ?
                            'bg-primary hover:bg-primary/90 text-white cursor-pointer shadow-md shadow-primary/30' :
                            'bg-slate-100 text-slate-400 cursor-not-allowed'"
                        class="px-6 py-3 rounded-xl text-xs font-extrabold tracking-wide transition-all active:scale-[0.98] flex items-center gap-2 group">
                        <span>Suivant →</span>
                    </button>

                    <button type="submit" x-show="currentStep === 3" :disabled="!isFormComplete()"
                        :class="isFormComplete() ?
                            'bg-green-500 hover:bg-green-600 text-white cursor-pointer shadow-md shadow-green-500/30' :
                            'bg-slate-100 text-slate-400 cursor-not-allowed'"
                        class="px-8 py-3 rounded-xl text-xs font-extrabold tracking-wide transition-all active:scale-[0.98] flex items-center gap-2 group">
                        <span>✓ Créer le cours</span>
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

        </form>

    </div>

    <script>
        function courseWizard() {
            return {
                currentStep: 1,
                hasErrors: false,
                errorMessage: '',

                lessonVideos: [],

                formData: {
                    specialty_id: '',
                    title: '',
                    description: '',
                    image_cover: ''
                },

                chapters: [],
                newChapter: {
                    title: '',
                    description: ''
                },

                newLesson: {
                    chapiter_id: '',
                    title: '',
                    content: '',
                    video_url: null,
                    video_index: null
                },

                errors: {},
                imagePreview: null,

                init() {
                    const savedData = @json(session('course_wizard_data', []));
                    if (savedData && Object.keys(savedData).length > 0) {
                        this.formData = {
                            ...this.formData,
                            ...savedData
                        };
                        if (savedData.chapters) {
                            this.chapters = savedData.chapters;
                        }
                    }
                },

                isStepValid(step) {
                    if (step === 1) {
                        return this.formData.specialty_id &&
                            this.formData.title &&
                            this.formData.title.length >= 5;
                    } else if (step === 2) {
                        return this.chapters.length > 0;
                    }
                    return true;
                },

                isFormComplete() {
                    if (!this.isStepValid(1)) {
                        return false;
                    }

                    if (!this.isStepValid(2)) {
                        return false;
                    }

                    const allLessons = this.chapters.flatMap(
                        chapter => chapter.lessons || []
                    );

                    if (allLessons.length === 0) {
                        return false;
                    }

                    return allLessons.every(
                        lesson =>
                        lesson.video_index !== null &&
                        lesson.video_index !== undefined &&
                        this.lessonVideos[lesson.video_index]
                    );
                },

                validateStep(step) {
                    this.errors = {};

                    if (step === 1) {
                        if (!this.formData.specialty_id) {
                            this.errors.specialty_id = true;
                        }
                        if (!this.formData.title || this.formData.title.length < 5) {
                            this.errors.title = true;
                        }
                    }
                },

                handleImageUpload(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            this.imagePreview = event.target.result;
                        };
                        reader.readAsDataURL(file);
                        this.formData.image_cover = file;
                    }
                },

                handleVideoUpload(e) {
                    const file = e.target.files[0];

                    if (!file) {
                        this.newLesson.video_url = null;
                        this.newLesson.video_index = null;
                        return;
                    }

                    const allowedTypes = [
                        'video/mp4',
                        'video/webm',
                        'video/quicktime'
                    ];

                    if (!allowedTypes.includes(file.type)) {
                        this.errors.lesson_video = true;
                        this.hasErrors = true;
                        this.errorMessage = 'Format vidéo non supporté. Utilisez MP4, WebM ou MOV.';

                        e.target.value = '';
                        return;
                    }

                    this.lessonVideos.push(file);

                    this.newLesson.video_url = file;
                    this.newLesson.video_index = this.lessonVideos.length - 1;

                    this.errors.lesson_video = false;
                    this.hasErrors = false;
                },

                addChapter() {
                    this.errors = {};
                    if (!this.newChapter.title) {
                        this.errors.chapter_title = true;
                        this.hasErrors = true;
                        this.errorMessage = 'Le titre du chapitre est obligatoire';
                        return;
                    }

                    this.chapters.push({
                        ...this.newChapter,
                        lessons: []
                    });

                    this.newChapter = {
                        title: '',
                        description: ''
                    };
                    this.hasErrors = false;
                },

                removeChapter(index) {
                    this.chapters.splice(index, 1);
                },

                addLesson() {
                    this.errors = {};

                    if (this.newLesson.chapiter_id === '') {
                        this.errors.lesson_chapiter = true;
                        this.hasErrors = true;
                        this.errorMessage = 'Sélectionnez un chapitre';
                        return;
                    }

                    if (!this.newLesson.title) {
                        this.errors.lesson_title = true;
                        this.hasErrors = true;
                        this.errorMessage = 'Le titre de la leçon est obligatoire';
                        return;
                    }

                    if (!this.newLesson.video_url) {
                        this.errors.lesson_video = true;
                        this.hasErrors = true;
                        this.errorMessage = 'La vidéo de la leçon est obligatoire';
                        return;
                    }

                    const chapterIndex = parseInt(this.newLesson.chapiter_id);
                    if (!this.chapters[chapterIndex].lessons) {
                        this.chapters[chapterIndex].lessons = [];
                    }

                    this.chapters[chapterIndex].lessons.push({
                        title: this.newLesson.title,
                        content: this.newLesson.content,
                        video_index: this.newLesson.video_index
                    });

                    this.newLesson = {
                        chapiter_id: '',
                        title: '',
                        content: '',
                        video_url: null,
                        video_index: null
                    };
                    this.hasErrors = false;
                },

                removeLesson(chapterIndex, lessonIndex) {
                    this.chapters[chapterIndex].lessons.splice(lessonIndex, 1);
                },

                nextStep() {
                    this.validateStep(this.currentStep);
                    if (this.isStepValid(this.currentStep)) {
                        this.currentStep++;
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        this.hasErrors = true;
                        this.errorMessage = 'Veuillez compléter l\'étape actuelle avant de continuer';
                    }
                },

                previousStep() {
                    if (this.currentStep > 1) {
                        this.currentStep--;
                        this.hasErrors = false;
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    }
                },

                resetForm() {
                    if (confirm('Êtes-vous sûr ? Toutes les données seront perdues.')) {
                        this.formData = {
                            specialty_id: '',
                            title: '',
                            description: '',
                            image_cover: null
                        };
                        this.chapters = [];
                        this.newChapter = {
                            title: '',
                            description: ''
                        };
                       this.newLesson = {
                            chapiter_id: '',
                            title: '',
                            content: '',
                            video_url: null,
                            video_index: null
                            };

                            this.lessonVideos = [];
                        this.currentStep = 1;
                        this.hasErrors = false;
                        this.imagePreview = null;
                    }
                },

                async handleSubmit() {
                                if (!this.isFormComplete()) {
                    this.hasErrors = true;
                    this.errorMessage =
                    'Chaque leçon doit obligatoirement avoir une vidéo.';
                    return;
                    }

                    const formData = new FormData();

                    formData.append(
                    'specialty_id',
                    this.formData.specialty_id
                    );

                    formData.append(
                    'title',
                    this.formData.title
                    );

                    formData.append(
                    'description',
                    this.formData.description || ''
                    );

                    if (this.formData.image_cover) {
                    formData.append(
                    'image_cover',
                    this.formData.image_cover
                    );
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Chapitres + leçons
                    |--------------------------------------------------------------------------
                    */

                    formData.append(
                    'chapters',
                    JSON.stringify(this.chapters)
                    );

                    /*
                    |--------------------------------------------------------------------------
                    | Vidéos
                    |--------------------------------------------------------------------------
                    */

                    this.lessonVideos.forEach((video, index) => {

                    formData.append(
                    `lesson_videos[${index}]`,
                    video
                    );

                    });

                    try {

                    const response = await fetch(
                    '{{ route("list-courses.store") }}',
                    {
                        method: 'POST',

                        headers: {
                            'X-CSRF-TOKEN':
                                document.querySelector(
                                    'meta[name="csrf-token"]'
                                ).content,
                        },

                        body: formData
                    }
                    );

                    const data = await response.json();

                    if (response.ok) {

                    alert('✅ Cours créé avec succès !');

                    window.location.href =
                        '{{ route("courses.index") }}';

                    } else {

                    this.hasErrors = true;

                    this.errorMessage =
                        data.message ||
                        'Erreur lors de la création du cours.';
                    }

                    } catch (error) {

                    this.hasErrors = true;

                    this.errorMessage =
                    'Erreur serveur : ' + error.message;

                }
             }
        }
        }
    </script>


</x-layouts.admin.admin-layout>
