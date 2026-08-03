
<!-- Boutons SSO -->
<div class="grid grid-cols-2 gap-3">
    <a href="{{ route('auth.google.redirect') }}" class="flex items-center justify-center space-x-2 py-2.5 px-4 bg-white border border-slate-200/80 rounded-2xl hover:bg-slate-50 active:scale-[0.98] transition-all text-xs font-extrabold text-slate-700 shadow-sm cursor-pointer">
        <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
        <span> via Google</span>
    </a>

    <a href="{{ route('auth.github.redirect') }}" class="flex items-center justify-center space-x-2 py-2.5 px-4 bg-white border border-slate-200/80 rounded-2xl hover:bg-slate-50 active:scale-[0.98] transition-all text-xs font-extrabold text-slate-700 shadow-sm cursor-pointer">
       <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="w-5 h-5"
    >
        <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.38 7.86 10.9.58.1.79-.25.79-.56v-2.17c-3.2.7-3.87-1.54-3.87-1.54-.53-1.33-1.28-1.68-1.28-1.68-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.25 3.33.96.1-.74.4-1.25.73-1.54-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.06 0 0 .96-.31 3.15 1.18a10.9 10.9 0 0 1 5.74 0c2.19-1.49 3.15-1.18 3.15-1.18.62 1.59.23 2.77.11 3.06.73.81 1.18 1.84 1.18 3.1 0 4.43-2.69 5.41-5.25 5.69.41.35.78 1.04.78 2.1v3.11c0 .31.21.67.8.56A10.99 10.99 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5z"/>
    </svg>
        <span> via GitHub</span>
    </a>
</div>
<!-- Séparateur SSO -->
<div class="relative my-6">
    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-100"></div></div>
    <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-3 text-slate-400 font-bold text-[10px] tracking-wider">Ou continuer avec</span></div>
</div>
