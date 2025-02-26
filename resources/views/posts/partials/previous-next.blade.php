@if (isset($previous) || isset($next))
    <nav class="level previous-next">
        @if (isset($previous))
            @include('posts.partials.previous-next-link', [
                'direction' => 'Previous',
                'post' => $previous,
                'routeName' => "$subdomain.post.show",
            ])
        @endif

        @if (isset($next))
            @include('posts.partials.previous-next-link', [
                'direction' => 'Next',
                'post' => $next,
                'routeName' => "$subdomain.post.show",
            ])
        @endif
    </nav>
@endif
