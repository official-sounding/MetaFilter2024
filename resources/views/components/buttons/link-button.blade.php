<a href="{{ $url }}" class="button link-button">
    @if (isset($iconFilename) && $iconFilename !== '')
        <x-icons.icon-component filename="{{ $iconFilename }}" />
    @endif
    {{ $buttonText }}
</a>
