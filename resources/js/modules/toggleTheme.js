/* jshint esversion: 6 */

function toggleTheme() {
    document.addEventListener('DOMContentLoaded', function () {
        console.log('toggleTheme loaded');
        let colorScheme = document.getElementById('color-scheme');
        let currentTheme = document.getElementById('current-theme').innerText;

        const themeToggle = document.getElementById('theme-toggle');
        const savedTheme = localStorage.getItem('color-scheme') || 'light';

        colorScheme.setAttribute('content', savedTheme);

        themeToggle.checked = savedTheme === 'dark';

        themeToggle.addEventListener('change', function () {
            console.log('toggleTheme clicked');
            const newTheme = themeToggle.checked ? 'dark' : 'light';
            console.log('newTheme: ', newTheme);

            currentTheme = newTheme;

            colorScheme.setAttribute('content', savedTheme);

            colorScheme = newTheme;

            localStorage.setItem('color-scheme', newTheme);
        });
    });
}

export {toggleTheme};
