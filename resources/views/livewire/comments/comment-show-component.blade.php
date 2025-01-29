<article class="comment">
    @if ($editing)
        <livewire:comments.comment-form-component
            wire:key="'edit-' . $comment->id"
            :post-id="$comment->post_id"
            :stored-comment="$comment"
            button-text="Update"
            cancel-action="cancelEditing()"
        />
    @else
        {{ $comment->text }}

        @auth
            <button class="button reply-button" wire:click.prevent="startReplying()">
                <img src="{{ asset('images/icons/reply-fill.svg') }}" alt="">
                {{ trans('Reply') }}
            </button>
        @endauth

        @if (auth()->check() && auth()->id() == $comment->user_id)
            <button class="button edit-button" wire:click.prevent="startEditing()">
                <img src="{{ asset('images/icons/pencil-square.svg') }}" alt="">
                {{ trans('Edit') }}
            </button>

            <button
                type="button"
                class="button delete-button"
                wire:click="deleteComment()"
                wire:confirm="Are you sure you want to delete this comment?">
                <img src="{{ asset('images/icons/trash3.svg') }}" alt="">
                {{ trans('Delete') }}
            </button>
        @endif
    @endif

    @if ($replying)
        <livewire:comments.comment-form-component
            wire:key="'reply-' . $comment->id"
            :post-id="$comment->post_id"
            :parent-id="$comment->id"
            cancel-action="cancelReplying"
        />
    @endif

    <footer class="comment-footer">
        {{ trans('posted by') }}
        @include('posts.partials.profile-link', [
            'userId' => $comment->user->id,
            'username' => $comment->user->username,
        ])

        @include('comments.partials.comment-created-at-time', [
            'comment' => $comment,
        ])
    </footer>
</article>
