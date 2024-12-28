Context: {{ $context }}
@if ('context' === 'index')
    ho
    <a href="{{ route("$subdomain.post.show", [
        'post' => $post,
        'slug' => $post->slug
    ]) }}#comments"
       title="Comments">
        {{ $commentsCount > 0 ?: 0 }} comments
    </a>
@elseif ('context' === 'show')
    yo
    ({{ $commentsCount > 0 ?: 0 }} comments total)
@endif
