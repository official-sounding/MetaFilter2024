/* jshint esversion: 6 */

import constant from '../constants.js';

function toggleDropdowns() {
    const dropdownToggles = document.getElementsByClassName('dropdown-toggle')

    for (let i = 0; i < dropdownToggles.length; i++) {
        let toggle = dropdownToggles[i];

        toggle.addEventListener('click', (event) => {
            let target = event.currentTarget;

            let controls = getControls(target);
            let expanded = getExpanded(target);

            let dropdown = document.getElementById(controls);

            if (expanded) {
                hideDropdown(target, dropdown);
            } else {
                showDropdown(target, dropdown);
            }
        })

        window.addEventListener('click', function(event) {
            if (!toggle.contains(event.target)) {
            }
        });
    }
}

function toggleDropdown(target) {
    let controls = getControls(target);
    let expanded = getExpanded(target);

    let dropdown = document.getElementById(controls);

    if (expanded) {
        hideDropdown(target, dropdown);
    } else {
        showDropdown(target, dropdown);
    }
}

function getControls(target) {
    return target.getAttribute(constant.ARIA_CONTROLS);
}

function getExpanded(target) {
    return target.getAttribute(constant.ARIA_EXPANDED) === 'true' || false;
}

function showDropdown(target, dropdown) {
    target.setAttribute(constant.ARIA_EXPANDED, 'true');

    dropdown.removeAttribute(constant.ARIA_HIDDEN);
}

function hideDropdown(target, dropdown) {
    target.setAttribute(constant.ARIA_EXPANDED, 'false');

    dropdown.setAttribute(constant.ARIA_HIDDEN, 'true');
}

export {getExpanded, toggleDropdown, toggleDropdowns};
