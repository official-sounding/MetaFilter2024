<a href="#{{ $comment->id }}" class="footer-info" title="{{ trans('Permanent link to this comment') }}">
    <x-icons.icon-component filename="clock" />
    <time
        datetime="{{ $comment->created_at->format('Y-m-d H:i:d') }}">
        {{ $comment->created_at->format('g:i a') }}
    </time>
</a>

<span class="footer-info">
    <x-icons.icon-component filename="calendar3" />
    {{ $comment->created_at->format('F j') }}
</span>
