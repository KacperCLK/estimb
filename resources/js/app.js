import './bootstrap';
import './cookies';
import './popup';
import './tiles';


document.addEventListener('DOMContentLoaded', function () {
    const allSections = document.querySelectorAll('.section--hidden');

    const revealSection = function(entries, observer) {
        const [entry] = entries;
    
        if(!entry.isIntersecting) return;
    
        entry.target.classList.remove('section--hidden');

        // "offer" ma szczególne zmiany
        if (entry.target.id === 'offer') {
            const offerTiles = entry.target.querySelectorAll('.offer__tile');
        
            offerTiles.forEach((tile, index) => {
                // Ustawienie opóźnienia dla każdego kafelka
                setTimeout(() => {
                    tile.classList.remove('offer__tile--hidden'); // Usuwamy klasę ukrywającą
        
                    // Po 1 sekundzie zmieniamy transition dla animacji transform
                    setTimeout(() => {
                        tile.style.transition = 'transform .2s ease-in-out';
                    }, 1000);
                }, index * 400); // 400 ms przerwy między kafelkami
            });
        }

        observer.unobserve(entry.target);
    };
    
    const sectionObserver = new IntersectionObserver(revealSection, {
        root: null,
        threshold: 0.15,
    })

    allSections.forEach(section => {
        sectionObserver.observe(section);
    });
});