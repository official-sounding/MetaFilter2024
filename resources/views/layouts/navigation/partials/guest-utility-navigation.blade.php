<ul id="utility-navigation-menu">
    <li>
        <a href="{{ session('loginCreateRoute') }}"
           @if (request()->segment(1) === 'login')
               aria-current="page"
            @endif>
            <img src="{{ asset('images/icons/box-arrow-in-right.svg') }}" class="icon" alt="">
            {{ __('Log In') }}
        </a>
    </li>
    <li>
        <a href="{{ session('registerCreateRoute') }}"
           @if (request()->segment(1) === 'register')
               aria-current="page"
            @endif>
            <img src="{{ asset('images/icons/person-plus-fill.svg') }}" class="icon" alt="">
            {{ __('Sign Up') }}
        </a>
    </li>
</ul>
