@if (isset($previous) || isset($next))
    <nav class="level previous-next">
        @if (isset($previous))
            @include('posts.partials.previous-next-link', [
                'direction' => 'Previous',
                'post' => $previous,
                'routeName' => "$subdomain.posts.show",
            ])
        @endif

        @if (isset($next))
            @include('posts.partials.previous-next-link', [
                'direction' => 'Next',
                'post' => $next,
                'routeName' => "$subdomain.posts.show",
            ])
        @endif
    </nav>
@endif
