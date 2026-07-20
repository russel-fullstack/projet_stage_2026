<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'EduMaster Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background flex flex-col font-sans antialiased text-primary">

<!-- Navbar Supérieure -->
<x-users.navbar />

<div class="flex flex-1 overflow-hidden">

    <!-- Sidebar Gauche -->
    <x-users.sidebar />

    <!-- Zone de Contenu Dynamique -->
    <main class="flex-1 overflow-y-auto p-8 space-y-8">
        {{ $slot }}
    </main>

</div>

<x-pages.footer/>
</body>
</html>
