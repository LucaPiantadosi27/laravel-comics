<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titolo</title>

    <!-- Includiamo gli assets con la direttiva @ vite -->
    @vite('resources/js/app.js')
</head>

<body>

    @include('Layouts/header')
    @include('Layouts/jumbo')
    @include('Layouts/main')
    @include('Layouts/mainBottom')
    @include('Layouts/footer')

    



    <div class="container">
        @yield('content')
    </div>
</body>
</html>