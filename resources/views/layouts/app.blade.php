<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>

                <div class="flex flex-col md:flex-row gap-2 w-full mx-auto sm:px-2 lg:px-4">

                    <x-navigation-bar />

                    <div class="w-full">
                        <!-- Page Heading -->
                        @if (isset($header))
                        <div class="w-full mx-auto sm:px-2 lg:px-4 mt-12">
                            <header class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                                <div class="w-full mx-auto py-6 px-4 sm:px-2 lg:px-4">
                                    {{ $header }}
                                </div>
                            </header>
                        </div>
                        @endif

                        {{ $slot }}

                    </div>

                </div>

            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
