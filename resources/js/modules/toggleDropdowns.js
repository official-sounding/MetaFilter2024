/* jshint esversion: 6 */

function closeDropdown(toggleId) {
    let toggle = document.querySelector('#' + toggleId);

    toggleDropdown(toggle);
}

function toggleDropdown(toggle) {
    let expanded = toggle.getAttribute('aria-expanded');

    if (expanded === 'false') {
        toggle.setAttribute('aria-expanded', 'true')
    } else {
        toggle.setAttribute('aria-expanded', 'false')
    }

    let dropdown = document.querySelector('#' + toggle.getAttribute('aria-controls'));

    dropdown.classList.toggle('expanded');
}

function toggleDropdowns() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function handleClick(event) {
            toggleDropdown(toggle);
        });
    });
}

export {toggleDropdowns};
