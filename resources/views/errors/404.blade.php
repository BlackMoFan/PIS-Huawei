<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Under Development - 404</title>

    <link rel="icon" href="{!! asset('images/logo.svg') !!}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>

</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
                <div class="text-center">
                    <h1 class="text-6xl font-bold text-blue-600">404</h1>
                    <h2 class="mt-4 text-2xl font-semibold text-red">Oops! This page is under development.</h2>
                    <p class="mt-2 text-gray-600">We're working hard to bring this page to you soon.</p>
                    <a href="{{ url('/') }}" class="inline-block px-6 py-3 mt-6 text-lg font-semibold text-white transition bg-blue-600 rounded-lg hover:bg-blue-700">
                        Go Back Home
                    </a>
                </div>
            </div>
        </div>

    @livewireScripts
</body>
</html>
