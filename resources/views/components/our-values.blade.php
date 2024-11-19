<section id="our-values" class="card card--solo our-values section--hidden">
    <h2 class="title">{{ $texts['our-values__title']->content }}</h2>
    
    <div class="our-values__values">
        @foreach ($ourValues as $ourValue)
            <div class="our-values__value">
                <i class="fa-solid fa-circle-check"></i>
                <h3>{{ $ourValue->title }}</h3>
                <p class="our-values__value__description">{{ $ourValue->description }}</p>
            </div>
        @endforeach
    </div>
</section>