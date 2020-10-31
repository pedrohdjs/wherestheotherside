/**
 * 
 * @param {Element} element 
 * @param {number} timeout 
 * 
 * Fade an element to left and then remove it from the DOM.
 * 
 * Note: I am aware this can easily be done with jQuery, but, I'm only including jQuery in this
 * project's dependencies because of Bootstrap.
 */
function fadeToLeft(element, timeout){
    const timeoutHandler = () => element.remove();
    element.style.animationDuration = timeout + "ms";
    element.style.animationFillMode = "forwards";
    element.style.animationName = "fadeleft";
    setTimeout(timeoutHandler,timeout)
    return;
}