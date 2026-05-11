<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-main antialiased text-slate-900 bg-gradient-to-br from-slate-50 via-sky-50 to-slate-50">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-xl border-b-2 border-yoga-100 shadow-sm">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="mt-20 bg-gradient-to-r from-yoga-900 to-zen-900 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <h3 class="font-bold text-lg mb-4">🧘 YogaPlanner</h3>
                            <p class="text-white/80 text-sm">Discover your perfect yoga journey</p>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-4">Platform</h4>
                            <ul class="space-y-2 text-sm text-white/80">
                                <li><a href="#" class="hover:text-white transition">Plans</a></li>
                                <li><a href="#" class="hover:text-white transition">Bookings</a></li>
                                <li><a href="#" class="hover:text-white transition">Chat</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-4">Company</h4>
                            <ul class="space-y-2 text-sm text-white/80">
                                <li><a href="#" class="hover:text-white transition">About</a></li>
                                <li><a href="#" class="hover:text-white transition">Contact</a></li>
                                <li><a href="#" class="hover:text-white transition">Privacy</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-4">Newsletter</h4>
                            <p class="text-white/80 text-sm mb-3">Get yoga tips delivered weekly</p>
                        </div>
                    </div>
                    <div class="border-t border-white/20 mt-8 pt-8 text-center text-white/60 text-sm">
                        <p>&copy; 2026 YogaPlanner. All rights reserved. 🌟</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
