//https://stackoverflow.com/a/39914235
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  

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
async function fadeToLeft(element, timeout){
    const timeoutHandler = () => element.remove();

    element.style.animationDuration = timeout + "ms";
    element.style.animationFillMode = "forwards";
    element.style.animationName = "fadetoleft";

    setTimeout(timeoutHandler,timeout)
    await sleep(timeout);
    return;
}

/**
 * @param {Element} parent
 * @param {string} innerHTML 
 * @param {number} timeout
 * 
 * Append a H3 element tag with the given innerHTML to the parent element, with a fade-in animation.
 * 
 */
async function addH3fadeIn(parent,innerHTML,timeout){
    const el = document.createElement("h3");

    el.classList.add("fade-in");
    el.style.animationDuration = timeout + "ms";
    el.innerHTML = innerHTML;

    parent.appendChild(el);

    await sleep(timeout);
    return;
}