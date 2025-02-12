<span class="icon">
    @if (!empty($titleText))
        <img
            src="{{ asset($filePath) }}"
            alt="{{ $altText }}"
            title="{{ $titleText }}">
    @else
        <img
            src="{{ asset($filePath) }}"
            alt="{{ $altText }}">
    @endif
</span>
