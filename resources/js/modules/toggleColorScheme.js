/* jshint esversion: 6 */

(function(){
    'use strict';

    const HTML = document.querySelector('html');

    function getThemeFromStorage() {
        return localStorage.getItem('theme') || 'light';
    }

    function storeTheme(theme) {
        localStorage.setItem('theme', theme);
    }

    function toggleColorScheme(mode) {
        HTML.style.setProperty('color-scheme', mode === 'auto' ? 'light dark' : mode);
    }
    function applyTheme(theme) {
        document.documentElement.dataset.theme = theme;
    }
})();

export {toggleColorScheme};
