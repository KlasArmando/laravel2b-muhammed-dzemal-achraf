<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kocaer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Sportzone')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.scss') }}">

</head>
<body>
@include('inc.navbar')
@include('inc.messages')
@yield('content')

<footer>
    <div class="wrapper">
        <p class="copyrights">Copyright © 2018 Sportzone, All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>


<li><a href="{{ URL::to('/posts/create') }}">Create Post</a></li>