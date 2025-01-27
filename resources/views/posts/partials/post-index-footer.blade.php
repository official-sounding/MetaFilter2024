<footer class="post-footer post-index-footer">
    {{ trans('posted by') }}

    @include('posts.partials.profile-link', [
        'userId' => $userId,
        'username' => $username,
    ])
    at {{ $post->created_at->format('g:i a') }} -

    <a href="{{ route("$subdomain.post.show", [
            'post' => $post,
            'slug' => $post->slug
        ]) }}#comments"
        title="Comments">
{{-- {{ $commentsCount > 0 ?: 0 }} --}} comments
</a>
</footer>
