@if (isset($previous))
    <link
        rel="prev"
        href="{{ route("$subdomain.posts.show", [
            'post' => $previous,
            'slug' => $previous->slug
        ]) }}">
@endif
@if (isset($next))
    <link
        rel="next"
        href="{{ route("$subdomain.posts.show", [
            'post' => $next,
            'slug' => $next->slug
        ]) }}">
@endif
