<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>{{ config('app.name', 'MCU Book Management') }}</title>
</head>

<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('inc.footer')
</body>

</html>
