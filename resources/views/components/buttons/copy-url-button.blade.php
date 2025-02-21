<span x-data="{ url: @js($url) }" class="copy-url-button">
    <button x-clipboard="url" class="button footer-button">
        <x-icons.icon-component filename="link-45deg" />
        {{ trans('Copy URL') }}
    </button>
</span>
