document.addEventListener('DOMContentLoaded', function() {

    const keyStatSection = document.querySelector('#customer_recovery .key_stat');

    if (!keyStatSection) return;

    const rect = keyStatSection.getBoundingClientRect();
    const isAboveViewport = rect.bottom < 0;
    const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;

    // Section déjà passée (au-dessus du viewport) : afficher sans animation
    if (isAboveViewport) {
        keyStatSection.classList.add('no-animation');
        return;
    }

    // Section visible au chargement : déclencher l'animation après un court délai
    if (isInViewport) {
        setTimeout(() => {
            keyStatSection.classList.add('revealed');
        }, 150);
        return;
    }

    // Section en dessous : observer le scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                keyStatSection.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.4,
        rootMargin: '0px 0px -100px 0px'
    });

    observer.observe(keyStatSection);

});
