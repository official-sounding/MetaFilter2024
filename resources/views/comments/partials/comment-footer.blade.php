<footer class="comment-footer">
    <div class="level">
        <div>
            @include('posts.partials.profile-link', [
                'userId' => $comment->user->id,
                'username' => $comment->user->username,
            ])

            @include('comments.partials.comment-created-at-time-date', [
                'comment' => $comment,
            ])

            <livewire:favorites.favorite-component
                :comment="$comment"
                :favorites="$favoritesCount"
            />
        </div>

        <livewire:post.flag-component
            :comment="$comment"
            :flags="$flagsCount"
        />
    </div>

    @if (isset($showFlagCommentForm) && $showFlagCommentForm === true)
        <livewire:post.flag-comment-form-component
            :comment="$comment"
            :flagReasons="$flagReasons"
            :type="$type"
        />
    @endif
</footer>
