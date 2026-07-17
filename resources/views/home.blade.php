<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="">

    <x-navbar />
    <main class="bg-hero min-h-screen font-inter">
        <!-- Hero Section -->
        <x-hero-section />

        <!-- Stats Section -->
        <x-stats-card />

        <!-- Vision Section -->
        <div class='bg-white w-full py-15'>
            <x-vision />

        </div>
        <!-- Featured Courses Section -->
        <x-popular-courses />

        <!-- Testimonials Section -->
       <div class='bg-white w-full py-15'>
            <x-testimonials />
        </div>

        <!-- CTA Section -->
        <x-newsletter />
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-highest dark:bg-inverse-surface mt-16">
        <div
            class="w-full py-12 px-[10 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto">
            <div class="flex flex-col items-center md:items-start gap-4 mb-8 md:mb-0">
                <span class="text-2xl leading-8 font-semibold text-on-surface">EduMaster</span>
                <p class="text-xs leading-4 text-on-surface-variant dark:text-inverse-on-surface">© 2024 EduMaster.
                    Excellence Académique.</p>
            </div>
            <div class="flex gap-8">
                <a class="text-on-surface-variant dark:text-outline-variant text-xs leading-4 hover:underline transition-all cursor-pointer"
                    href="#">À propos</a>
                <a class="text-on-surface-variant dark:text-outline-variant text-xs leading-4 hover:underline transition-all cursor-pointer"
                    href="#">Aide</a>
                <a class="text-on-surface-variant dark:text-outline-variant text-xs leading-4 hover:underline transition-all cursor-pointer"
                    href="#">Confidentialité</a>
                <a class="text-on-surface-variant dark:text-outline-variant text-xs leading-4 hover:underline transition-all cursor-pointer"
                    href="#">Langue</a>
            </div>
            <div class="flex gap-4 mt-8 md:mt-0">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container text-primary hover:bg-primary hover:text-on-primary transition-all">
                    <span class="material-symbols-outlined">public</span>
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container text-primary hover:bg-primary hover:text-on-primary transition-all">
                    <span class="material-symbols-outlined">mail</span>
                </button>
            </div>
        </div>
    </footer>

</body>

</html>
