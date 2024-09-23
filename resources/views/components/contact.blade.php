<div id="contact-us" class="card card--left contact-us">
    <div class="card__left">
        <form action="/submit" method="POST" class="contact-us__form">
            @csrf            
            <div class="title title--big">
                Contact us!
            </div>
            
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="email" id="email" name="email" placeholder="What's your email?" required>
            <textarea id="message" name="message" placeholder="Your message..." required></textarea>
        
            <button type="submit" class="link link--button-2">Send message</button>
        </form>
    </div>
    
    <div class="card__right">
        <i class="fa-solid fa-envelope-open-text"></i>
        <span>
            You can also contact us via Gmail: 
            <br>
            <a href="#" class="link link--inline">estimators@gmail.com</a>
        </span>
        <span>
            Or directly by phone: 
            <br>
            <a href="#" class="link link--inline">668 888 111</a>
        </span>
    </div>
</div>