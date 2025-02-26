<button
    class="button footer-button"
    type="button"
    title="{{ $titleText }}"
    @auth
        @if (isset($userWatching) && $userWatching === true)
            wire:click="stopWatching()"
        @else
            wire:click="startWatching()"
        @endif
    @endauth
>
    <x-icons.icon-component filename="{{ $iconFilename }}" />
    {{ trans('Watch') }}
</button>
