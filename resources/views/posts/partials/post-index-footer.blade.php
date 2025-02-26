<footer class="post-footer post-index-footer">
    <address>
        <a title="View {{ $post->user->username }}'s profile"
           href="/members/{{ $post->user->id }}">
            @if ($post->user->id === auth()->id())
                <x-icons.icon-component filename="person-fill" />
            @else
                <x-icons.icon-component filename="person" />
            @endif
            {{ $post->user->username }}
        </a>
    </address>

    @include('posts.partials.post-created-at-time', [
        'post' => $post,
    ])

    <a class="button footer-button"
        href="{{ $post->present()->url }}#comments"
        title="Comments">
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </a>
</footer>
