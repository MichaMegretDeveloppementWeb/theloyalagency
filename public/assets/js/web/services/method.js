document.addEventListener('DOMContentLoaded', function() {

    const steps = document.querySelectorAll('#method .step');

    if (!steps.length) return;

    steps.forEach(step => {
        const rect = step.getBoundingClientRect();
        const isAboveViewport = rect.bottom < 0;

        if (isAboveViewport) {
            step.classList.add('no-animation');
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    });

    steps.forEach(step => {
        if (!step.classList.contains('no-animation')) {
            observer.observe(step);
        }
    });

});
