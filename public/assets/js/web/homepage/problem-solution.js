import {ready} from "../../dom-utils.js";


ready(() => {

    document.getElementById("wrapper").addEventListener('click', function (e){

        handleClickOnProblemSolutionCardSwitch(e);

    })

    function handleClickOnProblemSolutionCardSwitch(e){

        let switchClicked;

        if(isOrInClass(e.target, 'problem_solution_container') && (switchClicked = isOrInClass(e.target, 'switch'))){

            const cardContainer = switchClicked.closest('.card_container');

            if (!cardContainer) return;

            if(switchClicked.classList.contains('switch_to_problem')){
                cardContainer.classList.remove('show_solution');
            }
            else if(switchClicked.classList.contains('switch_to_solution')){
                cardContainer.classList.add('show_solution');
            }

            if (switchClicked.closest(".card_container").classList.contains('alt_1')) {

                const imageContainerToAnimate = switchClicked.closest(".card_container").querySelector(".image_container.container_2");
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
                    }
                }

                requestAnimationFrame(frame);
            }

        }

    }







    const title = document.querySelector("#page_content.homepage section.problem_solution_container .title_container>.title");

    let currentX = null;
    let targetX = null;

    function defineTitlePosition() {
        const rect = title.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        const elCenter = rect.top + rect.height / 2;
        const viewportCenter = viewportHeight / 2;

        const distance = elCenter - viewportCenter;
        const maxDistance = viewportHeight / 2;

        let progress = 1 - (Math.min(Math.max(distance / maxDistance, 0), 1));

        targetX = 80 - (80 * progress);

        function frame() {
            currentX = currentX + (targetX - currentX) * 0.01;
            title.style.transform = `translateX(${currentX}vw)`;
            if (Math.abs(currentX - targetX) > 0.1){
                requestAnimationFrame(frame);
            }
        }

        if (!currentX) {
            currentX = targetX;
        }

        frame();

    }


    /*defineTitlePosition();

    window.addEventListener('scroll', function (e){

        defineTitlePosition();

    })*/



})
