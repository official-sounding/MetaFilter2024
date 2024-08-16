<footer class="comment-footer">
    <div>
        @include('posts.partials.profile-link', [
            'userId' => $comment->user->id,
            'username' => $comment->user->name,
        ])
        @include('posts.partials.comment-created-at-time', [
            'comment' => $comment,
        ])
        @auth
            <livewire:post.favorite-comment-component :comment="$comment" />
        @endauth
    </div>
    <div>
        @auth
            <livewire:post.favorite-comment-component :comment="$comment" />
{{--
            <livewire:post.flag-comment-component :comment="$comment" />
--}}
        @endauth
    </div>
</footer>
