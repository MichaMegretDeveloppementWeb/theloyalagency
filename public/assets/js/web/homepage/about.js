import {ready} from "../../dom-utils.js";


ready(() => {

    const aboutSection = document.querySelector('#page_content.homepage section.about');
    const aboutImage = document.querySelector('#page_content.homepage section.about .section_content .img_container');
    const aboutText = document.querySelector('#page_content.homepage section.about .section_content .text_container');

    function appearAboutImage() {


        if ((window.innerHeight / 1.25) >= aboutImage.getBoundingClientRect().top){
            aboutImage.classList.add('appear');
        }
        else {
            aboutImage.classList.remove('appear');
        }

    }

    function appearAboutText() {

        if ((window.innerHeight / 1.25) >= aboutText.getBoundingClientRect().top){
            aboutText.classList.add('appear');
        }
        else {
            aboutText.classList.remove('appear');
        }

    }



    appearAboutImage();
    appearAboutText();

    window.addEventListener('scroll', appearAboutImage);
    window.addEventListener('scroll', appearAboutText);


})
