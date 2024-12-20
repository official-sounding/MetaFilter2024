<small>posting as
    <a title="{{ __('View profile') }}"
       href="{{ session('profileShowRoute', [
            'user' => auth()->user()
        ]) }}">
        <stong>{{ auth()->user()->username }}</stong>
    </a>
</small>
