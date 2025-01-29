<small>posting as
    <a title="{{ trans('View profile') }}"
       href="{{ route($profileShowRoute, [
            'user' => auth()->user()
        ]) }}">
        <strong>
            {{ auth()->user()->username }}
        </strong>
    </a>
</small>
