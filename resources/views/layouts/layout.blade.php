<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiniSuper Aldape - @yield('title')</title>
    @include('layouts.styles')
    <link rel="shortcut icon" href="{{ asset('images/MSA.jpeg') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="lyt-ct">
        @yield('content')
    </div>
</body>
</html>
