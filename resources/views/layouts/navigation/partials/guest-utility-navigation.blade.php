<ul id="utility-navigation-menu">
    <li>
        <a href="{{ route($loginCreateRoute) }}"
           @if (request()->segment(1) === 'login')
               aria-current="page"
            @endif>
            <span class="icon">
                <img src="{{ asset('images/icons/box-arrow-in-right.svg') }}" alt="">
            </span>
            {{ trans('Log In') }}
        </a>
    </li>
    <li>
        <a href="{{ route($registerCreateRoute) }}"
           @if (request()->segment(1) === 'register')
               aria-current="page"
            @endif>
            <span class="icon">
                <img src="{{ asset('images/icons/person-plus-fill.svg') }}" alt="">
            </span>
            {{ trans('Sign Up') }}
        </a>
    </li>
</ul>
