@props([
    'title' => 'Authentification',
])

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">

    <title>{{ $title }} — EduMaster</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <div class="min-h-screen w-full bg-white overflow-hidden font-sans">

        <div class="w-full min-h-screen grid grid-cols-1 lg:grid-cols-2">

            {{-- COLONNE BRANDING --}}
            <x-login.brainding-card />

            {{-- COLONNE FORMULAIRE --}}
            <main
                class="bg-white px-6 py-10 sm:px-12 lg:px-16 flex flex-col justify-center min-h-screen overflow-y-auto"
            >
                <div class="max-w-md w-full mx-auto">

                    {{ $slot }}

                </div>
            </main>

        </div>

    </div>

</body>

</html>
