<li>
    @foreach ($availableLocales as $locale => $language)
        @if ($locale !== $currentLocale)
            <button
                type="button"
                class="language"
                wire:click="switchLocale('{{ $locale }}')">
                    {{ $language }}
                <span class="icon">
                    <img src="{{ asset('images/icons/globe.svg') }}" alt="">
                </span>
            </button>

            <p>{{ $currentLocale }}</p>
        @endif
    @endforeach
</li>
