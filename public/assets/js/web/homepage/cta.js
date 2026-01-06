document.addEventListener('DOMContentLoaded', function() {

    const ctaSection = document.querySelector('.cta_section');
    if (!ctaSection) return;

    const sectionContent = ctaSection.querySelector('.section_content');

    function appearCta() {
        const rect = sectionContent.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight * 0.85) {
            sectionContent.classList.add('appear');
        }
    }

    appearCta();
    window.addEventListener('scroll', appearCta);

});
