/* jshint esversion: 6 */

let currentTheme = document.getElementById('current-theme').textContent;
let htmlTheme = document.documentElement.dataset.theme;

function getTheme() {
    return htmlTheme;
}

function toggleTheme() {
    let theme = getTheme();

    if (theme === 'light') {
        htmlTheme = 'dark';
    } else {
        htmlTheme = 'light';
    }

    applyTheme(htmlTheme);
}

function applyTheme(theme) {
    currentTheme = theme;
    htmlTheme = theme;
}

export {toggleTheme};
