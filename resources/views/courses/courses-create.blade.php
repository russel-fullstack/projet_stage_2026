<x-layouts.app-layout>
    <div class="min-h-screen bg-[#F8FAFC] py-10 px-4 sm:px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-10 border border-gray-100 shadow-sm">

            <form action="" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                {{-- Section Supérieure : Titre, Catégorie, Description courte & Notice --}}
                <div class="grid grid-cols-12 gap-6">

                    {{-- Titre du cours (8 cols) --}}
                    <div class="col-span-12 md:col-span-8 space-y-1.5">
                        <label for="title" class="block text-xs font-black text-gray-900">Titre du cours</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            placeholder="ex: Introduction au Design UI/UX moderne"
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all"

                        >
                    </div>

                    {{-- Catégorie (Spécialité) (4 cols) --}}
                    <div class="col-span-12 md:col-span-4 space-y-1.5">
                        <label for="category_id" class="block text-xs font-black text-gray-900">Catégorie (Spécialité)</label>
                        <div class="relative">
                            <select
                                id="category_id"
                                name="category_id"
                                class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all pr-10"

                            >
                                <option value="" disabled selected>Sélectionner</option>
                                <option value="1">Design UI/UX</option>
                                <option value="2">Développement Web</option>
                                <option value="3">Data & IA</option>
                                <option value="4">Marketing Digital</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- Description courte (8 cols) --}}
                    <div class="col-span-12 md:col-span-8 space-y-1.5">
                        <label for="short_description" class="block text-xs font-black text-gray-900">Description courte</label>
                        <textarea
                            id="short_description"
                            name="short_description"
                            rows="3"
                            placeholder="Un résumé percutant pour attirer vos futurs apprenants..."
                            class="w-full p-4 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#002266]/20 focus:border-[#002266] transition-all resize-none"

                        ></textarea>
                    </div>

                    {{-- Notice Cours gratuit (4 cols) --}}
                    <div class="col-span-12 md:col-span-4 flex items-center">
                        <x-courses.create.free-notice />
                    </div>

                </div>

                {{-- Section : Vignette du cours --}}
                <x-courses.create.file-uploader />

                {{-- Section : Description détaillée avec éditeur WYSIWYG --}}
                <x-courses.create.rich-text-editor />

                {{-- Actions de bas de page --}}
                <div class="pt-4 flex items-center justify-end space-x-6">
                    <a href="{{ route('user-dashboard') }}" class="text-xs font-bold text-gray-500 hover:text-gray-900 transition-colors">
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="px-6 py-3.5 bg-[#18005A] hover:bg-[#110042] text-white font-extrabold text-xs rounded-2xl shadow-md transition-all inline-flex items-center space-x-2"
                    >
                        <span>Créer et passer aux chapitres</span>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/>
                        </svg>
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-layouts.app-layout>
