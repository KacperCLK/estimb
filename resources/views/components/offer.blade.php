<section id="offer" class="card card--solo offer section--hidden">
    <div class="offer__table">
        <div class="offer__title">
            <h2 class="title">
                Profesjonalne kosztorysy budowlane - Oferta EstimB:
            </h2>
        </div>
        <div class="offer__tiles">
            @foreach ($offers as $offer)
                @if ($offer->display)
                    <div class="offer__tile offer__tile--hidden">
                        <div class="offer__tile__content">
                            <div class="offer__tile__front">
                                <div class="offer__tile__icon">
                                    <i class="{{ $offer->icon }}"></i>
                                </div>
                                <h3 class="offer__tile__name title">
                                    {{ $offer->name }}
                                </h3>
                            </div>
                            <div class="offer__tile__back hidden">
                                <span class="offer__tile__description">
                                    {{ $offer->short_description }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        
    </div>
</section>