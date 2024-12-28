<small>posting as
    <a title="{{ __('View profile') }}"
       href="{{ route($profileShowRoute, [
            'user' => auth()->user()
        ]) }}">
        <stong>{{ auth()->user()->username }}</stong>
    </a>
</small>
