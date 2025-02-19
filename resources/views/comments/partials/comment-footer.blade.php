<footer class="comment-footer">
    <div class="level">
        <div>
            <x-members.profile-link-component :user="$comment->user"/>

            @include('comments.partials.comment-timestamp', [
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
