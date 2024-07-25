<nav class="utility-navigation navbar" id="utility-navigation" aria-label="Utility navigation">
    <ul class="navbar-menu" id="utility-navbar-menu">
        @auth
            {!! $utilityNavigation ?? 'Utility navigation unavailable' !!}
        @endauth
        @guest
            <li>
                <a href="{{ route($loginCreateRoute) }}"
                   class="icon-login"
                   @if (request()->segment(1) === 'login')
                       aria-current="page"
                    @endif>
                    Log In
                </a>
            </li>
            <li>
                <a href="{{ route($registerCreateRoute) }}"
                   class="icon-user"
                   @if (request()->segment(1) === 'register')
                       aria-current="page"
                    @endif>
                    Register
                </a>
            </li>
        @endguest
    </ul>
</nav>
