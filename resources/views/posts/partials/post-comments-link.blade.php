Context: {{ $context }}
@if ('context' === 'index')
    <a href="{{ route("$subdomain.posts.show", [
        'post' => $post,
        'slug' => $post->slug
    ]) }}#comments"
       title="Comments">
    {{-- {{ $commentsCount > 0 ?: 0 }} --}} comments
</a>
@elseif ('context' === 'show')
({{-- {{ $commentsCount > 0 ?: 0 }} --}}comments total)
@endif
