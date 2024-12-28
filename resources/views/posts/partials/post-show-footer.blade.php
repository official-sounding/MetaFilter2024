<footer class="post-footer">
    <div class="level">
        <div>
            {{ __('posted by') }}

            @include('posts.partials.profile-link', [
                'userId' => $userId,
                'username' => $username,
            ])
            at {{ $post->created_at->format('g:i a') }} -
            ({{ $commentsCount > 0 ?: 0 }} comments total)
        </div>

        <livewire:post.favorite-post-component
            :post="$post"
            :favorites="$favoritesCount"
            :key="$post->id" />
    </div>
</footer>

{{--
posted by thecincinnatikid (20 comments total) 7 users marked this as a favorite
--}}
