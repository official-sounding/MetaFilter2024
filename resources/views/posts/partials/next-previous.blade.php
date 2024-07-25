<div class="row">
    @if ($previous)
        {{-- TODO: Get subdomain show route --}}
        <a href="{{ route('metafilter.post.show', $previous->slug) }}" title="View the previous post">
            {{ $previous->title }}
        </a>
    @endif
    @if ($next)
        <a href="{{ route('metafilter.post.show', $next->slug) }}" title="View the next post">
            {{ $next->title }}
        </a>
    @endif
</div>
