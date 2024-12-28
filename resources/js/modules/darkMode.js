
const HTML = document.querySelector('html');

function toggleDarkMode(eventTarget) {
    const DARK_MODE_TOGGLE = eventTarget;

    const ARIA_PRESSED = 'aria-pressed';
    const DARK_MODE_CLASS = 'dark-mode';
    const DARK_MODE_ON_CLASS = 'dark-mode-on';
    const DARK_MODE_OFF_CLASS = 'dark-mode-off';

    const BODY = document.body;

    if (DARK_MODE_TOGGLE.getAttribute(ARIA_PRESSED) === 'false') {
        DARK_MODE_TOGGLE.setAttribute(ARIA_PRESSED, 'true');

        if (!BODY.classList.contains(DARK_MODE_CLASS)) {
            BODY.classList.add(DARK_MODE_CLASS);
        }

        if (!DARK_MODE_TOGGLE.classList.contains(DARK_MODE_OFF_CLASS)) {
            DARK_MODE_TOGGLE.classList.add(DARK_MODE_OFF_CLASS);
        }

        DARK_MODE_TOGGLE.classList.add(DARK_MODE_ON_CLASS);
    } else {
        DARK_MODE_TOGGLE.setAttribute(ARIA_PRESSED, 'false');

        if (BODY.classList.contains(DARK_MODE_CLASS)) {
            BODY.classList.remove(DARK_MODE_CLASS);
        }

        if (DARK_MODE_TOGGLE.classList.contains(DARK_MODE_ON_CLASS)) {
            DARK_MODE_TOGGLE.classList.remove(DARK_MODE_ON_CLASS);
        }

        DARK_MODE_TOGGLE.classList.add(DARK_MODE_OFF_CLASS);
    }
}


export {toggleDarkMode};
