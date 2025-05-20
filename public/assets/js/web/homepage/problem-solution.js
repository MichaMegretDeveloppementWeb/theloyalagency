import {ready} from "../../dom-utils.js";


ready(() => {

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



})
