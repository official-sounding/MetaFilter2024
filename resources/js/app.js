import './bootstrap';

import {toggleDarkMode} from './modules/darkMode.js';
import {toggleDropdown} from "./modules/toggleDropdowns.js";

document.addEventListener('click', event => {
    if (event.target.classList.contains('dark-mode-toggle')) {
        toggleDarkMode();
    }

    if (event.target.classList.contains('dropdown-toggle')) {
        toggleDropdown(event.target);
    }
}, false);
