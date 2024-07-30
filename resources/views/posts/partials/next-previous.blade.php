<nav class="level">
    <div class="level-left">
        @if (isset($previous))
            <a class="level-item"
               title="View the previous post"
               href="{{ route("$subdomain.post.show", [
                    'post' => $previous,
                    'slug' => $previous->slug
               ]) }}">
                {{ $previous->title }}
            </a>
        @endif
    </div>

    <div class="level-right">
        @if (isset($next))
            <a class="level-item"
                title="View the next post"
                href="{{ route("$subdomain.post.show", [
                    'post' => $next,
                    'slug' => $next->slug
                ]) }}">
                {{ $next->title }}
            </a>
        @endif
    </div>
</nav>
