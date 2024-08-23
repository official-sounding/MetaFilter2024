<div class="comments">
    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
            <article class="comment" wire:key="comment-{{ $comment->id }}">
                <p>
                    {!! $comment->contents !!}
                </p>

                @include('posts.partials.comment-footer', [
                    'comment' => $comment,
                ])
            </article>
        @endforeach
    @endif
</div>
