<section>
    {{-- TODO: Figure out why app locale is incorrect --}}
    @includeFirst([
        "livewire.register.steps.partials.intro-$appLocale",
        'livewire.register.steps.partials.intro-en'
    ])
</section>
