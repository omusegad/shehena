<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Shehena') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Javascript-->
    <script src="{{ asset('js/google.api.js') }}" type="text/Javascript"></script>

  
</head>
<body>
    <div class="main-wrapper">
         @include('layouts.header')
        <div>
            @yield('content')
        </div>
        @include('layouts.footer')

    </div>

