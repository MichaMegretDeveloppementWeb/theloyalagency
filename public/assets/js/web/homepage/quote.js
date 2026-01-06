document.addEventListener('DOMContentLoaded', function() {

    const quoteSection = document.querySelector('.quote_section');
    if (!quoteSection) return;

    const sectionContent = quoteSection.querySelector('.section_content');

    function appearQuote() {
        const rect = sectionContent.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight * 0.85) {
            sectionContent.classList.add('appear');
        }
    }

    appearQuote();
    window.addEventListener('scroll', appearQuote);

});
