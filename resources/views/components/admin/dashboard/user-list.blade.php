<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
        <tr class="border-b border-gray-100 text-[10px] font-extrabold text-accent uppercase tracking-wider">
            <th class="pb-4 pl-2">Utilisateur</th>
            <th class="pb-4">Rôle / Badge</th>
            <th class="pb-4">Date d'inscription</th>
            <th class="pb-4">Statut</th>
            <th class="pb-4 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-xs font-bold divide-y divide-gray-50">
        @forelse($users as $user)
            <tr class="hover:bg-gray-50/40 transition-colors">
                <!-- Utilisateur & Profil -->
                <td class="py-4 pl-2 flex items-center space-x-3 max-w-[300px]">
                    {{-- Avatar avec initiales --}}
                    <div class="w-10 h-10 {{  'bg-indigo-50 text-indigo-600' }} rounded-xl flex-shrink-0 flex items-center justify-center text-xs font-black relative shadow-sm">
                        {{ $user['initials'] ?? 'U' }}
                        @if($user['is_online'] ?? false)
                            <span class="w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full absolute -top-0.5 -right-0.5 shadow-sm"></span>
                        @endif
                    </div>
                    <div class="truncate">
                        <p class="font-black text-gray-900 truncate">{{ $user['name'] ?? 'Inconnu' }}</p>
                        <p class="text-[10px] text-tertiary font-medium mt-0.5 truncate">{{ $user['email'] ?? '' }}</p>
                    </div>
                </td>

                <!-- Rôle / Badge -->
                <td class="py-4">
                    @switch($user['role'] ?? 'student')
                        @case('super_admin')
                            <x-admin.dashboard.badge color="red">Admin</x-admin.dashboard.badge>
                            @break

                        @case('instructor')
                            <x-admin.dashboard.badge color="blue">Formateur</x-admin.dashboard.badge>
                            @break

                        @default
                            <x-admin.dashboard.badge color="gray">Étudiant</x-admin.dashboard.badge>
                    @endswitch
                </td>

                <!-- Date d'inscription -->
                <td class="py-4 text-tertiary font-medium leading-tight">
                    {{ $user['joined_at_formatted'] ?? '-' }}<br>
                    <span class="text-[10px] text-gray-300">{{ $user['joined_time'] ?? '' }}</span>
                </td>

                <!-- Statut du Compte -->
                <td class="py-4">
                    @if($user['is_active'] ?? true)
                        <span class="px-2.5 py-1 bg-emerald-100 text-emerald-700 rounded-md text-[9px] font-black uppercase tracking-wider inline-flex items-center">
                                <span class="w-1 h-1 bg-emerald-500 rounded-full mr-1.5"></span>
                                Actif
                            </span>
                    @else
                        <span class="px-2.5 py-1 bg-rose-50 text-rose-500 rounded-md text-[9px] font-black uppercase tracking-wider inline-flex items-center">
                                <span class="w-1 h-1 bg-rose-500 rounded-full mr-1.5"></span>
                                Suspendu
                            </span>
                    @endif
                </td>

                <!-- Boutons d'actions contextuels -->
                <td class="py-4 text-center">
                    <div class="flex items-center justify-center space-x-1">
                        <button class="p-2 text-tertiary hover:text-[#002266] hover:bg-indigo-50 rounded-xl transition-all" title="Modifier l'utilisateur">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                            </svg>
                        </button>
                        <button class="p-2 text-tertiary hover:text-red-500 hover:bg-red-50 rounded-xl transition-all" title="Restreindre / Suspendre">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="py-8 text-center text-tertiary font-medium">
                    Aucun utilisateur trouvé.
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
