<div>
    @foreach($comments as $comment)
        <div wire:key="{{ $comment->id }}">
            <livewire:comments.comment-item
                :comment="$comment"
                :key="$comment->id"
            />
        </div>
    @endforeach
</div>
