<li>
    @foreach ($availableLocales as $locale => $language)
        @if ($locale !== $currentLocale)
            <button
                type="button"
                class="language"
                wire:click="switchLocale('{{ $locale }}')">
                    {{ $language }}
                    <x-icons.icon-component filename="globe" />
            </button>

            <p>{{ $currentLocale }}</p>
        @endif
    @endforeach
</li>
