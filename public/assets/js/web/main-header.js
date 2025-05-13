import {ready} from "../dom-utils.js";


ready(() => {

    window.addEventListener('resize', function (e){
        defineHeaderLogoSrc();
    });


    document.addEventListener("scroll", () => {

        defineHeaderVisibility(lastScroll);

        lastScroll = window.scrollY;

    });


    document.getElementById("wrapper").addEventListener('click', function (e){

        handleClickOnMainNavBurger(e);

    })




    let lastScroll = window.scrollY;

    defineHeaderVisibility(lastScroll);

    defineHeaderLogoSrc();





    function handleClickOnMainNavBurger(e){

        const burger = document.querySelector("#main_header .burger_container");
        const mainNavbar = document.querySelector("#main_navbar");
        const mainHeader = document.querySelector("#main_header");

        if (isOrInId(e.target, 'main_header') && isOrInClass(e.target, "burger_container")){

            if (burger){
                burger.classList.toggle('open')
            }
            if (mainNavbar){
                mainNavbar.classList.toggle('open')
            }
            if (mainHeader){
                mainHeader.classList.toggle('blue');
            }

        }
        else if(!isOrInId(e.target, "main_navbar")){
            if (burger){
                burger.classList.remove('open')
            }
            if (mainNavbar){
                mainNavbar.classList.remove('open')
            }
            if (mainHeader){
                mainHeader.classList.remove('blue');
            }
        }
    }

    function defineHeaderLogoSrc(){

        const logo = document.querySelector("#main_header .logo_container img");

        const logoSrc = logo.getAttribute('src');

        if (window.innerWidth < 800){

            const nouveauSrc = logoSrc.replace('main-logo-desktop', 'main-logo-mobil');

            logo.setAttribute('src', nouveauSrc);
        }
        else {

            const nouveauSrc = logoSrc.replace('main-logo-mobil', 'main-logo-desktop');

            logo.setAttribute('src', nouveauSrc);

        }

    }

    function defineHeaderVisibility(lastScroll){

        const currentScrollTop = window.scrollY;

        const header = document.getElementById("main_header");

        if(currentScrollTop > header.getBoundingClientRect().height){

            header.style.top = `0`;

            if (lastScroll > currentScrollTop) {
                header.classList.add("appear");
                header.classList.add("transition");
            }
            else {
                header.classList.remove("appear");
            }

        }
        else {
            if ( (lastScroll < currentScrollTop || !header.classList.contains("transition")) && !header.classList.contains("blue")) {
                header.style.top = `-${currentScrollTop}px`;
                header.classList.remove("transition");
            }
            else {
                header.style.top = `0`;
            }
        }

    }

})
