@if ($links->count() > 1)
    <button class="button">
    </button>
@else
    <a class="button" href="{{ route($links[0]['route']) }}">
        @if (isset($links[0]['text']))
            {{ $links[0]['text'] }}
        @else
            {{ $createPostText }}
        @endif
    </a>
@endif

