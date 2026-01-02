import {ready} from "../../dom-utils.js";

ready(() => {

    // Elements à animer
    const heroContent = document.querySelector('#coaching-hero .section_content');
    const philosophyContent = document.querySelector('#coaching-philosophy .section_content');
    const processSteps = document.querySelectorAll('#coaching-process .step_content');
    const audienceHeader = document.querySelector('#coaching-audience .audience_header');
    const audienceCards = document.querySelectorAll('#coaching-audience .audience_card');
    const benefitsTitle = document.querySelector('#coaching-benefits .benefits_title');
    const benefitItems = document.querySelectorAll('#coaching-benefits .benefit_item');
    const ctaContent = document.querySelector('#coaching-cta .section_content');


    // Fonction utilitaire pour vérifier si un élément est visible
    function isInViewport(element, threshold = 1.3) {
        if (!element) return false;
        const rect = element.getBoundingClientRect();
        return (window.innerHeight / threshold) >= rect.top;
    }


    // Fonction pour animer un élément simple
    function animateElement(element, threshold = 1.3) {
        if (!element) return;
        if (isInViewport(element, threshold)) {
            element.classList.add('appear');
        }
    }


    // Fonction pour animer une collection avec délai progressif
    function animateCollection(elements, threshold = 1.3, baseDelay = 100) {
        if (!elements || elements.length === 0) return;

        elements.forEach((element, index) => {
            if (isInViewport(element, threshold) && !element.classList.contains('appear')) {
                setTimeout(() => {
                    element.classList.add('appear');
                }, index * baseDelay);
            }
        });
    }


    // Fonction principale d'animation
    function animateOnScroll() {
        // Hero - apparaît immédiatement
        animateElement(heroContent, 1.1);

        // Philosophie
        animateElement(philosophyContent, 1.3);

        // Étapes du processus
        processSteps.forEach(step => {
            animateElement(step, 1.3);
        });

        // Section Pour qui
        animateElement(audienceHeader, 1.3);
        animateCollection(audienceCards, 1.4, 150);

        // Section Bénéfices
        animateElement(benefitsTitle, 1.3);
        animateCollection(benefitItems, 1.4, 80);

        // CTA
        animateElement(ctaContent, 1.3);
    }


    // Exécution initiale
    animateOnScroll();

    // Écoute du scroll
    window.addEventListener('scroll', animateOnScroll);

});
