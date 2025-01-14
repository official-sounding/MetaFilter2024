<li>
    @foreach ($availableLocales as $locale => $language)
        @if ($locale !== $currentLocale)
            <button
                type="button"
                class="language"
                wire:click="switchLocale('{{ $locale }}')">
                {{ $language }}
            </button>
        @endif
    @endforeach
</li>
