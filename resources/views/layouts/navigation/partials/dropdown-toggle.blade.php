<button
    id="{{ $id }}"
    class="dropdown-toggle"
    aria-controls="{{ $ariaControls }}"
    aria-label="{{ $ariaLabel }}"
    aria-haspopup="true"
    aria-expanded="false"
    @if ($title)
        title="{{ $title }}"
    @endif
    tabindex="0"
    >
    <span class="icon">
        <img src="{{ asset("images/icons/$icon.svg") }}" alt="">
    </span>
</button>
