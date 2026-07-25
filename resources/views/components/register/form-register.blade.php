<!-- En-tête -->
<div class="space-y-1 mb-8">
    <h2 class="text-3xl font-black text-[#110B29] tracking-tight">Créez votre compte</h2>
    <p class="text-xs font-medium text-slate-500">Commencez votre parcours d'apprentissage en moins de 60 secondes.</p>
</div>

<!-- Formulaire HTML Autonome -->
<form action="{{ route('register') }}" method="POST" class="space-y-4">
    @csrf

    <!-- Nom Complet -->
    <div>
        <label for="name" class="block text-xs font-bold text-[#110B29] mb-1">
            Nom Complet
        </label>
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
            </span>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name') }}"
                placeholder="John Doe"
                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800  focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 transition-all"

                autofocus
                autocomplete="name"
            />
        </div>
        @error('name')
        <p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <!-- Adresse E-mail -->
    <div>
        <label for="email" class="block text-xs font-bold text-[#110B29] mb-1">
            Adresse E-mail
        </label>
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
            </span>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                placeholder="nom@exemple.com"
                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800  focus:outline-none focus:ring-2 focus:ring-[#110B29]/10 transition-all"

                autocomplete="username"
            />
        </div>
        @error('email')
        <p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>
        @enderror
    </div>

    <!-- Mots de Passe (2 colonnes) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="password" class="block text-xs font-bold text-[#110B29] mb-1">
                Mot de passe
            </label>
            <div class="relative" x-data="{ show: false }">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                    </span>
                <input
                    id="password"
                    name="password"
                    :type="show ? 'text' : 'password'"
                    placeholder="••••••••"
                    class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#110B29] focus:ring-2 focus:ring-[#110B29]/10 transition-all"

                    autocomplete="new-password"
                />
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
            @error('password')
            <p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-xs font-bold text-[#110B29] mb-1">
                Confirmer
            </label>
            <div class="relative" x-data="{ show: false }">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                </span>
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    :type="show ? 'text' : 'password'"
                    placeholder="••••••••"
                    class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#110B29] focus:ring-2 focus:ring-[#110B29]/10 transition-all"

                    autocomplete="new-password"
                />
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
            @error('password_confirmation')
            <p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Conditions -->
    <div class="flex items-center pt-1">
        <input id="terms" name="terms" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-[#110B29] focus:ring-[#110B29]/20 cursor-pointer" >
        <label for="terms" class="ml-2 text-xs font-medium text-slate-600 cursor-pointer">
            J'accepte les <a href="#" class="text-[#110B29] font-bold underline hover:text-purple-700">Conditions</a> et la <a href="#" class="text-[#110B29] font-bold underline hover:text-purple-700">Confidentialité</a>.
        </label>
    </div>

    <!-- Bouton Soumettre -->
    <div class="pt-2">
        <button
            type="submit"
            class="w-full inline-flex items-center justify-center px-5 py-3.5 bg-[#110B29] hover:bg-[#1b123d] text-white font-extrabold text-xs rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#110B29]/20 focus:ring-offset-2 active:scale-[0.98] cursor-pointer"
        >
            Créer mon compte
        </button>
    </div>
</form>
