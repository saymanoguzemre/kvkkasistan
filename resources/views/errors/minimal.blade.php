<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex items-center justify-center">
            <div class="max-w-md mx-auto text-center">
                <h1 class="text-6xl font-bold mb-6 text-gray-800">@yield('code')</h1>
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">@yield('message')</h2>
                <a href="/" class="inline-block px-8 py-4 bg-blue-500 text-white font-semibold rounded-lg">Ana sayfaya dön</a>
            </div>
        </div>
    </body>
</html>

