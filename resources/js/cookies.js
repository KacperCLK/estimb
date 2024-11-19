document.addEventListener('DOMContentLoaded', function () {
    const consentBanner = document.getElementById('cookieConsent');
    
    // Sprawdź, czy ciasteczko 'cookiesAccepted' istnieje
    if (!document.cookie.includes('cookiesAccepted=true')) {
        consentBanner.style.display = 'block';
        consentBanner.style.opacity = '1';
    }
    
    // Obsługa kliknięcia w "Akceptuję"
    document.getElementById('acceptCookies').addEventListener('click', function () {
        // Ustaw ciasteczko z czasem ważności na 30 dni
        document.cookie = "cookiesAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 30;

        consentBanner.style.opacity = '0';        
        // Po 200 ms ustawienie display: none
        setTimeout(() => {
            consentBanner.style.display = 'none';
        }, 500);
    });
});
