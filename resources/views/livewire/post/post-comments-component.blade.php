<div class="comments">
    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
            <article class="comment" id="{{ $comment->id }}" wire:key="comment-{{ $comment->id }}">
                <p>{!! $comment->contents !!}</p>

                @include('comments.partials.comment-footer', [
                    'comment' => $comment,
                    'favoritesCount' => $comment->favorites()->count(),
                    'flagsCount' => $comment->flags()->count(),
                    'flagReasons' => $flagReasons,
                    'type' => 'comment'
                ])
            </article>
        @endforeach
    @else
        <div class="notification is-info">
            <p>
                No comments
            </p>
        </div>
    @endif
</div>
