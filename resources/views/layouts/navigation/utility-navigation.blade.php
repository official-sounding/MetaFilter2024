<nav class="utility-navigation navbar-menu"
     id="utility-navigation"
     aria-hidden="true"
     aria-label="Utility navigation"
     aria-labelledby="utility-navigation-toggle">
    @auth
        {!! $utilityNavigation ?? 'Utility navigation unavailable' !!}
    @endauth
    @guest
        <ul class="dropdown">
            <li>
                <a href="{{ route($loginCreateRoute) }}"
                   @if (request()->segment(1) === 'login')
                       aria-current="page"
                   @endif>
                   <img src="{{ asset('images/icons/box-arrow-in-right.svg') }}" class="icon" role="img" alt="">
                   Log In
                </a>
            </li>
            <li>
                <a href="{{ route($registerCreateRoute) }}"
                   @if (request()->segment(1) === 'register')
                       aria-current="page"
                   @endif>
                   <img src="{{ asset('images/icons/person-plus-fill.svg') }}" class="icon" role="img" alt="">
                   Sign Up
                </a>
            </li>
        </ul>
    @endguest
</nav>
