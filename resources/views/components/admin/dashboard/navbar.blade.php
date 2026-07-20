<header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 z-10">
    <div class="flex items-center space-x-10">
        <a class="text-xl font-black text-primary tracking-tight" href="{{ route('accueil') }}">EduMaster</a>
        <nav class="flex space-x-6 text-sm font-bold">
            <a href="#" class="text-[#002266] border-b-2 border-[#002266] pb-5 pt-5">Tableau de bord</a>
            <a href="#" class="text-gray-500 hover:text-gray-900 pb-5 pt-5">Rapports</a>
        </nav>
    </div>

    <div class="flex items-center space-x-4">
        <!-- Notifications -->
        <button class="relative p-2 text-gray-400 hover:text-gray-600 rounded-full hover:bg-gray-100 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
            </svg>
            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        <!-- Profil Admin -->
        <div class="flex items-center space-x-3 border-l pl-4 border-gray-200">
            <div class="text-right hidden sm:block">
                <p class="text-xs font-black text-gray-900 leading-none">Admin Principal</p>
                <p class="text-[10px] text-gray-400 font-medium mt-0.5">superadmin@edumaster.com</p>
            </div>
            <div class="w-9 h-9 bg-gray-200 rounded-full flex items-center justify-center text-[#002266] font-bold">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                </svg>
            </div>
        </div>
    </div>
</header>
