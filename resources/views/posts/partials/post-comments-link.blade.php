<a href="{{ route("$subdomain.post.show", [
        'post' => $post,
        'slug' => $post->slug
    ]) }}#comments"
    class="button footer-button"
    title="Comments">
     <img src="{{ asset('images/icons/chat.svg') }}" class="icon" alt="">
    @if ($commentsCount > 0)
        {{ $commentsCount }}
    @else
        0
    @endif
</a>
