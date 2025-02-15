<a href="#{{ $comment->id }}" title="Permanent link to this comment">
    <x-icons.icon-component filename="clock" />
    <time
        datetime="{{ $comment->created_at->format('Y-m-d H:i:d') }}">
        {{ $comment->created_at->format('g:i a') }}
    </time>
</a>
<x-icons.icon-component filename="calendar3" />
{{ $comment->created_at->format('F j') }}
