<x-layouts.users.user-layout>
    <x-slot:title>EduMaster - Étudiant</x-slot:title>
    <main class="flex-1 p-8 space-y-8">
        <div>
            <h1 class="text-2xl font-black text-[#002266] flex items-center gap-2">
                Bonjour, Alexandre <span class="text-2xl">👋</span>
            </h1>
            <p class="text-xs text-gray-500 font-medium mt-1">Prêt à continuer votre apprentissage aujourd'hui ?</p>
        </div>

        <div class="grid grid-cols-12 gap-6">
            {{-- Colonne Gauche --}}
            <div class="col-span-12 lg:col-span-8 space-y-6">
                {{-- KPIs --}}
                <div class="grid grid-cols-3 gap-4">
                    <x-admin.dashboard.stat-card title="HEURES APPRISES" value="42.5h" bgColor="bg-indigo-50" textColor="text-indigo-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </x-admin.dashboard.stat-card>

                    <x-admin.dashboard.stat-card title="COURS TERMINÉS" value="12" bgColor="bg-emerald-50" textColor="text-emerald-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"></path></svg>
                    </x-admin.dashboard.stat-card>

                    <x-admin.dashboard.stat-card title="POINTS GAGNÉS" value="2,450" bgColor="bg-purple-50" textColor="text-purple-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 003-3V8.25a3 3 0 00-3-3h-9a3 3 0 00-3 3v7.5a3 3 0 003 3m9 0v-1.5a2.25 2.25 0 00-2.25-2.25h-4.5A2.25 2.25 0 006.75 17.25v1.5"></path></svg>
                    </x-admin.dashboard.stat-card>
                </div>

                {{-- Cours en cours --}}
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-black text-[#002266]">Cours en cours</h2>
                        <a href="#" class="text-[11px] font-extrabold text-indigo-600 hover:underline">Voir tout</a>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <x-users.course-progress
                            title="UI Design Expert"
                            subtitle="Module 4: Grilles et espacement"
                            percentage="75"
                            nextType="Quiz"
                            color="#002266"
                        />
                        <x-users.course-progress
                            title="Data Science 101"
                            subtitle="Module 2: Bases de Python"
                            percentage="30"
                            nextType="Vidéo"
                            color="#10B981"
                            badgeBg="bg-purple-100"
                            badgeText="text-purple-700"
                        />
                    </div>
                </div>

                {{-- Prochaines étapes --}}
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4">
                    <h2 class="text-sm font-black text-[#002266]">Prochaines étapes recommandées</h2>
                    <div class="space-y-3">
                        <x-users.next-step title="Compléter le projet final de UI Design" description="Gagnez +500 points et un badge d'expert.">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385c.116.486-.421.876-.84.62l-4.686-2.825a.562.562 0 00-.586 0L5.3 20.548c-.419.256-.956-.134-.84-.62l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602c-.38-.325-.178-.948.32-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path></svg>
                        </x-users.next-step>

                        <x-users.next-step title="Introduction au Machine Learning" description="Basé sur vos intérêts récents pour la Data Science." iconColor="text-emerald-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M12 3a6 6 0 00-6 6c0 1.9.876 3.596 2.25 4.708a3 3 0 001.5 2.292h4.5a3 3 0 001.5-2.292A6.002 6.002 0 0018 9a6 6 0 00-6-6z"></path></svg>
                        </x-users.next-step>
                    </div>
                </div>
            </div>

            {{-- Colonne Droite --}}
            <div class="col-span-12 lg:col-span-4 space-y-6">
                {{-- Bar Chart --}}
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-6">
                    <h2 class="text-xs font-black text-gray-900">Activité de la semaine</h2>
                    <div class="flex items-end justify-between h-40 pt-4 px-2">
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-slate-100 h-16 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">L</span></div>
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-slate-100 h-28 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">M</span></div>
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-[#002266] h-36 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">M</span></div>
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-slate-100 h-12 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">J</span></div>
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-slate-100 h-20 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">V</span></div>
                        <div class="flex flex-col items-center space-y-2"><div class="w-4 bg-slate-100 h-8 rounded-full"></div><span class="text-[10px] font-bold text-gray-400">S</span></div>
                    </div>
                </div>

                {{-- Certificats --}}
                <div class="bg-[#18005A] rounded-3xl p-6 text-white space-y-6 relative overflow-hidden shadow-xl">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h2 class="text-sm font-black tracking-wide">Certificats obtenus</h2>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="p-3 bg-white/10 rounded-2xl flex items-center space-x-3 backdrop-blur-sm border border-white/5">
                            <div class="w-8 h-8 rounded-xl bg-white/10 flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-black">Design Thinking</p>
                                <p class="text-[9px] text-gray-300 font-medium">Jan 2024</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full py-2.5 bg-white text-[#18005A] text-xs font-black rounded-xl hover:bg-gray-100 transition-colors relative z-10">
                        Tout voir
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-layouts.users.user-layout>
