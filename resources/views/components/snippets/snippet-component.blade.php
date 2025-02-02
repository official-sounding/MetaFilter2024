<p>
    @if ($smallText === true)
        <small>
            {!! $snippet->body !!}
        </small>
    @else
        {!! $snippet->body !!}
    @endif
</p>
