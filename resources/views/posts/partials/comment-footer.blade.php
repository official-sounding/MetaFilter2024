<footer class="comment-footer">
    <div>
        @include('posts.partials.profile-link', [
            'userId' => $comment->user->id,
            'username' => $comment->user->name,
            'iconFilename' => $comment->user->id === auth()->id() ? 'person-fill.svg' : 'person.svg',
        ])
        @include('posts.partials.comment-created-at-time', [
            'comment' => $comment,
        ])
        @auth
            <livewire:post.favorite-comment-component :comment="$comment" />
        @endauth
    </div>
    <div class="flag-container">
        @auth
            <livewire:post.flag-comment-component :comment="$comment" />
        @endauth
    </div>
</footer>
