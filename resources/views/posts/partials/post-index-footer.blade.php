<footer class="post-footer">
    <div class="level">
        <div>
            {{ __('posted by') }}

            @include('posts.partials.profile-link', [
                'userId' => $userId,
                'username' => $username,
            ])
            at {{ $post->created_at->format('g:i a') }} -
        </div>

        <a href="{{ route("$subdomain.post.show", [
                'post' => $post,
                'slug' => $post->slug
            ]) }}#comments"
            title="Comments">
            {{ $commentsCount > 0 ?: 0 }} comments
        </a>
    </div>
</footer>

{{--
posted by thecincinnatikid at 1:44 PM - 2 comments
--}}
