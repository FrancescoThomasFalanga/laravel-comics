<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="Shortcut Icon" type="image/png" href="{{asset('img/favicon.ico')}}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials/header')

    @yield('content')

    @include('partials/infoSection')

    @include('partials/upperFooter')

    @include('partials/footer')

</body>

</html>