<!-- En-tête -->
<div class="space-y-1 mb-8">
    <h2 class="text-3xl font-black text-[#110B29] tracking-tight">Bon retour !</h2>
    <p class="text-xs font-medium text-slate-500">Saisissez vos identifiants pour accéder à votre espace.</p>
</div>

<!-- Message de statut de session (Laravel Breeze / Fortify) -->
@if (session('status'))
    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-xs font-semibold text-emerald-700 rounded-xl">
        {{ session('status') }}
    </div>
@endif

<!-- Formulaire de Connexion -->
<form action="{{ route('login') }}" method="POST" class="space-y-4">
    @csrf

    <!-- Adresse E-mail -->
    <div>
        <label for="email" class="block text-xs font-bold text-[#110B29] mb-1">Adresse E-mail</label>
        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            </span>
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="nom@exemple.com" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none  focus:ring-2 focus:ring-[#110B29]/10 transition-all"  autofocus autocomplete="username" />
        </div>
        @error('email')<p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>@enderror
    </div>

    <!-- Mot de passe -->
    <div>
        <div class="flex items-center justify-between mb-1">
            <label for="password" class="block text-xs font-bold text-[#110B29]">Mot de passe</label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-[11px] font-bold text-[#110B29] hover:underline">Mot de passe oublié ?</a>
            @endif
        </div>
        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                            </span>
            <input id="password" name="password" type="password" placeholder="••••••••" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none  focus:ring-2 focus:ring-[#110B29]/10 transition-all"  autocomplete="current-password" />
        </div>
        @error('password')<p class="mt-1 text-xs text-rose-600 font-semibold">{{ $message }}</p>@enderror
    </div>

    <!-- Se souvenir de moi -->
    <div class="flex items-center justify-between pt-1">
        <label class="flex items-center cursor-pointer">
            <input id="remember_me" name="remember" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-[#110B29] focus:ring-[#110B29]/20 cursor-pointer">
            <span class="ml-2 text-xs font-medium text-slate-600">Se souvenir de moi</span>
        </label>
    </div>

    <!-- Bouton Connexion -->
    <div class="pt-2">
        <button type="submit" class="w-full inline-flex items-center justify-center px-5 py-3.5 bg-[#110B29] hover:bg-[#1b123d]  text-white font-extrabold text-xs rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#110B29]/20 focus:ring-offset-2 active:scale-[0.98] cursor-pointer">
            Se connecter
        </button>
    </div>
</form>
