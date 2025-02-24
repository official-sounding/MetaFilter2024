<footer class="post-footer post-index-footer">
    <x-members.profile-link-component :user="$post->user" />

    <span>
        <x-icons.icon-component filename="clock" />
        {{ $post->created_at->format('g:i a') }}
    </span>

    <a class="button footer-button"
        href="{{ $post->present()->url }}#comments"
        title="Comments">
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </a>
</footer>
