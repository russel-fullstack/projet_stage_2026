<x-layouts.app-layout>
    <div class="h-screen w-full bg-white flex overflow-hidden font-sans">

        <!-- Conteneur Split Screen 50/50 Pleine Page -->
        <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2 ">

            <x-register.brainding-card/>

            <div class="bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-between h-full ">
                <div class="max-w-md  mx-auto my-auto">

                    <x-register.form-register/>

                   <x-register.footer/>
                </div>
            </div>

        </div>
    </div>

</x-layouts.app-layout>
