<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicons/site.webmanifest') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
	    <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
        <x-jet-banner />

        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Heading -->
{{--            @if (isset($header))--}}
{{--                <header class="bg-white shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

            <!-- Page Content -->
            <main class="bg-gray-100 dark:bg-background-1100" style="min-height: 93.5vh !important;">
                {{ $slot }}
                <x-darkmode-button />
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
