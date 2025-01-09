<section class="comments">
    <h2 class="sr-only">Comments</h2>

    @forelse ($comments as $comment)
        <livewire:comments.comment-show-component
            wire:key="{{ $comment->id }}"
            :comment="$comment"
        />
    @empty
        @include('notifications.none-listed', [
            'items' => 'comments'
        ])
    @endforelse

    @auth
        <livewire:comments.comment-form-component :post-id="$post->id" />
    @endauth
</section>
