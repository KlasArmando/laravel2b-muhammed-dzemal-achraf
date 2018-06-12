<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Sportzone')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <main class="py-4">
            @include('inc.navbar')
            @include('inc.messages')
            @yield('content')

            <footer>
                <div class="wrapper">
                    <p class="copyrights">Copyright © 2018 Sportzone, All Rights Reserved.</p>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>
