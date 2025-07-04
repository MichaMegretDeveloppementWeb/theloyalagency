import { ready } from "../../dom-utils.js";

ready(() => {

    const section = document.querySelector('#page_content.homepage section.client_journey_container');
    const container = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container');
    const frameContainer = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container .step_frame');
    const path = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container svg.nine_steps_svg path.path_2');
    const subPath = document.querySelector('#page_content.homepage section.client_journey_container .nine_step_container svg.nine_steps_svg path.path_1');
    const svg = path.closest('svg');
    const markers = Array.from(document.querySelectorAll('#page_content.homepage section.client_journey_container .nine_step_container .step_marker'));
    const count = markers.length;
    const fractions = Array.from({ length: count }, (_, i) => count > 1 ? i/(count-1) : 0);

    let pathRealLength = 0;
    let svgDots = [];
    let rafId = null;
    let prevOffset = 0;
    const EPS = 0.001;
    let aosInstances = [];



    function getSvgPathRealLength(p, samples = 200) {
        const { width: w, height: h } = svg.getBoundingClientRect();
        const vb = svg.viewBox.baseVal;
        const rx = w/vb.width, ry = h/vb.height;
        const total = p.getTotalLength();
        let len = 0;
        let prev = p.getPointAtLength(0);
        let prevPx = { x: prev.x*rx, y: prev.y*ry };

        for (let i = 1; i <= samples; i++) {
            const pt = p.getPointAtLength((i/samples)*total);
            const curPx = { x: pt.x*rx, y: pt.y*ry };
            len += Math.hypot(curPx.x - prevPx.x, curPx.y - prevPx.y);
            prevPx = curPx;
        }

        return len * 1.01;
    }



    function initialiseSvgPath() {
        svg.style.transform = '';
        pathRealLength = getSvgPathRealLength(path);
        path.style.strokeDasharray = `${pathRealLength}`;
        path.style.strokeDashoffset = `0`;
        svg.style.transform = `rotateX(35deg) translateY(-10%)`;
        subPath.style.strokeDasharray = `${pathRealLength/150}`;
    }



    function createDots() {
        const total = path.getTotalLength();
        svgDots = fractions.map(f => {
            const { x, y } = path.getPointAtLength(total * f);
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
    }



    function updateMarkers() {
        const dashArr = parseFloat(path.style.strokeDasharray);
        const offset = parseFloat(path.style.strokeDashoffset);
        const prog = Math.abs(offset / dashArr);
        const rect = frameContainer.getBoundingClientRect();

        svgDots.forEach((dot,i) => {
            const { left, top } = dot.getBoundingClientRect();
            const m = markers[i];
            m.style.left = `${left - rect.left}px`;
            m.style.top = `${top - rect.top}px`;
            if ((prog > fractions[i] || prog > 0.99) && prog > 0.01) m.classList.add('active');
            else m.classList.remove('active');
        });

        markers.slice(0,3).forEach(m => m.style.transform = `translateY(-100%) scale(${1 - prog*0.35})`);
        if (markers[3]) markers[3].style.transform = `translateY(-100%) scale(${1 - prog*0.2})`;
        if (markers[4]) markers[4].style.transform = `translateY(-100%) scale(${1 - prog*0.1})`;
    }



    function loop() {
        const off = parseFloat(path.style.strokeDashoffset);
        if (Math.abs(off - prevOffset) > EPS) {
            updateMarkers();
            prevOffset = off;
            rafId = requestAnimationFrame(loop);
        } else {
            rafId = null;
        }
    }



    function startLoop() {
        if (!rafId) {
            prevOffset = parseFloat(path.style.strokeDashoffset);
            rafId = requestAnimationFrame(loop);
        }
    }



    function clearAnimations() {
        aosInstances.forEach(inst => {
            if (inst && typeof inst.destroy === 'function') inst.destroy();
        });
        aosInstances = [];
    }



    function registerAnimations() {
        const rotateX = window.innerWidth > 800 ? 45 : 50;

        aosInstances.push(
            animateOnScroll({
                triggerElement: section,
                element: path,
                elementEnterTrigger: { position:'top', offset:0 },
                enterTrigger: { position:'top', offset:container.offsetHeight/4 },
                elementExitTrigger: { position:'bottom', offset:0 },
                exitTrigger: { position:'bottom', offset:container.offsetHeight/4 },
                animations: [{
                    property: 'strokeDashoffset',
                    unit: '',
                    minValue: 0,
                    maxValue: pathRealLength * -1,
                    speed: 0.2
                }],
                devMode: false
            })
        );

        aosInstances.push(
            animateOnScroll({
                triggerElement: section,
                element: svg,
                elementEnterTrigger: { position:'top', offset:0 },
                enterTrigger: { position:'top', offset:container.offsetHeight/4 },
                elementExitTrigger: { position:'bottom', offset:0 },
                exitTrigger: { position:'bottom', offset:container.offsetHeight/4 },
                animations: [{
                    property: 'transform',
                    from: `rotateX(${rotateX}deg) translateY(25%) scale(1.5) translateZ(5vh)`,
                    to: `rotateX(${rotateX}deg) translateY(-25%) scale(1) translateZ(-2vh)`,
                    speed: 0.2
                }],
                onInit: () => updateMarkers(),
                devMode: false
            })
        );
    }



    function initialize() {
        clearAnimations();
        initialiseSvgPath();
        section.style.height = (window.innerHeight * 3) + 'px';
        const total = path.getTotalLength();
        svgDots.forEach((dot,i) => {
            const { x, y } = path.getPointAtLength(total * fractions[i]);
            dot.setAttribute('cx', x);
            dot.setAttribute('cy', y);
        });
        updateMarkers();
        registerAnimations();
    }



    function debounce(fn, ms = 250) {
        let t;
        return (...args) => {
            clearTimeout(t);
            t = setTimeout(() => fn(...args), ms);
        };
    }



    createDots();
    initialize();



    window.addEventListener('scroll', startLoop);
    // window.addEventListener('resize', debounce(() => {
    //     if (rafId) cancelAnimationFrame(rafId);
    //     initialize();
    // }, 250));

});
