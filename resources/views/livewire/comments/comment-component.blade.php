<article class="comment">
    {{ $comment->text }}

    <footer class="comment-footer">
        <p>
            <x-icons.icon-component filename="card-text" />
            {{ $wordCount . ' ' .  trans('words') }}
        </p>

        <x-members.profile-link-component :user="$comment->user" />

        @include('comments.partials.comment-timestamp', [
            'comment' => $comment,
        ])

        @auth
            @include('livewire.comments.partials.toggle-replying-button')

            @if ($comment->user_id === auth()->id())
                @include('livewire.comments.partials.toggle-editing-button')
            @endif
        @endauth

        <livewire:bookmarks.bookmark-component :model="$comment" />
        <livewire:favorites.favorite-component :model="$comment" />
    </footer>

    <footer class="admin-footer">

    </footer>
</article>
