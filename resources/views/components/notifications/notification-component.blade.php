<div class="notification {{ $class }}">
    @if (!empty($iconFilename))
        <x-icons.icon-component filename="{{ $iconFilename }}" />
    @endif

    {{ $slot }}
</div>
