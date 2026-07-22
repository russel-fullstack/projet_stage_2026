<x-layouts.app-layout>
    <div class="py-8 max-w-5xl mx-auto space-y-8">

        <!-- Header de la page -->
        <div class="flex items-center justify-between pb-6 border-b border-slate-200">
            <div>
                <h1 class="text-2xl font-black text-[#002266] tracking-tight">Paramètres du Profil</h1>
                <p class="text-xs font-bold text-slate-500 mt-1">Gérez vos informations personnelles et la sécurité de votre compte.</p>
            </div>

            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 rounded-2xl bg-[#002266] text-white flex items-center justify-center font-black text-lg shadow-md shadow-[#002266]/20">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>
        </div>

        <!-- Notification de succès (session status) -->
        @if (session('status') === 'profile-updated')
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl flex items-center justify-between">
                <span>Modifications enregistrées avec succès.</span>
                <button @click="show = false" class="text-emerald-600 hover:text-emerald-900">&times;</button>
            </div>
        @endif

        <!-- GRID/SECTIONS DU PROFIL -->
        <div class="space-y-8">

            <!-- 1. INFORMATIONS DU PROFIL -->
            <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm">
                <div class="max-w-xl">
                    <section>
                        <header class="mb-6">
                            <h2 class="text-base font-extrabold text-[#002266]">
                                Informations Personnelles
                            </h2>
                            <p class="mt-1 text-xs font-medium text-slate-500">
                                Mettez à jour les informations de votre compte et votre adresse e-mail.
                            </p>
                        </header>

                        <form method="post" action="{{ route('profile.update') }}" class="space-y-5">
                            @csrf
                            @method('patch')

                            <!-- Nom -->
                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-700 mb-2">Nom complet</label>
                                <input id="name" name="name" type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#002266] focus:ring-1 focus:ring-[#002266] transition-all" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                                @error('name')
                                <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-2">Adresse E-mail</label>
                                <input id="email" name="email" type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#002266] focus:ring-1 focus:ring-[#002266] transition-all" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                                @error('email')
                                <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-4 pt-2">
                                <button type="submit" class="px-5 py-2.5 bg-[#002266] text-white font-bold text-xs rounded-xl hover:bg-[#001a4d] transition-all shadow-sm">
                                    Enregistrer
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <!-- 2. SÉCURITÉ & MOT DE PASSE -->
            <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm">
                <div class="max-w-xl">
                    <section>
                        <header class="mb-6">
                            <h2 class="text-base font-extrabold text-[#002266]">
                                Modifier le mot de passe
                            </h2>
                            <p class="mt-1 text-xs font-medium text-slate-500">
                                Assurez-vous d'utiliser un mot de passe long et complexe pour sécuriser votre compte.
                            </p>
                        </header>

                        <form method="post" action="{{ route('password.update') }}" class="space-y-5">
                            @csrf
                            @method('PUT')

                            <!-- Mot de passe actuel -->
                            <div>
                                <label for="update_password_current_password" class="block text-xs font-bold text-slate-700 mb-2">Mot de passe actuel</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#002266] focus:ring-1 focus:ring-[#002266] transition-all" autocomplete="current-password" />
                                @error('current_password', 'updatePassword')
                                <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nouveau mot de passe -->
                            <div>
                                <label for="update_password_password" class="block text-xs font-bold text-slate-700 mb-2">Nouveau mot de passe</label>
                                <input id="update_password_password" name="password" type="password" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#002266] focus:ring-1 focus:ring-[#002266] transition-all" autocomplete="new-password" />
                                @error('password', 'updatePassword')
                                <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirmation du mot de passe -->
                            <div>
                                <label for="update_password_password_confirmation" class="block text-xs font-bold text-slate-700 mb-2">Confirmer le mot de passe</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-800 focus:outline-none focus:border-[#002266] focus:ring-1 focus:ring-[#002266] transition-all" autocomplete="new-password" />
                                @error('password_confirmation', 'updatePassword')
                                <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center gap-4 pt-2">
                                <button type="submit" class="px-5 py-2.5 bg-[#002266] text-white font-bold text-xs rounded-xl hover:bg-[#001a4d] transition-all shadow-sm">
                                    Mettre à jour
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <!-- 3. ZONE DANGEREUSE : SUPPRESSION DU COMPTE -->
            <div class="bg-rose-50/50 p-6 sm:p-8 rounded-3xl border border-rose-100 shadow-sm">
                <div class="max-w-xl">
                    <section x-data="{ confirmingUserDeletion: false }">
                        <header class="mb-6">
                            <h2 class="text-base font-extrabold text-rose-700">
                                Supprimer le compte
                            </h2>
                            <p class="mt-1 text-xs font-medium text-slate-600">
                                Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées.
                            </p>
                        </header>

                        <button @click="confirmingUserDeletion = true" type="button" class="px-5 py-2.5 bg-rose-600 text-white font-bold text-xs rounded-xl hover:bg-rose-700 transition-all shadow-sm">
                            Supprimer mon compte
                        </button>

                        <!-- Modal de Confirmation de Suppression -->
                        <div x-show="confirmingUserDeletion" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                <!-- Overlay -->
                                <div @click="confirmingUserDeletion = false" class="fixed inset-0 transition-opacity bg-slate-900/40 backdrop-blur-sm"></div>

                                <div class="inline-block px-6 pt-5 pb-6 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-3xl shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-8">
                                    <form method="post"  class="space-y-4">
                                        @csrf
                                        @method('delete')

                                        <h3 class="text-base font-extrabold text-slate-900">
                                            Êtes-vous sûr de vouloir supprimer votre compte ?
                                        </h3>

                                        <p class="text-xs font-medium text-slate-500">
                                            Veuillez entrer votre mot de passe pour confirmer la suppression définitive de vos données.
                                        </p>

                                        <div>
                                            <input type="password" name="password" placeholder="Mot de passe" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-xs font-semibold focus:outline-none focus:border-rose-600 focus:ring-1 focus:ring-rose-600" />
                                            @error('password', 'userDeletion')
                                            <p class="mt-1.5 text-xs text-rose-600 font-bold">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="flex justify-end space-x-3 pt-4">
                                            <button @click="confirmingUserDeletion = false" type="button" class="px-4 py-2.5 bg-slate-100 text-slate-700 text-xs font-bold rounded-xl hover:bg-slate-200 transition-colors">
                                                Annuler
                                            </button>
                                            <button type="submit" class="px-4 py-2.5 bg-rose-600 text-white text-xs font-bold rounded-xl hover:bg-rose-700 transition-colors">
                                                Confirmer la suppression
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>

        </div>

    </div>
</x-layouts.app-layout>
