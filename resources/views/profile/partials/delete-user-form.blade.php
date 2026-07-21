<section class="space-y-6">
    <header>
        <h2 class="text-lg font-extrabold text-[#110B29]">
            Supprimer le compte
        </h2>

        <p class="mt-1 text-xs font-medium text-slate-500">
            Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées. Avant de supprimer votre compte, veuillez télécharger les données ou informations que vous souhaitez conserver.
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Supprimer le compte</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 space-y-6">
            @csrf
            @method('delete')

            <div>
                <h2 class="text-base font-black text-[#110B29]">
                    Êtes-vous sûr de vouloir supprimer votre compte ?
                </h2>

                <p class="mt-1 text-xs font-medium text-slate-500">
                    Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées. Veuillez saisir votre mot de passe pour confirmer la suppression définitive.
                </p>
            </div>

            <div>
                <x-input-label for="password" value="Mot de passe" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full"
                    placeholder="Mot de passe"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end space-x-3 pt-2">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Annuler
                </x-secondary-button>

                <x-danger-button>
                    Supprimer le compte
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
