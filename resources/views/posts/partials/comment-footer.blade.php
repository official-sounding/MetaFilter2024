<footer class="comment-footer">
    <div class="level">
        <div>
            @include('posts.partials.profile-link', [
                'userId' => $comment->user->id,
                'username' => $comment->user->username,
                'iconFilename' => $comment->user->id === auth()->id() ? 'person-fill.svg' : 'person.svg',
            ])

            @include('posts.partials.comment-created-at-time', [
                'comment' => $comment,
            ])

            <livewire:post.favorite-comment-component
                :comment="$comment"
                :favorites="$favoritesCount"
            />
        </div>

        <livewire:post.flag-comment-component
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
