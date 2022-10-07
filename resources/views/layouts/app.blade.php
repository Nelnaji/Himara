<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
        <link rel="icon" href="images/favicon.png">
        <title>Hôtel Himara - Profile</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js" defer></script>
        <script src="js/sidebar.js" defer></script>
    </head>
    <body >
        <div id="root">
        @include('layouts.sidebar')

        @include('layouts.navigation')





            @yield('backContent')
        </div>

    </body>
</html>
