/* jshint esversion: 6 */

let htmlTheme = document.documentElement.dataset.theme;
let themeToggle = document.getElementById('theme-toggle');

function toggleTheme() {
    let currentThemeText = document.getElementById('current-theme').textContent;
    let theme = '';

    themeToggle.addEventListener('change', (event) => {

        if (event.target.checked) {
            theme = 'dark';
            console.log('theme is dark');
        } else {
            theme = 'light';
            console.log('theme is light');
        }
    });

    currentThemeText = theme;
    applyTheme(theme);
}

function applyTheme(theme) {
    console.log('applyTheme called: ' + theme);
    htmlTheme = theme;
}

export {toggleTheme};
