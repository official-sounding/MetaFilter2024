<footer class="post-footer post-show-footer">
    <x-members.profile-link-component :user="$post->user" />

    <span>
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </span>

    @if (isset($favoritesCount) && $favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif

    <x-buttons.copy-url-button url="{{ $canonicalUrl }}" />
</footer>
