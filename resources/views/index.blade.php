<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>Zodon.AI | Helping you monitor your construction works in real time. </title>
=======
    <title>Zodon.AI</title>
>>>>>>> adc64e7bc696ed74e3e8d9595b83dd8a4f781d29

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'name' => config('app.name')
        ]) !!};
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!}; 
    </script>

    <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body >

<div id="root"></div>
<script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>