<nav class="global-navigation navbar-menu"
     id="global-navigation"
     aria-label="Global navigation"
     aria-labelledby="global-navigation-toggle">
    <div class="container level">
        {!! $globalNavigation ?? 'Global navigation unavailable' !!}

        <livewire:search.search-component />
    </div>
</nav>

