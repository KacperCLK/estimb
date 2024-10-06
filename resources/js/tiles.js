document.querySelectorAll('.offer__tile').forEach(tile => {
    tile.addEventListener('click', () => {
        const content = tile.querySelector('.offer__tile__content');
        const front = content.querySelector('.offer__tile__front'); // Wybiera przód
        const back = content.querySelector('.offer__tile__back'); // Wybiera tył

        content.classList.toggle('flipped');
        front.classList.toggle('hidden');
        back.classList.toggle('hidden');
    });
});