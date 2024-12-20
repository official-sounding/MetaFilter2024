<header class="navbar site-header">
    <div class="container level">
        <button
            id="global-navigation-toggle"
            class="dropdown-toggle"
            aria-controls="global-navigation"
            aria-haspopup="true"
            aria-expanded="false"asd;
            aria-label="MetaFilter sites"
            tabindex="0"
            title="MetaFilter sites">
            <img src="{{ asset('images/icons/list.svg') }}"
                 class="icon"
                 alt="">
        </button>

        @include('layouts.navigation.global-navigation')

        @include('layouts.partials.site-title')

        @include('layouts.navigation.utility-navigation')
    </div>
</header>
