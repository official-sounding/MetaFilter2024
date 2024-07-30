
function toggleDarkMode() {
    const ARIA_PRESSED = 'aria-pressed';
    const DARK_MODE_CLASS = 'dark-mode';
    const DARK_MODE_ON_CLASS = 'dark-mode-on';
    const DARK_MODE_OFF_CLASS = 'dark-mode-off';
    const DARK_MODE_TOGGLE = document.getElementById('dark-mode-toggle');

    if (DARK_MODE_TOGGLE.getAttribute(ARIA_PRESSED) === 'false') {
        DARK_MODE_TOGGLE.setAttribute(ARIA_PRESSED, 'true');

        if (!document.body.classList.contains(DARK_MODE_CLASS)) {
            document.body.classList.add(DARK_MODE_CLASS);
        }

        if (!DARK_MODE_TOGGLE.classList.contains(DARK_MODE_OFF_CLASS)) {
            DARK_MODE_TOGGLE.classList.add(DARK_MODE_OFF_CLASS);
        }

        DARK_MODE_TOGGLE.classList.add(DARK_MODE_ON_CLASS);
    } else {
        DARK_MODE_TOGGLE.setAttribute(ARIA_PRESSED, 'false');

        if (document.body.classList.contains(DARK_MODE_CLASS)) {
            document.body.classList.remove(DARK_MODE_CLASS);
        }

        if (DARK_MODE_TOGGLE.classList.contains(DARK_MODE_ON_CLASS)) {
            DARK_MODE_TOGGLE.classList.remove(DARK_MODE_ON_CLASS);
        }

        DARK_MODE_TOGGLE.classList.add(DARK_MODE_OFF_CLASS);
    }
}

export {toggleDarkMode};
