<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
</head>
<body data-bs-theme="dark">
<div class="wrapper">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>