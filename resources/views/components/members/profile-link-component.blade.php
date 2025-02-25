<a title="{{ trans($titleText) }}"
   href="/members/{{ $user->id }}">
    @if ($showIcon === true)
        <x-icons.icon-component filename="{{ $filename }}" />
    @endif
    {{ $user->username }}
</a>
