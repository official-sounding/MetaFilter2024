<a title="{{ trans($titleText) }}"
   href="{{ env('APP_URL') }}/members/{{ $user->id }}">
    @if ($showIcon === true)
        <x-icons.icon-component filename="{{ $filename }}" />
    @endif
    {{ $user->username }}
</a>
