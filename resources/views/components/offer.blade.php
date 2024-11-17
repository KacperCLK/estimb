<div id="offer" class="card card--solo offer">
    <div class="offer__table">
        <div class="offer__title">
            <h2 class="title title--medium">
                Profesjonalne kosztorysy budowlane - Oferta EstimB:
            </h2>
        </div>
        <div class="offer__tiles">
            @foreach ($offers as $offer)
                @if ($offer->display)
                    <div class="offer__tile">
                        <div class="offer__tile__content">
                            <div class="offer__tile__front">
                                <div class="offer__tile__icon">
                                    <i class="{{ $offer->icon }}"></i>
                                </div>
                                <h3 class="offer__tile__name title title--small">
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
</div>