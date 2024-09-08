<footer class="level comment-footer">
    <div>
        @include('posts.partials.profile-link', [
            'userId' => $comment->user->id,
            'username' => $comment->user->username,
            'iconFilename' => $comment->user->id === auth()->id() ? 'person-fill.svg' : 'person.svg',
        ])
        @include('posts.partials.comment-created-at-time', [
            'comment' => $comment,
        ])

        <livewire:post.favorite-comment-component :comment="$comment" />
    </div>
    <div class="flag-container">
        <livewire:post.flag-comment-component :comment="$comment" />
    </div>
</footer>
