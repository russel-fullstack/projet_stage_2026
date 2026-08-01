<x-guest-layout>
    <div class=" mb-4 flex flex-col items-center justify-center space-x-3">
       <div class="flex items-center space-x-2">
         <img src="{{ asset('logo.png') }}" alt="Logo" height="40" width="40">
        <span class="text-lg font-bold text-center tracking-tight text-secondary">Edu<span
                class="text-primary">Master</span></span>
       </div>

        <h2 class="text-xl font-extrabold text-secondary pt-5 tracking-hightest">Créez votre compte:</h2>
    </div>
    <x-register.sso />
    <x-register.form-register />

    <x-register.footer />

</x-guest-layout>
