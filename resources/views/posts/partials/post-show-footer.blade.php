<footer class="post-footer post-show-footer">
    {{ trans('posted by') }}

    @include('posts.partials.profile-link', [
        'userId' => $post->user->id,
        'username' => $post->user->username,
    ])

    @if ($commentsCount === 0)
        ({{ trans('no comments') }})
    @else
        ({{ $commentsCount }}
        {{ Str::plural('comment', $commentsCount) }}
        {{ trans('total') }})
    @endif

    @if ($favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif
</footer>
