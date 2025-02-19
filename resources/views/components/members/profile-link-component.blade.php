<a title="{{ trans($titleText) }}"
   href="{{ route($memberShowRoute, [
        'user' => $user
    ]) }}">
    @if ($showIcon === true)
        <x-icons.icon-component filename="person" />
    @endif
    {{ $user->username }}
</a>
