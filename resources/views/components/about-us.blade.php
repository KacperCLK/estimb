<div id="about-us" class="card card--left about-us">
    <div class="card__left">
        <div class="about-us__photos-container">
            <div class="about-us__img-container">
                <img src="{{ asset('storage/images/employee_1.jpg') }}" alt="employee photo" class="about-us__img">
                <a class="about-us__linkedin-icon link link--linkedin" href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="about-us__img-container">
                <img src="{{ asset('storage/images/kc.jpg') }}" alt="mployee photo" class="about-us__img">
                <a class="about-us__linkedin-icon link link--linkedin" href="#">
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