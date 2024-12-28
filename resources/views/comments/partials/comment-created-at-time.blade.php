at <a href="#{{ $comment->id }}" title="Permanent link to this comment">
    <time
        datetime="{{ $comment->created_at->format('Y-m-d H:i:d') }}">
        {{ $comment->created_at->format('g:i a') }}
    </time>
</a>
on {{ $comment->created_at->format('F j') }}
