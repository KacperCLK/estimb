<div id="offer" class="card card--solo offer">
    <div class="offer__table">
        <div class="offer__title">
            <div class="title title--big">
                Our Offer
            </div>
        </div>
        <div class="offer__details">
            @foreach ($offers as $offer)
                @if ($offer->display)
                    <div class="offer__detail">
                        <i class="fa-solid fa-angle-right"></i>
                        {{$offer->name}}
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>