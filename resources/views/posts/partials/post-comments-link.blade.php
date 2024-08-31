<a href="{{ route("$subdomain.post.show", [
        'post' => $post,
        'slug' => $post->slug
    ]) }}#comments" class="footer-button">
    <img src="{{ asset('images/icons/chat.svg') }}" class="icon" role="img" alt="">
    @if ($post->comments()->count() > 0)
        {{ $post->comments()->count() }}
    @else
        0
    @endif
</a>
