<div class="comments">
    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
            <article class="comment" id="{{ $comment->id }}" wire:key="comment-{{ $comment->id }}">
                <p>{!! $comment->contents !!}</p>

                @include('posts.partials.comment-footer', [
                    'comment' => $comment,
                ])

                @if (isset($showFlagForm) && $showFlagForm === true)
                    <livewire:post.flag-form-component />
                @endif
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
