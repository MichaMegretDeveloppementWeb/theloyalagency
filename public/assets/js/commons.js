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





