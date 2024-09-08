<span
    class="footer-button"
    datetime="{{ $post->created_at->format('Y-m-d H:i:d') }}">
    <img src="{{ asset('images/icons/clock.svg') }}" class="icon" role="img" alt="">
    {{ $post->created_at->format('g:i a') }}
</span>
