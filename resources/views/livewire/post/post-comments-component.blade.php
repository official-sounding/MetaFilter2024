<div class="comments">
    Comments
    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
            <article class="comment" wire:key="comment-{{ $comment->id }}">
                <p>
                    {!! $comment->contents !!}
                </p>

                @include('posts.partials.comment-footer', [
                    'comment' => $comment,
                    'flagReasons' => $flagReasons,
                ])
            </article>
        @endforeach
    @else
        No comments
    @endif
</div>
