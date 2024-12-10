<header class="navbar site-header">
    <div class="container">
        <button
            id="global-navigation-toggle"
            class="dropdown-toggle"
            aria-controls="global-navigation"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="MetaFilter sites"
            tabindex="0"
            title="MetaFilter sites">
            <img src="{{ asset('images/icons/list.svg') }}"
                 class="icon"
                 role="img"
                 alt="">
        </button>

        @include('layouts.navigation.global-navigation')

        <div class="level">
            @include('layouts.partials.site-title')
            @include('livewire.search.search-component')
        </div>

        @include('layouts.navigation.utility-navigation')
    </div>
</header>
