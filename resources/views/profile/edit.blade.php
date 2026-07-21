<x-layouts.admin.admin-layout>
    <div class="xl:ml-80 mx-auto pt-6">
        <div class="flex items-center justify-between">
            <div class="space-y-3">
                <h1 class="text-2xl font-black text-[#110B29] tracking-tight">Mon Profil</h1>
                <p class="text-xs font-medium text-slate-500 mt-0.5">Gérez vos informations personnelles, vos paramètres de sécurité et votre compte.</p>
            </div>
        </div>
    </div>

    <div class="py-4  min-h-[calc(100vh-4rem)]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- 1. Informations du profil -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm transition-all hover:shadow-md">
                <div class="max-w-2xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- 2. Modification du mot de passe -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm transition-all hover:shadow-md">
                <div class="max-w-2xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- 3. Zone de danger (Suppression du compte) -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-rose-100/60 hover:bg-rose-50/10 shadow-sm transition-all hover:shadow-md">
                <div class="max-w-2xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-layouts.admin.admin-layout>
