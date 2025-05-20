const ready = (callback) => {
    if (document.readyState !== "loading") {
        callback();
    }
    else {
        document.addEventListener("DOMContentLoaded", callback);
    }
}

ready(() => {


})









function animateOnScroll({
     triggerElement,
     element = triggerElement,
     elementEnterTrigger,
     elementExitTrigger,
     enterTrigger,
     exitTrigger,
     animations,
     onInit = null,
     devMode = false,
 }) {

    const scrollEl = typeof triggerElement === 'string' ? document.querySelector(triggerElement) : triggerElement;
    if (!scrollEl || !(scrollEl instanceof Element)) {
        console.error('animateOnScroll: invalid triggerElement', triggerElement);
        return;
    }
    const targetEl = typeof element === 'string' ? document.querySelector(element) : element;
    if (!targetEl || !(targetEl instanceof Element)) {
        console.error('animateOnScroll: invalid element', element);
        return;
    }
    if (!Array.isArray(animations) || animations.length === 0) {
        console.error('animateOnScroll: animations array required');
        return;
    }


    const getScrollY = () => window.scrollY || document.documentElement.scrollTop;
    const clamp = (v, min, max) => (v < min ? min : v > max ? max : v);
    const resolvePoint = (rect, { position, offset }) =>
        position === 'top'    ? rect.top + offset :
            position === 'middle' ? rect.top + rect.height / 2 + offset :
                rect.bottom + offset;
    const viewportLine = ({ position, offset }) =>
        position === 'top'    ? offset :
            position === 'middle' ? window.innerHeight / 2 + offset :
                window.innerHeight + offset;


    const numRe = /([-+]?\d*\.?\d+)([a-z%]*)/gi;
    function makeInterpolator(from, to) {
        const fm = Array.from(from.matchAll(numRe));
        const tm = Array.from(to.matchAll(numRe));
        if (fm.length !== tm.length) throw new Error('animateOnScroll: from/to mismatch');
        const tokens = fm.map((m, i) => {
            const unit = m[2];
            if (unit !== tm[i][2]) throw new Error('animateOnScroll: unit mismatch');
            return { start: parseFloat(m[1]), end: parseFloat(tm[i][1]), unit };
        });
        return progress => {
            let idx = 0;
            return from.replace(numRe, () => {
                const { start, end, unit } = tokens[idx++];
                const val = start + (end - start) * progress;
                return val + unit;
            });
        };
    }


    const descriptors = animations.map(anim => {
        if (anim.from != null && anim.to != null) {
            return {
                property: anim.property,
                speed:    anim.speed ?? 0.1,
                interpolate: makeInterpolator(anim.from, anim.to),
                progress: 0
            };
        }
        const { minValue, maxValue, unit = '' } = anim;
        return {
            property: anim.property,
            speed:    anim.speed ?? 0.1,
            interpolate: p => `${minValue + (maxValue - minValue) * p}${unit}`,
            progress: 0
        };
    });


    let bounds = { start: 0, end: 0 };
    let rafId = null;
    const debugLines = {};


    if (devMode) {
        ['enterVP','exitVP','enterEL','exitEL'].forEach(key => {
            const line = document.createElement('div');
            Object.assign(line.style, {
                position: 'fixed', left: 0, width: '100%', height: '2px', pointerEvents: 'none', opacity: 0.5, zIndex: 9999,
                background: key.endsWith('VP') ? 'orange' : 'green'
            });
            document.body.appendChild(line);
            debugLines[key] = line;
        });
    }

    // Compute scroll bounds
    function updateBounds() {
        const sy = getScrollY();
        const rect = scrollEl.getBoundingClientRect();
        const vpStart = viewportLine(enterTrigger);
        const vpEnd = viewportLine(exitTrigger);
        const elStart = sy + resolvePoint(rect, elementEnterTrigger);
        const elEnd = sy + resolvePoint(rect, elementExitTrigger);
        bounds.start = elStart - vpStart;
        bounds.end = elEnd   - vpEnd;
        if (devMode) updateDebugLines(rect);
    }

    function updateDebugLines(rect) {
        debugLines.enterVP.style.top = viewportLine(enterTrigger) + 'px';
        debugLines.exitVP.style.top  = viewportLine(exitTrigger)  + 'px';
        debugLines.enterEL.style.top = resolvePoint(rect, elementEnterTrigger) + 'px';
        debugLines.exitEL.style.top  = resolvePoint(rect, elementExitTrigger)  + 'px';
    }

    // Animation frame
    function animateFrame() {
        const sy = getScrollY();
        const raw = (sy - bounds.start) / (bounds.end - bounds.start);
        const prog = clamp(raw, 0, 1);
        let keepGoing = false;
        descriptors.forEach(desc => {
            desc.progress += (prog - desc.progress) * desc.speed;
            if (Math.abs(desc.progress - prog) > 0.001) keepGoing = true;
            targetEl.style[desc.property] = desc.interpolate(desc.progress);
        });
        rafId = keepGoing ? requestAnimationFrame(animateFrame) : null;
    }

    // Scroll handler
    function onScroll() {
        updateBounds();
        const sy = getScrollY();
        const raw = (sy - bounds.start) / (bounds.end - bounds.start);
        if (raw < 0 || raw > 1) {
            const snap = clamp(raw, 0, 1);
            descriptors.forEach(desc => {
                desc.progress = snap;
                targetEl.style[desc.property] = desc.interpolate(snap);
            });
            if (rafId) { cancelAnimationFrame(rafId); rafId = null; }
        } else if (!rafId) {
            rafId = requestAnimationFrame(animateFrame);
        }
    }


    function onResize() {
        updateBounds();
        if (!rafId) rafId = requestAnimationFrame(animateFrame);
    }


    updateBounds();
    (function init() {
        const raw0 = (getScrollY() - bounds.start) / (bounds.end - bounds.start);
        const prog0 = clamp(raw0, 0, 1);
        descriptors.forEach(desc => {
            desc.progress = prog0;
            targetEl.style[desc.property] = desc.interpolate(prog0);
        });
        if (typeof onInit === 'function') onInit(prog0);
    })();

    window.addEventListener('scroll', onScroll);
    window.addEventListener('resize', onResize);
    onScroll();

    return {
        destroy() {
            window.removeEventListener('scroll', onScroll);
            window.removeEventListener('resize', onResize);
            if (rafId) cancelAnimationFrame(rafId);
            if (devMode) Object.values(debugLines).forEach(l => l.remove());
        }
    };
}














function isOrInClass(el, className) {

    let parent;

    if (el.classList.contains(className)) {
        return el;
    } else {
        parent = el.parentElement;

        while (parent) {
            if (parent.classList.contains(className)) {
                return parent;
            }
            parent = parent.parentElement;
        }

        return null;
    }

}


function isOrInId(el, id) {
    while (el) {
        if (el.id === id) {
            return el;
        }
        el = el.parentElement;
    }
    return null;
}





