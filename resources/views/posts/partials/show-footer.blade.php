<footer class="post-footer">
    Posted by
    <a href="#" title="View username's profile">
        username
    </a> at
    <time datetime="{{ $post->created_at->format('Y-m-d H:i:d') }}">
        {{ $post->created_at->format('g:i a') }}
    </time>
    -
    @if ($post->comments()->count() > 0)
        <a href="/{{ $post->id }}#comments">
            {{ $post->comments()->count() }}

            @if ($post->comments()->count() === 1)
                comment
            @else
                comments
            @endif
        </a>
    @else
        <a href="/{{ $post->id }}">
            no comments
        </a>
    @endif
</footer>
