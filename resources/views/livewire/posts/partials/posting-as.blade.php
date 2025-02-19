<small class="space">{{ trans('posting as') }}
    <a title="{{ trans('View profile') }}"
       href="{{ route($memberShowRoute, [
            'user' => auth()->user()
        ]) }}">
        <strong>
            {{ auth()->user()->username }}
        </strong>
    </a>
</small>
