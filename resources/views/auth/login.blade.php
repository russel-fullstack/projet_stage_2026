<div class="h-screen w-full bg-[#F8FAFC] overflow-hidden font-sans">

    <!-- Conteneur Split Screen 50/50 Pleine Page -->
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2">

        <!-- ========================================== -->
        <!-- BLOC 1 : BRANDING & INSIGHTS (Gauche - 50%)-->
        <!-- ========================================== -->
        <div class="hidden lg:flex bg-[#110B29] relative overflow-hidden p-10 sm:p-12 lg:p-16 flex-col justify-between text-white h-full">

            <!-- Cercles lumineux / Effets de fond -->
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 space-y-8 my-auto">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 bg-emerald-500/10 border border-emerald-500/20 rounded-full">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-wider text-emerald-300">Welcome Back</span>
                </div>

                <!-- Titre & Pitch -->
                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl font-black leading-tight tracking-tight">
                        Continue Your <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-200">Learning Journey.</span>
                    </h1>
                    <p class="text-sm font-medium text-slate-300/80 leading-relaxed max-w-md">
                        Retrouvez vos cours, suivez votre progression et développez vos compétences au quotidien sur Lumina.
                    </p>
                </div>

                <!-- Carte Quote / Temoignage -->
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md max-w-md space-y-3">
                    <p class="text-xs font-medium text-slate-200 italic leading-relaxed">
                        "Grâce aux parcours structurés et gratuits, j'ai pu acquérir les bases nécessaires pour décrocher mon premier stage en développement."
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <img class="h-8 w-8 rounded-full ring-2 ring-emerald-400 object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100" alt="Avatar">
                        <div>
                            <p class="text-xs font-bold text-white">Alexandre D.</p>
                            <p class="text-[10px] text-slate-400">Étudiant & Développeur</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preuve sociale / Footer -->
            <div class="relative z-10 pt-8 border-t border-white/10 flex items-center space-x-4">
                <div class="flex -space-x-2 overflow-hidden">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-[#110B29] object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100" alt="Avatar">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-[#110B29] object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="Avatar">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-[#110B29] object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" alt="Avatar">
                </div>
                <p class="text-xs font-semibold text-slate-300">
                    Plus de 2 millions d'utilisateurs nous font confiance.
                </p>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- BLOC 2 : FORMULAIRE & SSO (Droite - 50%)   -->
        <!-- ========================================== -->
        <div class="bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center h-full overflow-y-auto">
            <div class="max-w-md w-full mx-auto">

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
                            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="nom@exemple.com" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#110B29] focus:ring-2 focus:ring-[#110B29]/10 transition-all" required autofocus autocomplete="username" />
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
                            <input id="password" name="password" type="password" placeholder="••••••••" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-[#110B29] focus:ring-2 focus:ring-[#110B29]/10 transition-all" required autocomplete="current-password" />
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
                        <button type="submit" class="w-full inline-flex items-center justify-center px-5 py-3.5 bg-[#110B29] hover:bg-[#1b123d] active:bg-[#0a061a] text-white font-extrabold text-xs rounded-2xl shadow-sm hover:shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-[#110B29]/20 focus:ring-offset-2 active:scale-[0.98] cursor-pointer">
                            Se connecter
                        </button>
                    </div>
                </form>

                <!-- Séparateur SSO -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-100"></div></div>
                    <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-3 text-slate-400 font-bold text-[10px] tracking-wider">Ou continuer avec</span></div>
                </div>

                <!-- Boutons SSO -->
                <div class="grid grid-cols-2 gap-3">
                    <button type="button" class="flex items-center justify-center space-x-2 py-2.5 px-4 bg-white border border-slate-200/80 rounded-2xl hover:bg-slate-50 active:scale-[0.98] transition-all text-xs font-extrabold text-slate-700 shadow-sm cursor-pointer">
                        <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
                        <span>Google</span>
                    </button>

                    <button type="button" class="flex items-center justify-center space-x-2 py-2.5 px-4 bg-white border border-slate-200/80 rounded-2xl hover:bg-slate-50 active:scale-[0.98] transition-all text-xs font-extrabold text-slate-700 shadow-sm cursor-pointer">
                        <svg class="w-4 h-4 text-[#0A66C2]" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.64a1.62 1.62 0 1 0 0 3.24 1.62 1.62 0 0 0 0-3.24z"/></svg>
                        <span>LinkedIn</span>
                    </button>
                </div>

                <!-- Footer : Lien Vers Inscription -->
                <div class="pt-6 text-center">
                    <p class="text-xs font-medium text-slate-500">
                        Pas encore de compte ?
                        <a href="{{ route('register') }}" class="font-extrabold text-[#110B29] hover:underline">S'inscrire gratuitement</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
