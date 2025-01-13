<form wire:submit="store">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset class="required-fields">
        <legend>{{ trans('Required fields') }}</legend>

        <x-forms.input
            name="email"
            type="text"
            note="We won&rsquo;t spam you, and we&rsquo;ll <strong>never</strong> give away your address to anyone. This address is hidden from other members and the public."
            label="{{ trans('Email Address') }}"
        />
    </fieldset>

    <button type="submit" class="button primary-button">
        {{ trans('Next') }}
    </button>
</form>
