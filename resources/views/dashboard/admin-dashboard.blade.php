<x-layouts.admin.admin-layout>

    <x-slot:title>Tableau de bord - EduMaster</x-slot>

    <!-- SECTION DES STATISTIQUES -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <x-admin.dashboard.stat-card title="Utilisateurs Totaux" value="12,845" trend="+12% ce mois" >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path></svg>
        </x-admin.dashboard.stat-card>

        <x-admin.dashboard.stat-card title="Cours Publiés" value="342" trend="24 nouveaux" iconColor="bg-emerald-50 text-emerald-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.174L10.721 6.8a2.25 2.25 0 012.558 0l6.46 3.373m-16.456 0a3.25 3.25 0 004.57 2.935l4.8-1.556a1 1 0 01.628 0l4.8 1.556a3.25 3.25 0 004.57-2.935m-16.456 0a4.5 4.5 0 010 4.786l1.724 2.87c.42.7.195 1.62-.505 2.04-1.24.743-2.61.353-3.26-.883L2.24 14.96a4.5 4.5 0 010-4.786z"></path></svg>
        </x-admin.dashboard.stat-card>

        <x-admin.dashboard.stat-card title="En Attente" value="22" trend="22 nouveaux" iconColor="bg-red-50 text-red-600" trend-color="text-red-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.174L10.721 6.8a2.25 2.25 0 012.558 0l6.46 3.373m-16.456 0a3.25 3.25 0 004.57 2.935l4.8-1.556a1 1 0 01.628 0l4.8 1.556a3.25 3.25 0 004.57-2.935m-16.456 0a4.5 4.5 0 010 4.786l1.724 2.87c.42.7.195 1.62-.505 2.04-1.24.743-2.61.353-3.26-.883L2.24 14.96a4.5 4.5 0 010-4.786z"></path></svg>
        </x-admin.dashboard.stat-card>

        <!-- (Ajoute les cartes 3 et 4 sur le même modèle...) -->
    </div>

    <!-- ZONE DE GRILLE CENTRALE -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        <!-- TABLE DES UTILISATEURS (8 Colonnes) -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm lg:col-span-8 space-y-6">
            <x-admin.dashboard.user-list :users="$users"/>
        </div>

        <!-- PANNEAU DE DROITE (4 Colonnes) -->
        <div class="lg:col-span-4 space-y-6 w-full">

            <!-- BLOC APPROBATIONS -->
            <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-black text-[#002266]">Approbations</h3>
                    <span class="px-2 py-0.5 bg-red-50 text-red-600 font-extrabold text-[9px] rounded-md">18 Attentes</span>
                </div>
                <div class="space-y-3">
                    <x-admin.dashboard.approval-card title="Design UI/UX Fondations" author="Thomas Bernard" time="Il y a 2 heures" bgImage="bg-indigo-100" />
                    <x-admin.dashboard.approval-card title="Data Science Avancée" author="Dr. Lucie Martin" time="Il y a 5 heures" bgImage="bg-emerald-100" />
                    <x-admin.dashboard.approval-card title="Gestion de Projet Agile" author="Karim Ziad" time="Hier" bgImage="bg-purple-100" />
                    <x-admin.dashboard.approval-card title="Gestion de Projet Agile" author="Karim Ziad" time="Hier" bgImage="bg-purple-100" />

                </div>
            </div>

            <!-- GRAPHIQUE PERFORMANCE HEBDOMADAIRE -->

        </div>
    </div>
</x-layouts.admin.admin-layout>
