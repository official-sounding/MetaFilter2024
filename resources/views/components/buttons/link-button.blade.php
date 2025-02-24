<a href="{{ $url }}" class="button link-button">
    @if ($iconFilename !== '')
        <x-icons.icon-component filename="{{ $iconFilename }}" />
    @endif
    {{ $buttonText }}
</a>
