import {ready} from "../../dom-utils.js";

class ReviewCarousel {
    constructor(containerSelector, prevBtnSelector, nextBtnSelector) {
        this.reviews = Array.from(document.querySelectorAll(`${containerSelector} .review`));
        this.currentIndex = this.reviews.findIndex(el => el.classList.contains('current'));
        this.prevBtn = document.querySelector(prevBtnSelector);
        this.nextBtn = document.querySelector(nextBtnSelector);

        this.isRotating = false;

        this.prevBtn.addEventListener('click', () => this.rotate(-1));
        this.nextBtn.addEventListener('click', () => this.rotate(1));

        const container = document.querySelector(containerSelector);
        container.addEventListener('transitionend', () => {
            this.isRotating = false;
            this.prevBtn.disabled = false;
            this.nextBtn.disabled = false;
        }, { capture: true });
    }

    rotate(dir) {

        if (this.isRotating) return;
        this.isRotating = true;
        this.prevBtn.disabled = true;
        this.nextBtn.disabled = true;

        const len = this.reviews.length;
        const oldIdx = this.currentIndex;
        const toComeIdx = (oldIdx - 1 + len) % len;
        const passedIdx = (oldIdx + 1) % len;
        const firstWaitingIdx = (oldIdx - 2 + len) % len;
        const lastWaitingIdx = (oldIdx + 2) % len;

        const oldCurrent = this.reviews[oldIdx];
        const oldToCome = this.reviews[toComeIdx];
        const oldPassed = this.reviews[passedIdx];
        const oldFirstWaiting = this.reviews[firstWaitingIdx];
        const oldLastWaiting = this.reviews[lastWaitingIdx];

        if (dir < 0) {
            oldToCome.style.transformOrigin = 'right';
            oldCurrent.style.transformOrigin = 'left';
            oldPassed.style.transformOrigin = 'left';
            oldFirstWaiting.style.transformOrigin = 'right';
        } else {
            oldLastWaiting.style.transformOrigin = 'left';
            oldPassed.style.transformOrigin = 'left';
            oldToCome.style.transformOrigin = 'right';
            oldCurrent.style.transformOrigin = 'right';
        }

        this.currentIndex = (oldIdx + dir + len) % len;

        this.reviews.forEach((review, i) => {
            const rel = (i - this.currentIndex + len) % len;
            let state;
            if (rel === 0) state = 'current';
            else if (rel === 1) state = 'passed';
            else if (rel === len - 1) state = 'to_come';
            else state = 'waiting';
            review.className = `review ${state}`;
        });
    }
}

ready(() => {

    new ReviewCarousel(
        "#page_content section.reviews .section_content .reviews_list",
        "#page_content section.reviews .section_content .reviews_list_container .nav.prev",
        "#page_content section.reviews .section_content .reviews_list_container .nav.next"
    )

});
