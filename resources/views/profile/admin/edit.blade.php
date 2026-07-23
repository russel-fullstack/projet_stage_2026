<x-layouts.admin.admin-layout>

    <div class="max-w-6xl mx-auto px-6 py-10 min-h-screen">


        <div class="flex flex-col lg:flex-row gap-12">

            {{-- Menu latéral --}}
            <x-profile.admin.profile-sidebar />


            {{-- Contenu --}}
            <main class="flex-1">

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

            </main>

        </div>

    </div>

</x-layouts.admin.admin-layout>
