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

            <button
                class="button edit-button"
                wire:click.prevent="toggleEditing()"
                aria-controls="edit-comment-form-{{ $comment->id }}"
                aria-expanded="{{ $this->isEditing ? 'true' : 'false' }}">
                <span class="icon">
                    <img src="{{ asset('images/icons/pencil-square.svg') }}" alt="">
                </span>
                {{ trans('Edit') }}
            </button>
            @can('edit-comment', $comment)
            @endcan

            @auth
                @if ($userFavorited === true)
                    <button
                        class="button"
                        title="{{ trans('Remove favorite') }}">
                        <span class="icon">
                            <img src="{{ asset("images/icons/$favoriteIconFilename.svg") }}"
                                 alt="{{ trans('Favorite icon') }}"
                                 title="{{ $favoriteTitleText }}">
                        </span>
                        {{ $favoriteCount }}
                    </button>
                @else
                    <button>
                        <span class="icon">
                            <img src="{{ asset("images/icons/$favoriteIconFilename.svg") }}"
                                 alt="{{ trans('Favorite icon') }}"
                                 title="{{ $favoriteTitleText }}">
                        </span>
                        {{ $favoriteCount }}
                    </button>
                @endif

                @if ($userFlagged === true)
                    <button
                        class="button"
                        title="{{ trans('Remove flag') }}">
                        <span class="icon">
                            <img src="{{ asset("images/icons/$flagIconFilename.svg") }}"
                                 alt="{{ trans('Flag icon') }}"
                                 title="{{ $titleText }}">
                        </span>
                        {{ $flagCount }}
                    </button>
                @else
                    <button
                        wire:click="toggleFlagging()"
                        aria-controls="flag-comment-form-{{ $comment->id }}"
                        aria-expanded="{{ $this->isFlagging ? 'true' : 'false' }}">
                        <span class="icon">
                            <img src="{{ asset("images/icons/$flagIconFilename.svg") }}"
                                 alt="{{ trans('Flag icon') }}"
                                 title="{{ $flagTitleText }}">
                        </span>
                    </button>
                @endif
            @endauth
        @endauth

        @guest
            <button
                disabled="disabled"
                class="button">
                <span class="icon">
                    <img src="{{ asset("images/icons/flag.svg") }}"
                         alt="{{ trans('Flag icon') }}"
                         {{-- TODO: Add a function in the component to translate and singular/plural --}}
                         title="{{ $flagCount }} {{ trans('flags') }}">
                </span>
                {{ $flagCount }}
            </button>
        @endguest
    </footer>

    @if ($isEditing === true)
        <livewire:comments.comment-form-component
            wire:key="'edit-comment-' . $comment->id"
            :authorized-user-id="$authorizedUserId"
            :post-id="$comment->post_id"
            :comment="$comment"
            button-text="{{ trans('Update') }}"
            is-editing="true"
        />
    @endif

    @if ($isReplying === true)
        <livewire:comments.comment-form-component
            wire:key="'reply-to-comment-' . $comment->id"
            :authorized-user-id="$authorizedUserId"
            :post-id="$comment->post_id"
            :parent-id="$comment->id"
            is-replying="true"
        />
    @endif

    @if ($isFlagging === true)
        <livewire:flags.flag-component
            wire:key="'reply-to-comment-' . $comment->id"
            :comment-id="$comment->id"
            :model="$comment"
            is-flagging="true"
        />
    @endif
</article>
