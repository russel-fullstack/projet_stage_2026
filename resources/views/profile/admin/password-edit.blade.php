<x-layouts.admin.admin-layout>
    <!-- 2. SÉCURITÉ & MOT DE PASSE -->
    <div class="max-w-6xl mx-auto px-6 py-10 min-h-screen">

    <div class="flex flex-col lg:flex-row gap-12">
    <x-profile.admin.profile-sidebar/>
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm">
        <div class="max-w-xl">
            <section>
                <header class="mb-6">
                    <h2 class="text-base font-extrabold text-[#002266]">
                        Modifier le mot de passe
                    </h2>
                    <p class="mt-1 text-xs font-medium text-slate-500">
                        Assurez-vous d'utiliser un mot de passe long et complexe pour sécuriser votre compte.
                    </p>
                </header>

                <form method="post" action="{{ route('profile.password.update') }}" class="space-y-5">
                    @csrf
                    @method('put')
                    <!-- Mot de passe actuel -->
                    <div x-data="{ show: false }">
                        <label for="password" class="block text-xs font-black  text-slate-700  mb-2">
                            Mot de passe actuel
                        </label>
                        <div class="relative rounded-xl shadow-sm">
                            <input
                                id="current_password"
                                :type="show ? 'text' : 'password'"
                                name="current_password"
                                autocomplete="current-password"
                                class="w-full pl-4 pr-11 py-3 rounded-xl border border-slate-200 text-sm font-semibold  focus:outline-none focus:ring-2  transition-all duration-150
                                @error('current_password', 'updatePassword') border-rose-500 text-rose-900 focus:ring-rose-200

                                 @enderror"
                                placeholder="••••••••••••"
                            />
                            <!-- Bouton afficher/masquer -->
                            <button
                                type="button"
                                @click="show = !show"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            >
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                        @error('current_password', 'updatePassword')
                        <p class="mt-1.5 text-xs font-bold text-rose-600 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Nouveau mot de passe -->
                    <div x-data="{ show: false }">
                        <label for="password" class="block text-xs font-black  text-slate-700  mb-2">
                            Nouveau mot de passe
                        </label>
                        <div class="relative rounded-xl shadow-sm">
                            <input
                                id="password"
                                :type="show ? 'text' : 'password'"
                                name="password"
                                autocomplete="password"
                                class="w-full pl-4 pr-11 py-3 rounded-xl border border-slate-200 text-sm font-semibold  placeholder-slate-400 focus:outline-none focus:ring-2  transition-all duration-150
                                @error('password', 'updatePassword') border-rose-500 text-rose-900 focus:ring-rose-200 @enderror"
                                placeholder="••••••••••••"
                            />
                            <!-- Bouton afficher/masquer -->
                            <button
                                type="button"
                                @click="show = !show"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            >
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                        @error('password', 'updatePassword')
                        <p class="mt-1.5 text-xs font-bold text-rose-600 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            {{ $message }}
                        </p>
                        @enderror
                </div>

                     <!-- Confirmation du mot de passe -->
                    <div x-data="{ show: false }">
                        <label for="password" class="block text-xs font-black  text-slate-700  mb-2">
                            Confirmer le mot de passe
                        </label>
                        <div class="relative rounded-xl shadow-sm">
                            <input
                                id="password_confirmation"
                                :type="show ? 'text' : 'password'"
                                name="password_confirmation"
                                autocomplete="password-confirmation"
                                class="w-full pl-4 pr-11 py-3 rounded-xl border border-slate-200 text-sm font-semibold   focus:outline-none focus:ring-2  transition-all duration-150
                                @error('password_confirmation', 'updatePassword') border-rose-500 text-rose-900 focus:ring-rose-200 @enderror"
                                placeholder="••••••••••••"
                            />
                            <!-- Bouton afficher/masquer -->
                            <button
                                type="button"
                                @click="show = !show"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none"
                            >
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                        @error('password_confirmation', 'updatePassword')
                        <p class="mt-1.5 text-xs font-bold text-rose-600 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

    <div class="flex items-center gap-4 pt-2">
        <button type="submit" class="px-5 py-2.5 bg-[#002266] text-white font-bold text-xs rounded-xl hover:bg-[#001a4d] transition-all shadow-sm">
            Mettre à jour
        </button>
    </div>
    </form>
    </section>
            </div>
         </div>
    </div>
</div>

</x-layouts.admin.admin-layout>
