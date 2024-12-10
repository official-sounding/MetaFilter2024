import './bootstrap';

import Alpine from 'alpinejs';
import Precognition from 'laravel-precognition-alpine';

import {getExpanded, toggleDropdown} from './modules/toggleDropdowns.js';
import {toggleDarkMode} from './modules/darkMode.js';

const darkModeToggle = document.getElementById('dark-mode-toggle');
const globalNavigationToggle = document.getElementById('global-navigation-toggle');
const utilityNavigationToggle = document.getElementById('flyout-example');

window.Alpine = Alpine;

Alpine.plugin(Precognition);
Alpine.start();

document.addEventListener('click', event => {
    console.log('Click event listener');

    let eventTarget = event.target;

    if (eventTarget === darkModeToggle) {
        toggleDarkMode(eventTarget);
    }

    let globalNavigationExpanded = getExpanded(globalNavigationToggle);
    let utilityNavigationExpanded = false;

    if (utilityNavigationToggle !== null) {
        utilityNavigationExpanded = getExpanded(utilityNavigationToggle);
    }

    do {
        if (eventTarget === globalNavigationToggle || eventTarget === utilityNavigationToggle) {
            console.log('Clicked inside!');
            toggleDropdown(eventTarget);
        }

        eventTarget = eventTarget.parentNode;
    } while (eventTarget);


    if (globalNavigationExpanded) {
        toggleDropdown(globalNavigationToggle);
    }

    if (utilityNavigationExpanded) {
        toggleDropdown(utilityNavigationToggle);
    }

    console.log('Clicked outside!');
}, false);
