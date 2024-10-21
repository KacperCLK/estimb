<div id="about-us" class="card card--left about-us">
    <div class="card__left">
        <div class="about-us__photos-container">
            <div class="about-us__img-container">
                <img src="{{ asset('storage/images/ps.jpg') }}" alt="employee photo" class="about-us__img">
                <a class="about-us__linkedin-icon link link--linkedin" href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="about-us__img-container">
                <img src="{{ asset('storage/images/photo_2.jpg') }}" alt="mployee photo" class="about-us__img">
                <a class="about-us__linkedin-icon link link--linkedin" href="https://www.linkedin.com/in/kacper-celak-1b7a05262/">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card__right">
        <h1 class="title title--medium">
            Informacje o nas
        </h1>
        <div class="about-us__description">
            {{ $texts['about-us__description']->content }}
        </div>
    </div>
</div>