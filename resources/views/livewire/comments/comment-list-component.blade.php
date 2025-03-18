<section class="comments">
    <h2 class="sr-only">
        {{ trans('Comments') }}
    </h2>

    @forelse ($comments as $comment)
        <livewire:comments.comment-component
            wire:key="{{ $comment->id }}"
            :comment="$comment"
            :post="$post"
        />
    @empty
        @include('notifications.none-listed', [
            'records' => $recordsText,
        ])
    @endforelse

    <div wire:poll.30s="getComments"></div>
</section>
