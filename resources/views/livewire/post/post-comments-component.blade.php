<div class="comments">
    @if ($comments->count() > 0)
        @foreach ($comments as $comment)
            <div class="comment">
                <p>
                    {!! $comment->contents !!}
                </p>
                <footer>
                    <a href="#" title="View {{ $comment->user->name }}'s profile">
                        {{ $comment->user->name }}
                    </a>
                    at
                    <time datetime="{{ $comment->created_at->format('Y-m-d H:i:s') }}">
                        {{ $comment->created_at->format('g:i a') }}
                    </time>
                </footer>
            </div>
        @endforeach
    @endif
</div>
