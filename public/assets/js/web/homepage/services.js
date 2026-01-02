import {ready} from "../../dom-utils.js";

ready(() => {

    const serviceTitle = document.querySelector('#page_content.homepage section.services .section_content .title_container');
    const offerContent = document.querySelector('#page_content.homepage section.services .offer_content');

    function appearServiceTitle() {
        if (!serviceTitle) return;

        if ((window.innerHeight / 1.5) >= serviceTitle.getBoundingClientRect().top){
            serviceTitle.classList.add('appear');
        }
        else {
            serviceTitle.classList.remove('appear');
        }
    }

    function appearOfferContent() {
        if (!offerContent) return;

        if ((window.innerHeight / 1.4) >= offerContent.getBoundingClientRect().top){
            offerContent.classList.add('appear');
        }
        else {
            offerContent.classList.remove('appear');
        }
    }


    appearServiceTitle();
    appearOfferContent();

    window.addEventListener('scroll', appearServiceTitle);
    window.addEventListener('scroll', appearOfferContent);

});
