<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EstimB | Kosztorysy Budowlane Kraków 🏗️ | Profesjonalne Wyceny i Optymalizacja</title>
        <meta name="description" content="
            Kosztorysy budowlane 🛠️
            Kraków | Małopolska: wstępne, inwestorskie, ofertowe, przedmiary, obmiary i weryfikacja kosztorysów 💼 
        ">

        <script src="https://kit.fontawesome.com/530790a84d.js" crossorigin="anonymous"></script>        

        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo.png') }}">
        
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="main-layout">
        <x-home :texts="$texts"/>
        <x-about-us :texts="$texts"/>
        <x-offer :offers="$offers"/>
        <x-contact :texts="$texts"/>

        @livewireScripts
    </body>
</html>
