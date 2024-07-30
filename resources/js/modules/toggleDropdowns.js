
function toggleDropdown(target) {
    const ARIA_CONTROLS = 'aria-controls';
    const ARIA_EXPANDED = 'aria-expanded';
    const ARIA_HIDDEN = 'aria-hidden';

    let controls = target.getAttribute(ARIA_CONTROLS);
    let dropdownMenu = document.getElementById(controls);

    let expanded = target.getAttribute(ARIA_EXPANDED) === 'true' || false;

    if (expanded) {
        target.setAttribute(ARIA_EXPANDED, 'false');

        dropdownMenu.setAttribute(ARIA_HIDDEN, 'true');
    } else {
        target.setAttribute(ARIA_EXPANDED, 'true');

        dropdownMenu.removeAttribute(ARIA_HIDDEN);
    }

    console.log('Toggling dropdown...');
    console.log(controls);
}

export {toggleDropdown};
