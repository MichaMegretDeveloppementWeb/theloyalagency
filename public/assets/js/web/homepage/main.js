import {ready} from "../../dom-utils.js";


ready(() => {

    /* const masks = [
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container .mask1"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const top = -offsetMax + (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) - 5;
                return { left, top };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const top = -offsetMax + (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) - 5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 0 }
        },
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container .mask3"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const top = offsetMax - (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) + 5;
                return { left, top };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.clients_spend_more .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const top = offsetMax - (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) + 5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 0 }
        },
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container .mask1"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const left = -offsetMax + (offsetMax * 2 * ratio / 100);
                return { left, top: -5 };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const left = -offsetMax + (offsetMax * 2 * ratio / 100);
                const top = -5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 0 }
        },
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container .mask3"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const left = offsetMax - (offsetMax * 2 * ratio / 100);
                return { left, top: 5 };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.save_money .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const left = offsetMax - (offsetMax * 2 * ratio / 100);
                const top = 5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 5 }
        },
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container .mask1"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const top = -offsetMax + (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) - 5;
                return { left, top };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const top = -offsetMax + (offsetMax * 2 * ratio / 100);
                const left = (top * -0.890) - 5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 0 }
        },
        {
            element: document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container .mask3"),
            getTarget: () => {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container");
                const ratio = getVisibilityRatio(container);
                if (ratio < 0 || ratio > 100) return null;

                const offsetMax = window.innerHeight / 15;
                const top = offsetMax - (offsetMax * 2 * ratio / 100);
                const left = (top * 0.890) + 5;
                return { left, top };
            },
            initialize() {
                const container = document.querySelector("#page_content.homepage section.stats .stat_list .stat.up_profits .image_container");
                let ratio = getVisibilityRatio(container);
                if (ratio < 0){
                    ratio = 0;
                }
                if (ratio > 100){
                    ratio = 100;
                }

                const offsetMax = window.innerHeight / 15;
                const top = offsetMax - (offsetMax * 2 * ratio / 100);
                const left = (top * 0.890) + 5;
                this.current = { left, top };
                this.element.style.transform = `translate(${left.toFixed(2)}px, ${top.toFixed(2)}px)`;
            },
            current: { left: 0, top: 0 }
        },
    ];


    function getVisibilityRatio(container) {
        const currentScroll = window.scrollY;
        const windowHeight = window.innerHeight;
        const top = container.offsetTop;
        const height = container.offsetHeight;

        let ratio = ((currentScroll + windowHeight) - (top + height / 2)) / windowHeight;
        ratio = parseFloat((ratio * 100).toFixed(2));

        return ratio;
    }


    function animateMasks() {
        let stillAnimating = false;

        for (const mask of masks) {
            const target = mask.getTarget();
            if (!target) continue;

            const dx = target.left - mask.current.left;
            const dy = target.top - mask.current.top;

            if (Math.abs(dx) > 0.5 || Math.abs(dy) > 0.5) {
                stillAnimating = true;

                const step = 0.1;
                mask.current.left += dx * step;
                mask.current.top += dy * step;

                const l = mask.current.left.toFixed(2);
                const t = mask.current.top.toFixed(2);

                mask.element.style.transform = `translate(${l}px, ${t}px)`;
            }
        }

        if (stillAnimating) {
            requestAnimationFrame(animateMasks);
        } else {
            isAnimating = false;
        }
    }


    let isAnimating = false;

    masks.forEach(mask => mask.initialize());*/


    document.addEventListener("scroll", () => {

        /*if (!isAnimating) {
            isAnimating = true;
            requestAnimationFrame(animateMasks);
        }*/

    });

})
