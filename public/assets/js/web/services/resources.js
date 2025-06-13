import {ready} from "../../dom-utils.js";


ready(() => {

    const resourceTextContainer = document.querySelector("#ressources .text_container");
    const resourceImageContainer = document.querySelector("#ressources .image_container");

    function appearResourcesElements(){

        if (resourceImageContainer.getBoundingClientRect().top +( resourceImageContainer.offsetHeight/2) <= window.innerHeight){
            resourceImageContainer.classList.add('appear');
        }
        else {
            resourceImageContainer.classList.remove('appear');
        }


        if (resourceTextContainer.getBoundingClientRect().top +( resourceTextContainer.offsetHeight/1) <= window.innerHeight){
            resourceTextContainer.classList.add('appear');
        }
        else {
            resourceTextContainer.classList.remove('appear');
        }

    }


    appearResourcesElements();

    window.addEventListener("scroll", appearResourcesElements);


})
