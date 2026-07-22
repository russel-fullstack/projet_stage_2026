<x-layouts.app-layout>
    <div class="h-screen w-full bg-[#F8FAFC] overflow-hidden font-sans">

    <!-- Conteneur Split Screen 50/50 Pleine Page -->
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2">

        <x-login.brainding-card/>

        <div class="bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center h-full overflow-y-auto">
            <div class="max-w-md w-full mx-auto">

             <x-login.form-register/>

               <x-login.sso/>

               <x-login.footer/>

            </div>
        </div>

    </div>
</div>

</x-layouts.app-layout>
