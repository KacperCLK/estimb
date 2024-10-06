document.querySelectorAll(".copyText").forEach(element => {
    element.addEventListener("click", function() {
        const text = this.innerText;
        
        navigator.clipboard.writeText(text).then(function() {
            const popup = element.nextElementSibling;
            popup.classList.add("show");
    
            setTimeout(function() {
                popup.classList.remove("show");
            }, 2000);
        }).catch(function(err) {
            console.error('Błąd kopiowania do schowka:', err);
        });
    });
})