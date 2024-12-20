<nav class="utility-navigation" id="utility-navigation">
    @auth
        {!! $utilityNavigation ?? 'Utility navigation unavailable' !!}
    @endauth
    @guest
    @endguest
</nav>
