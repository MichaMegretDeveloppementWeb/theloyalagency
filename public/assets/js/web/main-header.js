import {ready} from "../dom-utils.js";


ready(() => {

    document.getElementById("wrapper").addEventListener('click', function (e){

        handleClickOnMainNavBurger(e);

    })



    function handleClickOnMainNavBurger(e){

        const burger = document.querySelector("#main_header .burger_container");
        const mainNavbar = document.querySelector("#main_navbar");

        if (isOrInId(e.target, 'main_header') && isOrInClass(e.target, "burger_container")){

            if (burger){
                burger.classList.toggle('open')
            }
            if (mainNavbar){
                mainNavbar.classList.toggle('open')
            }

        }
        else if(!isOrInId(e.target, "main_navbar")){
            if (burger){
                burger.classList.remove('open')
            }
            if (mainNavbar){
                mainNavbar.classList.remove('open')
            }
        }
    }

})
