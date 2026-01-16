document.addEventListener('DOMContentLoaded', function() {

    const sectionContent = document.querySelector('#final_cta .section_content');

    if (!sectionContent) return;

    const rect = sectionContent.getBoundingClientRect();
    const isAboveViewport = rect.bottom < 0;
    const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;

    if (isAboveViewport) {
        sectionContent.classList.add('no-animation');
        return;
    }

    if (isInViewport) {
        setTimeout(() => {
            sectionContent.classList.add('revealed');
        }, 150);
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                sectionContent.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    });

    observer.observe(sectionContent);

});
