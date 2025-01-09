<small>posting as
    <a title="{{ trans('View profile') }}"
       href="{{ route($profileShowRoute, [
            'user' => auth()->user()
        ]) }}">
        <stong>{{ auth()->user()->username }}</stong>
    </a>
</small>
