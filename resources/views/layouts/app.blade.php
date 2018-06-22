<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Sportzone')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        window.addEventListener('load', function() {

            var four = document.querySelector('.four');
            var five = document.querySelector('.five');
            var six = document.querySelector('.six');
            delay = 1250;

            setTimeout(function() {
                $('.content-2').addClass('loaded');
            }, 2000);

            var animation = function() {
                setTimeout(function() {
                    four.style.top = '0%';
                }, delay *2);
                setTimeout(function() {
                    four.style.top = '100%';
                }, delay * 5);

                setTimeout(function() {
                    five.style.top = '0%';
                }, delay * 6);
                setTimeout(function() {
                    five.style.top = '100%';
                }, delay * 11);

                setTimeout(function() {
                    six.style.top = '0%';
                }, delay * 12);
                setTimeout(function() {
                    six.style.top = '100%';
                }, delay * 17);
            };
            animation();
            setInterval(animation, delay * 18);
        });

    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.navbar')
        <main class="py-4">
            @include('inc.messages')
            @yield('content')

            <footer>
                <div class="wrapper">
                    <p class="copyrights">Copyright © 2018 Sportzone, All Rights Reserved.</p>
                </div>
            </footer>
            <small>https://github.com/KlasArmando/laravel2b-muhammed-dzemal-achraf.git</small>
        </main>
    </div>
</body>
</html>
