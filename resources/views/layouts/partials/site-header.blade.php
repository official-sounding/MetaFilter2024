<header class="site-header">
    <div class="container">
        <button
            id="global-navigation-toggle"
            class="icon-menu dropdown-toggle button"
            title="Toggle navigation menu"
            aria-label="Toggle global navigation menu"
            aria-expanded="false"
            aria-controls="global-navigation"
            tabindex="0"></button>

        @include('layouts.partials.site-title')

        <button
            id="utility-navigation-toggle"
            class="icon-user dropdown-toggle button"
            title="Toggle user menu"
            aria-label="Toggle user menu"
            aria-expanded="false"
            aria-controls="utility-navigation"
            tabindex="0"></button>

        @include('layouts.navigation.utility-navigation')
    </div>
</header>
