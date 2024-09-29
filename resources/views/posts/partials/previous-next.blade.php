<nav class="level previous-next">
    @if (isset($previous))
        <div class="previous">
            <a title="Previous post"
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
            <a title="Next post"
                href="{{ route("$subdomain.post.show", [
                    'post' => $next,
                    'slug' => $next->slug
                ]) }}">
                {{ $next->title }}
            </a>
        </div>
    @endif
</nav>
