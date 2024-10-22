<div id="contact-us" class="card card--left contact-us">
    <div class="card__left">
        @livewire('contact-form')
    </div>
    
    <div class="card__right">
        <i class="fa-solid fa-envelope-open-text"></i>
        <div class="card__right__email">
            Możesz również skontaktować się z nami pod adresem:
            <br>
            <span class="link link--inline copyText">{{ $texts['contact_email']->content }}</span>
            <div id="popup" class="popup">Skopiowano!</div>
        </div>
        <div class="card__right__phone">
            Lub bezpośrednio telefonicznie:
            <br>
            <span class="link link--inline copyText">{{ $texts['contact_phone']->content }}</span>
            <div id="popup" class="popup">Skopiowano!</div>
        </div>
    </div>
</div>