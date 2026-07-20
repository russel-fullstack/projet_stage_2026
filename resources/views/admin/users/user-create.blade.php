<x-layouts.admin.admin-layout>
    <div class="min-h-screen py-10 px-4 sm:px-6">
        <div class="max-w-6xl mx-auto">

            <div class="grid grid-cols-12 gap-8">

                {{-- Formulaire Principal (8 colonnes) --}}
                <div class="col-span-12 lg:col-span-8 bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm space-y-8">
                    <form action="" method="POST" class="space-y-8">
                        @csrf

                        {{-- Section 1 : Informations Personnelles --}}
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2 text-[#18005A]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <h3 class="text-xs font-black">Informations Personnelles</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label for="name" class="block text-xs font-bold text-gray-700">Nom complet</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Ex: Jean Dupont"
                                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/50  transition-all"
                                        required
                                    >
                                </div>

                                <div class="space-y-1.5">
                                    <label for="email" class="block text-xs font-bold text-gray-700">Adresse Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="j.dupont@exemple.fr"
                                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-medium placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                                        required
                                    >
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        <x-users.create.role-selector />
                        <hr class="border-gray-100">

                        {{-- Section 3 : Sécurité --}}
                        <x-users.create.password-generator />

                        {{-- Action Buttons --}}
                        <div class="pt-4 flex items-center space-x-4">
                            <button
                                type="submit"
                                class="px-6 py-3.5 bg-[#18005A] hover:bg-[#110042] text-white font-extrabold text-xs rounded-2xl shadow-md transition-all flex items-center justify-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235B10.132 10.132 0 0112 15c2.47 0 4.731.886 6.5 2.356" />
                                </svg>
                                <span>Créer le compte utilisateur</span>
                            </button>

                            <a href="{{ route('users.index') }}" class="px-6 py-3.5 border border-gray-200 hover:bg-gray-50 text-gray-700 font-extrabold text-xs rounded-2xl transition-all">
                                Annuler
                            </a>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</x-layouts.admin.admin-layout>
