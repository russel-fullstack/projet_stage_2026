@props([
    'title' => config('app.name', 'Lumina'),
])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts & Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased text-slate-900 bg-[#F8FAFC]">

<div class="h-screen w-full bg-[#F8FAFC] overflow-hidden font-sans">

    <!-- Conteneur Split Screen 50/50 Pleine Page -->
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2">
        <!-- COLONNE DROITE (Formulaire, SSO & Footer) -->
        <div class="bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center h-full overflow-y-auto">
            <div class="max-w-md w-full mx-auto">
                {{ $slot }}
            </div>
        </div>

    </div>
</div>

</body>
</html>
