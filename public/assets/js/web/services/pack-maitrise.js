import {ready} from "../../dom-utils.js";



ready(() => {


    const resourceTextContainer = document.querySelector("#pack-maitrise .text_container");
    const resourceImageContainer = document.querySelector("#pack-maitrise .image_container");

    function appearResourcesElements(){

        if (resourceImageContainer.getBoundingClientRect().top +( resourceImageContainer.offsetHeight/2) <= window.innerHeight){
            resourceImageContainer.classList.add('appear');
        }
        else {
            resourceImageContainer.classList.remove('appear');
        }


        if (resourceTextContainer.getBoundingClientRect().top +( resourceTextContainer.offsetHeight/2) <= window.innerHeight){
            resourceTextContainer.classList.add('appear');
        }
        else {
            resourceTextContainer.classList.remove('appear');
        }

    }


    appearResourcesElements();

    window.addEventListener("scroll", appearResourcesElements);


})
