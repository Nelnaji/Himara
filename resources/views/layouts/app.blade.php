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

    </head>
    <body >

        @include('layouts.navigation')
        <div class="flex overflow-hidden bg-white pt-16">

         @include('layouts.sidebar')

          <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
             @yield('backContent')

                <p>Un peu de lorem pour montrer comment le contenu s'aggence</p>
            </main>
              </div>

        </div>

        <script src="js/sidebar.js"></script>
    </body>
</html>
