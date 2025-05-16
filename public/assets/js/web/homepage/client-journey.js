import {ready} from "../../dom-utils.js";


ready(() => {


    const section = document.querySelector('#page_content.homepage section.client_journey_container');
    const container = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container');
    const frameContainer = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container .step_frame');
    const path = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container svg.nine_steps_svg path.path_2');
    const subPath = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container svg.nine_steps_svg path.path_1');
    const svg = path.closest('svg');
    let pathRealLength = 0;


    function initialiseSvgPath(){

        pathRealLength = getSvgPathRealLength(path);

        path.style.strokeDasharray = `${pathRealLength}`;
        path.style.strokeDashoffset = `0`;


        svg.style.transform = `rotateX(35deg) translateY(-10%)`;

    }

    function getSvgPathRealLength(path, samples = 200) {
        const svg = path.closest('svg');
        const { width: wPx, height: hPx } = svg.getBoundingClientRect();
        const vb = svg.viewBox.baseVal;
        const ratioX = wPx / vb.width;
        const ratioY = hPx / vb.height;

        const totalLen = path.getTotalLength();
        let lengthPx = 0;

        let prev = path.getPointAtLength(0);
        let prevPx = { x: prev.x * ratioX, y: prev.y * ratioY };

        for (let i = 1; i <= samples; i++) {
            const dist = (i / samples) * totalLen;
            const pt = path.getPointAtLength(dist);
            const curPx = { x: pt.x * ratioX, y: pt.y * ratioY };

            const dx = curPx.x - prevPx.x;
            const dy = curPx.y - prevPx.y;
            lengthPx += Math.hypot(dx, dy);

            prevPx = curPx;
        }

        return lengthPx * 1.01;
    }


    initialiseSvgPath();

    window.addEventListener('resize', initialiseSvgPath);



    section.style.height = container.offsetHeight * 3 + 'px';

    subPath.style.strokeDasharray = `${pathRealLength/150}`;









    const rotateX = (window.innerWidth > 800) ? 45 : 50;


    animateOnScroll({
        triggerElement: section,
        element: path,
        elementEnterTrigger: { position: 'top', offset: 0 },
        enterTrigger:   { position: 'top', offset: container.offsetHeight / 2 },
        elementExitTrigger: { position: 'bottom', offset: 0 },
        exitTrigger:    { position: 'bottom', offset: container.offsetHeight / 6 },
        animations: [
            {
                property: 'strokeDashoffset',
                unit:     '',
                minValue: 0,
                maxValue: pathRealLength * -1,
                speed:    0.2
            }
        ],
        devMode: false
    });

    animateOnScroll({
        triggerElement: section,
        element: svg,
        elementEnterTrigger: { position: 'top', offset: 0 },
        enterTrigger:   { position: 'top', offset: container.offsetHeight / 2 },
        elementExitTrigger: { position: 'bottom', offset: 0 },
        exitTrigger:    { position: 'bottom', offset: container.offsetHeight / 6 },
        animations: [
            {
                property: 'transform',
                from:     `rotateX(${rotateX}deg) translateY(25%) scale(1.5)`,
                to: `rotateX(${rotateX}deg) translateY(-25%) scale(1)`,
                speed:    0.2
            }
        ],
        devMode: false
    });














    const markers = document.querySelectorAll('#page_content.homepage section.client_journey_container .nine_step_container .step_marker');
    const count     = markers.length;
    const fractions = Array.from({ length: count }, (_, i) =>
        count > 1 ? i / (count - 1) : 0
    );


    const svgDots = fractions.map((f, i) => {
        const totalLen = path.getTotalLength();
        const { x, y } = path.getPointAtLength(totalLen * f);
        const dot = document.createElementNS(svg.namespaceURI, 'circle');
        dot.setAttribute('cx', x);
        dot.setAttribute('cy', y);
        dot.setAttribute('r', 0.1);
        dot.style.opacity = '0';
        dot.style.fill = 'orange';
        dot.style.pointerEvents = 'none';
        svg.appendChild(dot);
        return dot;
    });


    function updateMarkers() {

        const currentDasharray = parseFloat(path.style.strokeDasharray);
        const progress = Math.abs(parseFloat(path.style.strokeDashoffset) / currentDasharray);

        const containerRect = frameContainer.getBoundingClientRect();

        for (let i = 0; i < svgDots.length; i++) {

            const dot = svgDots[i];
            const marker = markers[i];

            const rect = dot.getBoundingClientRect();
            const ptX = rect.left;
            const ptY = rect.top;

            marker.style.left = `${ptX - containerRect.left}px`;
            marker.style.top  = `${ptY - containerRect.top}px`;

            if((progress > fractions[i] || progress > 0.99) && progress > 0.01) {
                marker.classList.add('active');
            }
            else {
                marker.classList.remove('active');
            }

        }

        for (let i = 0; i < 3; i++) {

            markers[i].style.transform = `translateY(-100%) scale(${1 - (progress * 0.35)})`;

        }

        markers[3].style.transform = `translateY(-100%) scale(${1 - (progress * 0.2)})`;

        markers[4].style.transform = `translateY(-100%) scale(${1 - (progress * 0.1)})`;

    }


    let rafId = null;
    let prevDashOffset = parseFloat(path.style.strokeDashoffset);
    const EPS = 0.001;

    function loop() {

        const currentDashOffset = parseFloat(path.style.strokeDashoffset);

        if (Math.abs(currentDashOffset - prevDashOffset) > EPS) {
            updateMarkers();
            prevDashOffset = currentDashOffset;
            rafId = requestAnimationFrame(loop);
        } else {
            rafId = null;
        }
    }

    function startLoop() {
        if (rafId === null) {
            prevDashOffset = parseFloat(path.style.strokeDashoffset);
            rafId = requestAnimationFrame(loop);
        }
    }


    window.addEventListener('scroll', startLoop);

    updateMarkers();



})
