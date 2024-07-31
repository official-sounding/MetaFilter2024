<nav class="navbar-menu" id="utility-navigation">
    <div class="navbar-end">
        @auth
            {!! $utilityNavigation ?? 'Utility navigation unavailable' !!}
        @endauth
        @guest
            <a href="{{ route($loginCreateRoute) }}"
               class="navbar-item"
               @if (request()->segment(1) === 'login')
                   aria-current="page"
               @endif>
               <img src="{{ asset('images/icons/box-arrow-in-right.svg') }}" class="icon" role="img" alt="">
               Log In
            </a>

            <a href="{{ route($registerCreateRoute) }}"
               class="navbar-item"
               @if (request()->segment(1) === 'register')
                   aria-current="page"
               @endif>
               <img src="{{ asset('images/icons/person-fill.svg') }}" class="icon" role="img" alt="">
               Sign Up
            </a>
        @endguest
    </div>
</nav>
