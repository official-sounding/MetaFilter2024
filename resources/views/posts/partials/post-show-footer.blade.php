<footer class="post-footer post-show-footer">
    @include('posts.partials.profile-link', [
        'userId' => $post->user->id,
        'username' => $post->user->username,
    ])

    <span>
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </span>

    @if (isset($favoritesCount) && $favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif
</footer>
