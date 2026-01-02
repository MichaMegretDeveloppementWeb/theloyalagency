import {ready} from "../../dom-utils.js";


ready(() => {

    // =====================================================
    // PROBLEM/SOLUTION SWITCH LOGIC (existing)
    // =====================================================

    document.getElementById("wrapper").addEventListener('mouseover', handleClickOnProblemSolutionCardSwitch);

    function handleClickOnProblemSolutionCardSwitch(e){

        let switchClicked;

        if(isOrInClass(e.target, 'problem_solution_container') && (switchClicked = isOrInClass(e.target, 'switch'))){

            const cardContainer = switchClicked.closest('.card_container');

            if (!cardContainer) return;

            if (cardContainer.classList.contains('to_switch')) return;

            cardContainer.classList.add('to_switch');


            if(switchClicked.classList.contains('switch_to_problem')){
                cardContainer.classList.remove('show_solution');
            }
            else if(switchClicked.classList.contains('switch_to_solution')){
                cardContainer.classList.add('show_solution');
            }



            const imageContainerToAnimate = cardContainer.querySelector(".image_container.container_2");
            const start = performance.now();
            const maxR = 100;
            const duration = 500;

            function frame(now) {

                const t = Math.min((now - start) / duration, 1);
                const r = maxR * t;

                imageContainerToAnimate.style.setProperty('--r', r.toFixed(2));

                if (t < 1) {
                    requestAnimationFrame(frame);
                }
                else {

                    if (imageContainerToAnimate.classList.contains('reverse')) {
                        imageContainerToAnimate.classList.remove('reverse');
                    }
                    else {
                        imageContainerToAnimate.classList.add('reverse');
                    }

                    imageContainerToAnimate.style.setProperty('--r', '0');

                    cardContainer.classList.remove('to_switch');

                }
            }

            requestAnimationFrame(frame);

        }

    }


    // =====================================================
    // CAROUSEL LOGIC
    // =====================================================

    const section = document.querySelector('.problem_solution_container');
    if (!section) return;

    const carouselWrapper = section.querySelector('.carousel_wrapper');
    const cardListContainer = section.querySelector('.card_list_container');
    const cards = Array.from(section.querySelectorAll('.card_container'));
    const carouselControls = section.querySelector('.carousel_controls');
    const navLeft = section.querySelector('.carousel_nav_left');
    const navRight = section.querySelector('.carousel_nav_right');
    const paginationDots = section.querySelectorAll('.pagination_dot');

    if (!carouselWrapper || !cardListContainer || cards.length === 0) return;

    let currentIndex = 1; // Start centered on middle card (index 1)
    let isCarouselActive = false;
    let currentOffset = 0;

    // Touch/swipe variables
    let touchStartX = 0;
    let touchEndX = 0;
    const swipeThreshold = 50;


    /**
     * Check if carousel mode should be active (cards overflow the container)
     */
    function checkCarouselActive() {
        // Reset transform temporarily to measure true dimensions
        cardListContainer.style.transition = 'none';
        cardListContainer.style.transform = '';

        // Force reflow
        cardListContainer.offsetHeight;

        const wrapperWidth = carouselWrapper.offsetWidth;
        const listWidth = cardListContainer.scrollWidth;

        isCarouselActive = listWidth > wrapperWidth;

        if (isCarouselActive) {
            section.classList.add('carousel_active');
        } else {
            section.classList.remove('carousel_active');
            section.classList.remove('can_go_left', 'can_go_right');
        }

        return isCarouselActive;
    }


    // Store card positions (calculated once, updated on resize)
    let cardPositions = [];

    /**
     * Calculate and store all card positions
     */
    function calculateCardPositions() {
        // Reset transform to get accurate measurements
        cardListContainer.style.transition = 'none';
        cardListContainer.style.transform = 'translateX(0)';

        // Force reflow
        cardListContainer.offsetHeight;

        const wrapperWidth = carouselWrapper.offsetWidth;
        const wrapperRect = carouselWrapper.getBoundingClientRect();

        cardPositions = cards.map(card => {
            const cardRect = card.getBoundingClientRect();
            const cardCenterRelativeToWrapper = (cardRect.left - wrapperRect.left) + (cardRect.width / 2);
            const targetCenter = wrapperWidth / 2;
            return targetCenter - cardCenterRelativeToWrapper;
        });
    }

    /**
     * Get the pre-calculated offset to center a specific card
     */
    function getCardCenterOffset(index) {
        if (index < 0 || index >= cardPositions.length) return 0;
        return cardPositions[index];
    }


    /**
     * Update navigation buttons visibility
     */
    function updateNavigation() {
        if (!isCarouselActive) return;

        if (currentIndex > 0) {
            section.classList.add('can_go_left');
        } else {
            section.classList.remove('can_go_left');
        }

        if (currentIndex < cards.length - 1) {
            section.classList.add('can_go_right');
        } else {
            section.classList.remove('can_go_right');
        }
    }


    /**
     * Update pagination dots
     */
    function updatePagination() {
        paginationDots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }


    /**
     * Navigate to a specific card index
     */
    function goToCard(index, animate = true) {
        if (index < 0) index = 0;
        if (index >= cards.length) index = cards.length - 1;

        currentIndex = index;

        const offset = getCardCenterOffset(index);
        currentOffset = offset;

        cardListContainer.style.transition = animate
            ? 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)'
            : 'none';

        cardListContainer.style.transform = `translateX(${offset}px)`;

        updateNavigation();
        updatePagination();
    }


    /**
     * Go to previous card
     */
    function goToPrevious() {
        if (currentIndex > 0) {
            goToCard(currentIndex - 1);
        }
    }


    /**
     * Go to next card
     */
    function goToNext() {
        if (currentIndex < cards.length - 1) {
            goToCard(currentIndex + 1);
        }
    }


    /**
     * Handle touch start
     */
    function handleTouchStart(e) {
        if (!isCarouselActive) return;
        touchStartX = e.changedTouches[0].screenX;
    }


    /**
     * Handle touch end
     */
    function handleTouchEnd(e) {
        if (!isCarouselActive) return;
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }


    /**
     * Process swipe gesture
     */
    function handleSwipe() {
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left -> go to next
                goToNext();
            } else {
                // Swipe right -> go to previous
                goToPrevious();
            }
        }
    }


    /**
     * Initialize carousel
     */
    function initCarousel() {
        checkCarouselActive();

        if (isCarouselActive) {
            calculateCardPositions();
            goToCard(currentIndex, false);
        }
    }


    // =====================================================
    // EVENT LISTENERS
    // =====================================================

    // Navigation buttons
    navLeft.addEventListener('click', goToPrevious);
    navRight.addEventListener('click', goToNext);

    // Pagination dots
    paginationDots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const index = parseInt(dot.dataset.index, 10);
            goToCard(index);
        });
    });

    // Touch events for swipe
    carouselWrapper.addEventListener('touchstart', handleTouchStart, { passive: true });
    carouselWrapper.addEventListener('touchend', handleTouchEnd, { passive: true });

    // Window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            checkCarouselActive();

            if (isCarouselActive) {
                calculateCardPositions();
                goToCard(currentIndex, false);
            }
        }, 100);
    });

    // Initialize on load with a small delay to ensure layout is complete
    setTimeout(initCarousel, 50);

});
