<nav class="level previous-next">
    @if (isset($previous))
        <a class="previous"
           title="Previous post"
           href="{{ route("$subdomain.post.show", [
                'post' => $previous,
                'slug' => $previous->slug
           ]) }}">
            Previous
            <span class="title">
                {{ $previous->title }}
            </span>
        </a>
    @endif

    @if (isset($next))
        <a class="next"
           title="Next post"
            href="{{ route("$subdomain.post.show", [
                'post' => $next,
                'slug' => $next->slug
            ]) }}">
            Next
            <span class="title">
                {{ $next->title }}
            </span>
        </a>
    @endif
</nav>
