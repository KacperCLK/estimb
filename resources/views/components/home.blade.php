<div id="home" class="card card--right home">
    <div class="card__left">
        <div class="home__company-name">
            <div class="home__logo-container">
                <img src="{{ asset('storage/images/logo.png') }}" alt="lOGO" class="home__logo">
            </div>
            <div>
                <h1 class="title title--big">EstimB</h1>
                <h3 class="title title--small">Kosztorysowanie budowlane</h3>
            </div>
        </div>
        <h2 class="title title--medium">
            {{ $texts['home__title']->content }}
        </h2>
        <div class="home__links-container">
            <div class="home__link">
                <a href="#contact-us" class="link link--button-1">Skontaktuj się z nami!</a>
            </div>
            <div class="home__link">
                <a href="#offer" class="link link--button-2">Zobacz naszą ofertę!</a>
            </div>
        </div>
    </div>
    <div class="card__right">
        <div class="home__img-container">
            <img src="{{ asset('storage/images/home.png') }}" alt="Home Photo" class="home__img">
        </div>
    </div>
</div>