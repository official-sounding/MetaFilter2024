<footer class="post-footer post-index-footer">
    @include('posts.partials.profile-link', [
        'userId' => $userId,
        'username' => $username,
    ])

    <span>
        <x-icons.icon-component filename="clock" />
        {{ $post->created_at->format('g:i a') }}
    </span>

    <a class="button footer-button"
        href="{{ route("$subdomain.post.show", [
            'post' => $post,
            'slug' => $post->slug
        ]) }}#comments"
        title="Comments">
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </a>
</footer>
