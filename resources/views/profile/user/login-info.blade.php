<x-layouts.users.user-layout>
    <!-- 3. ZONE DANGEREUSE : SUPPRESSION DU COMPTE -->

    <div class="max-w-6xl mx-auto px-6 py-10 min-h-screen">

        <div class="flex flex-col lg:flex-row gap-12">
        <x-profile.user.profile-user-sidebar/>

            <div class="mt-8 bg-rose-50 p-8 rounded-3xl border border-rose-200">

                <h1 class="text-xl font-black text-rose-700">
                    Supprimer définitivement mon compte
                </h1>

                <p class="mt-3 text-sm text-slate-600">
                    Cette action est irréversible. Toutes vos données seront définitivement supprimées.
                </p>


                <form
                    method="POST"
                    action="{{ route('profile.destroy') }}"
                    class="mt-8 space-y-6"
                >

                    @csrf
                    @method('DELETE')


                    <div>

                        <label
                            for="password"
                            class="block mb-2 text-sm font-bold text-slate-700"
                        >
                            Confirmez avec votre mot de passe
                        </label>

                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="w-full px-4 py-3 rounded-xl border border-rose-200"
                        >

                        @error('password', 'userDeletion')

                            <p class="mt-2 text-sm text-rose-600">
                                {{ $message }}
                            </p>

                        @enderror

                    </div>


                    <button
                        type="submit"
                        class="px-5 py-3 bg-rose-600 text-white rounded-xl font-bold hover:bg-rose-700"
                    >
                        Supprimer définitivement mon compte
                    </button>

                </form>

            </div>
    </div>
    </div>
</x-layouts.users.user-layout>
