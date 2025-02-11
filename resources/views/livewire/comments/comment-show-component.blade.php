<article class="comment">
    {{ $comment->text }}

    <footer class="comment-footer">
        {{ trans('posted by') }}
        @include('posts.partials.profile-link', [
            'userId' => $comment->user->id,
            'username' => $comment->user->username,
        ])

        @include('comments.partials.comment-created-at-time', [
            'comment' => $comment,
        ])

        @auth
            <button
                class="button reply-button"
                wire:click.prevent="toggleReplying()"
                aria-controls="comment-reply-form-{{ $comment->id }}"
                aria-expanded="{{ $this->isReplying ? 'true' : 'false' }}">
                <span class="icon">
                    <img src="{{ asset('images/icons/reply-fill.svg') }}" alt="">
                </span>
                {{ trans('reply') }}
            </button>
        @endauth

        <button class="button edit-button" wire:click.prevent="toggleEditing()">
            <span class="icon">
                <img src="{{ asset('images/icons/pencil-square.svg') }}" alt="">
            </span>
            {{ trans('Edit') }}
        </button>

        <button class="button flag-button" wire:click.prevent="toggleFlagging()">
            <span class="icon">
                <img src="{{ asset('images/icons/flag.svg') }}" alt="">
            </span>
            {{ trans('Flag') }}
        </button>
        @can('edit-comment', $comment)
        @endcan
    </footer>

    @if ($isEditing === true)
        <livewire:comments.comment-form-component
            wire:key="'edit-comment-' . $comment->id"
            :post-id="$comment->post_id"
            :stored-comment="$comment"
            button-text="{{ trans('Update') }}"
            is-editing="true"
        />
    @endif

    @if ($isFlagging === true)
        <livewire:comments.flag-comment-component
            wire:key="'flag-comment-' . $comment->id"
            is-flagging="true"
        />
    @endif

    @if ($isReplying === true)
        <livewire:comments.comment-form-component
            wire:key="'reply-to-comment-' . $comment->id"
            :post-id="$comment->post_id"
            :parent-id="$comment->id"
            is-replying="true"
        />
    @endif
</article>
