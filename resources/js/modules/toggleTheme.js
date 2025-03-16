/* jshint esversion: 6 */

function toggleTheme() {
    document.addEventListener('DOMContentLoaded', function () {
        let colorScheme = document.getElementById('color-scheme');

        const themeToggle = document.getElementById('theme-toggle');
        const savedTheme = localStorage.getItem('color-scheme') || 'light';

        colorScheme.setAttribute('content', savedTheme);

        themeToggle.checked = savedTheme === 'dark';

        themeToggle.addEventListener('change', function () {
            console.log('toggleTheme clicked');
            const newTheme = themeToggle.checked ? 'dark' : 'light';
            console.log('newTheme: ', newTheme);

            colorScheme.setAttribute('content', savedTheme);

            colorScheme = newTheme;

            localStorage.setItem('color-scheme', newTheme);
        });
    });
}

export {toggleTheme};
