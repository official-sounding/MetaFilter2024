<nav class="level">
    <div class="level-left">
        @if ($previous)
            <a href="{{ route("$subdomain.post.show", $previous->id) }}"
               class="level-item"
               title="View the previous post">
                {{ $previous->title }}
            </a>
        @endif
    </div>

    <div class="level-right">
        @if ($next)
            <a href="{{ route("$subdomain.post.show", $next->id) }}"
               class="level-item"
               title="View the next post">
                {{ $next->title }}
            </a>
        @endif
    </div>
</nav>
