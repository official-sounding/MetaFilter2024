<label class="toggle">
    <button
        class="color-scheme-toggle"
        id="color-scheme-toggle"
        aria-pressed="false"
        type="button">
        <span class="current-color-scheme">
            {{ trans('Dark mode') }}
        </span>
    </button>
</label>

<script>
    const colorSchemeToggle = document.getElementById('color-scheme-toggle');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');

    let newTheme;

    function setTheme(newTheme) {
        let pressed = newTheme === 'dark' ? 'true' : 'false';

        colorSchemeToggle.setAttribute('aria-pressed', pressed);

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

    colorSchemeToggle.addEventListener('click', function() {
        newTheme = document.documentElement.getAttribute('data-theme-preference') === 'dark' ? 'light' : 'dark';

        setTheme(newTheme);
    });

    prefersDark.addEventListener('change', function(event) {
        newTheme = event.matches ? 'dark' : 'light';

        setTheme(newTheme);
    });
</script>
