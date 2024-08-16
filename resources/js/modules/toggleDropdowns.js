/* jshint esversion: 6 */

import constant from '../constants.js';

function toggleExpanded(target) {
    let controls = target.getAttribute(constant.ARIA_CONTROLS);
    let dropdown = document.getElementById(controls);

    let expanded = target.getAttribute(constant.ARIA_EXPANDED) === 'true' || false;

    if (expanded) {
        target.setAttribute(constant.ARIA_EXPANDED, 'false');

        dropdown.setAttribute(constant.ARIA_HIDDEN, 'true');
    } else {
        target.setAttribute(constant.ARIA_EXPANDED, 'true');

        dropdown.removeAttribute(constant.ARIA_HIDDEN);
    }
}

export {toggleExpanded};
