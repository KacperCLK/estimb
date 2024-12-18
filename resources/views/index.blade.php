<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />

        <title>EstimB | Kosztorysy Budowlane Kraków 🏗️ | Profesjonalne Wyceny i Optymalizacja</title>
        <meta name="description" content="
            Kosztorysy budowlane 🛠️
            Kraków | Małopolska: wstępne, inwestorskie, ofertowe, przedmiary, obmiary i weryfikacja kosztorysów 💼 
        ">

        <script src="https://kit.fontawesome.com/530790a84d.js" crossorigin="anonymous"></script>        

        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo_new_1.png') }}">
        
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="main-layout">        
        <x-home :texts="$texts"/>
        
        <div class="section-container">
            <x-about-us :texts="$texts"/>
        </div>
        <div class="section-container">
            <x-offer :offers="$offers"/>
        </div>
        <div class="section-container">
            <x-our-values :texts="$texts" :ourValues="$ourValues" />
        </div>
        <div class="section-container">
            <x-contact :texts="$texts"/>
        </div>
        
        <x-cookies :texts="$texts"/>

        @livewireScripts
    </body>
</html>
