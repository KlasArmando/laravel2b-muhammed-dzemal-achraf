<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Sportzone')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.scss') }}">

</head>
<body>
<img class="logo" src="img/logo.png">
    @include('inc.navbar')
        @yield('content')

</body>
</html>
