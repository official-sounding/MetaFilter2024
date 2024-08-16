<header class="navbar site-header">
    <div class="container">
        <button
            id="global-navigation-toggle"
            class="dropdown-toggle"
            aria-controls="global-navigation"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="Navigation menu"
            tabindex="0"
            title="MetaFilter sites">
            <img src="{{ asset('images/icons/list.svg') }}"
                 class="icon"
                 role="img"
                 alt="">
        </button>

        @include('layouts.navigation.global-navigation')

        @include('layouts.partials.site-title')

        <button
            id="utility-navigation-toggle"
            class="dropdown-toggle"
            aria-controls="utility-navigation"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="Utility menu"
            tabindex="0">
            <img src="{{ asset('images/icons/person-fill.svg') }}"
                 class="icon"
                 role="img"
                 alt="">
        </button>

        @include('layouts.navigation.utility-navigation')
    </div>
</header>
