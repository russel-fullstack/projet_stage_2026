<x-layouts.app-layout>
    <main class="bg-hero min-h-screen font-inter">
        <!-- Hero Section -->
        <x-pages.hero-section />

        <!-- Stats Section -->
        <x-pages.stats-card />

        <!-- Vision Section -->
        <div class='bg-white w-full py-15'>
            <x-pages.vision />

        </div>
        <!-- Featured Courses Section -->
        <x-pages.popular-courses />

        <!-- Testimonials Section -->
        <div class='bg-white w-full py-15'>
            <x-pages.testimonials />
        </div>

        <!-- CTA Section -->
        <x-pages.newsletter />
    </main>

</x-layouts.app-layout>
