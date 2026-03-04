<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MandT Global') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 font-sans antialiased">
        <div class="flex min-h-screen flex-col items-center justify-center">
            <h1 class="text-4xl font-bold text-gray-900">{{ config('app.name', 'MandT Global') }}</h1>
            <p class="mt-4 text-lg text-gray-600">Your application is ready.</p>
            <div class="mt-8 flex gap-4">
                <a href="/admin" class="rounded-lg bg-amber-500 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-amber-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500">
                    Admin Panel
                </a>
            </div>
        </div>
    </body>
</html>
