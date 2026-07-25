<x-layouts.users.user-layout>

    <div class="max-w-6xl mx-auto px-6 py-10 min-h-screen">

        <div class="flex flex-col lg:flex-row gap-12">

            {{-- Menu latéral --}}
            <x-profile.user.profile-user-sidebar />

            {{-- Contenu --}}
            <main class="flex-1">

                <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm">

                    <div class="max-w-xl">

                        <section>

                            <header class="mb-8">
                                <h2 class="text-base font-extrabold text-[#002266]">
                                    Passkeys
                                </h2>

                                <p class="mt-1 text-xs font-medium text-slate-500">
                                    Utilisez votre empreinte digitale, Windows Hello,
                                    Face ID ou une clé de sécurité pour vous connecter.
                                </p>
                            </header>

                            {{-- Message --}}
                            <div
                                id="passkey-message"
                                class="hidden mb-5 rounded-xl px-4 py-3 text-xs font-bold"
                            ></div>

                            {{-- Liste des Passkeys --}}
                            <div class="space-y-3 mb-8">

                                @forelse ($passkeys as $passkey)

                                    <div class="flex items-center justify-between gap-4 p-4 rounded-2xl border border-slate-200">

                                        <div class="flex items-center gap-3">

                                            <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-blue-50 text-[#002266]">
                                                🔐
                                            </div>

                                            <div>
                                                <p class="text-xs font-extrabold text-slate-800">
                                                    {{ $passkey->name ?? 'Passkey' }}
                                                </p>

                                                <p class="text-[10px] font-medium text-slate-500">
                                                    Ajoutée le
                                                    {{ $passkey->created_at?->format('d/m/Y') }}
                                                </p>
                                            </div>

                                        </div>

                                        <form
                                            method="POST"
                                            action="{{ route('passkey.destroy', $passkey) }}"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Voulez-vous vraiment supprimer cette passkey ?')"
                                                class="text-xs font-bold text-rose-600 hover:text-rose-800"
                                            >
                                                Supprimer
                                            </button>
                                        </form>

                                    </div>

                                @empty

                                    <div class="p-5 rounded-2xl bg-slate-50 border border-dashed border-slate-200">
                                        <p class="text-xs font-semibold text-slate-500">
                                            Aucune passkey n'est encore enregistrée.
                                        </p>
                                    </div>

                                @endforelse

                            </div>

                            {{-- Ajouter une Passkey --}}
                            <button
                                type="button"
                                id="register-passkey"
                                class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#002266] text-white font-bold text-xs rounded-xl hover:bg-[#001a4d] transition-all shadow-sm"
                            >
                                <span>+</span>
                                Ajouter une passkey
                            </button>

                        </section>

                    </div>

                </div>

            </main>

        </div>

    </div>

    @vite('resources/js/app.js')

</x-layouts.users.user-layout>
