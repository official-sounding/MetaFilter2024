<a class="button footer-button"
   href="#{{ $comment->id }}"
   title="Permanent link to this comment">
    <time
        datetime="{{ $comment->created_at->format('Y-m-d H:i:d') }}">
        <img src="{{ asset('images/icons/clock.svg') }}" class="icon" alt="">
        {{ $comment->created_at->format('g:i a') }}
    </time>
</a>
