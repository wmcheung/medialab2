<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dordrecht Dashboard - Authenticatie</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
@yield('content')
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/foundation.js') }}"></script>
</body>
</html>
