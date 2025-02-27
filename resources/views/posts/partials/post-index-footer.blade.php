<footer class="post-footer post-index-footer">
    <address>
        <x-members.profile-link-component :user="$post->user" />
    </address>

    @include('posts.partials.post-created-at-time', [
        'post' => $post,
    ])

    <a class="button footer-button"
        href="{{ $post->present()->url }}#comments"
        title="{{ trans('Comments') }}">
        <x-icons.icon-component filename="chat" />
        {{ $post->comments()->count() > 0 ?: 0 }}
    </a>
</footer>
