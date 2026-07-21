<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'EduMaster') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image">

    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-inter">

    <x-pages.navbar />

    <main>
        {{ $slot }}
    </main>

     <!-- Footer -->
   <x-pages.footer/>

</body>

</html>

