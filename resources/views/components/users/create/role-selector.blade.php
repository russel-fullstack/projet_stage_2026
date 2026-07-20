<div class="space-y-3">
    <div class="flex items-center space-x-2 text-[#18005A]">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        <h3 class="text-xs font-black">Rôle & Accès</h3>
    </div>

    <label class="block text-xs font-bold text-gray-700">Type d'utilisateur</label>

    <div class="grid grid-cols-3 gap-3">
        {{-- Apprenant --}}
        <label class="cursor-pointer relative">
            <input type="radio" name="role" value="Apprenant" class="peer sr-only" {{ old('role', 'Apprenant') === 'Apprenant' ? 'checked' : '' }}>
            <div class="p-4 rounded-2xl border border-gray-200 text-center transition-all flex flex-col items-center justify-center space-y-2 text-gray-400 peer-checked:hover-background peer-checked:bg-secondary/20 peer-checked:text-primary peer-checked:shadow-sm hover:border-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147L12 14.6l7.74-4.453a1.5 1.5 0 000-2.594L12 3.1l-7.74 4.453a1.5 1.5 0 000 2.594z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12v4.5c0 1.5 2.686 2.7 6 2.7s6-1.2 6-2.7V12" />
                </svg>
                <span class="text-xs font-extrabold text-gray-700 peer-checked:text-[#18005A]">Apprenant</span>
            </div>
        </label>

        {{-- Formateur --}}
        <label class="cursor-pointer relative">
            <input type="radio" name="role" value="Formateur" class="peer sr-only" {{ old('role') === 'Formateur' ? 'checked' : '' }}>
            <div class="p-4 rounded-2xl border border-gray-200 text-center transition-all flex flex-col items-center justify-center space-y-2 text-gray-400  peer-checked:bg-secondary/20 peer-checked:text-primary peer-checked:shadow-sm hover:border-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="text-xs font-extrabold text-gray-700 peer-checked:text-[#18005A]">Formateur</span>
            </div>
        </label>

        {{-- Admin --}}
        <label class="cursor-pointer relative">
            <input type="radio" name="role" value="Admin" class="peer sr-only" {{ old('role') === 'Admin' ? 'checked' : '' }}>
            <div class="p-4 rounded-2xl border border-gray-200 text-center transition-all flex flex-col items-center justify-center space-y-2 text-gray-400  peer-checked:bg-secondary/20 peer-checked:text-primary peer-checked:shadow-sm hover:border-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751A11.959 11.959 0 0112 2.714z" />
                </svg>
                <span class="text-xs font-extrabold text-gray-700 peer-checked:text-[#18005A]">Admin</span>
            </div>
        </label>
    </div>
</div>
