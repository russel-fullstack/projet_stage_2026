<x-layouts.users.user-layout>

    <div class="max-w-6xl mx-auto px-6 py-10 min-h-screen">

        <div class="flex flex-col lg:flex-row gap-12">

            {{-- Menu latéral --}}
            <x-profile.user.profile-user-sidebar />
            {{-- Contenu --}}
            <main class="flex-1">

                <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm pb-6 ">

                    <div class="max-w-xl">

                        <header class="mb-8">

                            <h1 class="text-lg font-extrabold text-[#002266]">
                                Authentification à deux facteurs
                            </h1>

                            <p class="mt-1 text-xs font-medium text-slate-500">
                                Renforcez la sécurité de votre compte avec une authentification à deux facteurs.
                            </p>

                        </header>


                            {{-- 2FA désactivée --}}
                            <div class="rounded-2xl border border-slate-200 p-5">

                                <div class="flex items-start gap-4 pb-6">

                                    <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                        🔒
                                    </div>

                                    <div>

                                        <h2 class="text-sm font-extrabold text-slate-900">
                                            Authentification à deux facteurs désactivée
                                        </h2>

                                        <p class="mt-1 text-xs text-slate-500">
                                            Votre compte est actuellement protégé uniquement par votre mot de passe.
                                        </p>

                                    </div>

                                </div>



                                    <button
                                        type="submit"
                                        class="px-5 py-2.5 rounded-xl bg-[#002266] text-white text-xs font-bold hover:bg-[#001a4d] transition"
                                    >
                                        Activer la double authentification
                                    </button>
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-layouts.users.user-layout>
