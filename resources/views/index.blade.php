<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EstimB</title>
        <script src="https://kit.fontawesome.com/530790a84d.js" crossorigin="anonymous"></script>        

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="main-layout">
        <x-home :texts="$texts"/>
        <x-about-us :texts="$texts"/>
        <x-offer :offers="$offers"/>
        <x-contact :texts="$texts"/>
    </body>
</html>
