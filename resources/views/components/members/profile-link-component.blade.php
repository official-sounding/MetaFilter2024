<a title="{{ trans('View profile') }}"
   href="{{ route($memberShowRoute, [
        'user' => $user
    ]) }}">
    @if ($showIcon === true)
        <x-icons.icon-component filename="person" />
    @endif
    {{ $user->username }}
</a>
