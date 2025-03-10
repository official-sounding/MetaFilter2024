/* jshint esversion: 6 */

const colorSchemeToggle = document.getElementById('color-scheme-toggle');
let prefersDark =  window.matchMedia('(prefers-color-scheme: dark)');
let newTheme;

function setTheme(newTheme) {
    let pressed = newTheme === 'dark' ? 'true' : 'false';

    document.documentElement.setAttribute('data-theme-preference', newTheme);

    localStorage.setItem('theme-preference', newTheme);
}

if (localStorage.getItem('theme-preference')) {
    newTheme = localStorage.getItem('theme-preference');
} else if (prefersDark.matches) {
    newTheme = 'dark';
} else {
    newTheme = 'light';
}

colorSchemeToggle.addEventListener('click', function(event) {
    newTheme = document.documentElement.getAttribute('data-theme-preference') === 'dark' ? 'light' : 'dark';

    setTheme(newTheme);
});

prefersDark.addEventListener('change', function(event) {
    newTheme = event.matches ? 'dark' : 'light';

    setTheme(newTheme);
});

export {toggleColorScheme};
