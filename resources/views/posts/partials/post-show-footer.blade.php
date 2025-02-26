<footer class="post-footer post-show-footer">
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

    <span>
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </span>

    @if (isset($favoritesCount) && $favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif

    @if (isset($canonicalUrl))
        <x-buttons.copy-url-button url="{{ $canonicalUrl }}" />
    @endif
</footer>

@auth()
    @include('posts.partials.post-admin-footer')
@endauth
