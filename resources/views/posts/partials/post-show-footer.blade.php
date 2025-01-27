<footer class="post-footer post-show-footer">
    {{ trans('posted by') }}

    @include('posts.partials.profile-link', [
        'userId' => $post->user->id,
        'username' => $post->user->username,
    ]) -

    @if ($commentsCount === 0)
        &lpar;{{ trans('no comments') }}&rpar;
    @else
        &lpar;{{ $commentsCount }} {{ Str::plural('comment', $commentsCount) }}&rpar;
    @endif

    @if (isset($favoritesCount) && $favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif
</footer>
