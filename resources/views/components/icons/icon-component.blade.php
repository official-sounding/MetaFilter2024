<span class="icon">
    @if (!empty($titleText))
        <img
            src="{{ asset($iconPath) }}"
            alt="{{ $altText }}"
            title="{{ $titleText }}">
    @else
        <img
            src="{{ asset($iconPath) }}"
            alt="{{ $altText }}">
    @endif
</span>
