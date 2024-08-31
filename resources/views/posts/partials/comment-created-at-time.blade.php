<time
    class="footer-button"
    datetime="{{ $comment->created_at->format('Y-m-d H:i:d') }}">
    <img src="{{ asset('images/icons/clock.svg') }}" class="icon" role="img" alt="">
    {{ $comment->created_at->format('g:i a') }}
</time>
