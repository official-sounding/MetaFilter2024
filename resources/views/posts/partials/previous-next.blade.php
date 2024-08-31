<nav class="previous-next">
    @if (isset($previous))
        <div class="previous">
            <a title="View the previous post"
               href="{{ route("$subdomain.post.show", [
                    'post' => $previous,
                    'slug' => $previous->slug
               ]) }}">
                {{ $previous->title }}
            </a>
        </div>
    @endif

    @if (isset($next))
        <div class="next">
            <a title="View the next post"
                href="{{ route("$subdomain.post.show", [
                    'post' => $next,
                    'slug' => $next->slug
                ]) }}">
                {{ $next->title }}
            </a>
        </div>
    @endif
</nav>
