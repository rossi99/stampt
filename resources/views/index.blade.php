<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stampt</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/base.css')}}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="antialiased">
        <div id="app" class="app">
            <div class="content-container">
                {{-- Renders Header --}}
                <nav-header></nav-header>

                {{-- Renders Page content --}}
                <index></index>
            </div>
        </div>
    </body>
</html>
