<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        @inertiaHead
        <title>Web Monopoly</title>
    </head>
    <body class="dark:text-white dark:bg-gray-900">
        @inertia
    </body>
</html>
