<div id="contact-us" class="card card--left contact-us">
    <div class="card__left">
        <form action="/submit" method="POST" class="form">
            @csrf            
            <h1 class="title title--medium">
                Skontaktuj się z nami!
            </h1>
            
            <input type="text" id="name" name="name" placeholder="Twoje imię" required>
            <input type="email" id="email" name="email" placeholder="Twój adres e-mail" required>
            <textarea id="message" name="message" placeholder="Twoja wiadomość..." required></textarea>
        
            <button type="submit" class="link link--button-2">Wyśli wiadomość!</button>
        </form>
    </div>
    
    <div class="card__right">
        <i class="fa-solid fa-envelope-open-text"></i>
        <span>
            Możesz również skontaktować się z nami za pośrednictwem Gmaila:
            <br>
            <span class="link link--inline">{{ $texts['contact_email']->content }}</span>
        </span>
        <span>
            Lub bezpośrednio telefonicznie:
            <br>
            <span class="link link--inline">{{ $texts['contact_phone']->content }}</span>
        </span>
    </div>
</div>