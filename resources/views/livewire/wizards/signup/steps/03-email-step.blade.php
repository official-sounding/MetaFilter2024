<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset class="required-fields">
        <x-forms.input
            name="email"
            type="text"
            note="We won&rsquo;t spam you, and we&rsquo;ll <strong>never</strong> give away your address to anyone. This address is hidden from other members and the public."
            label="{{ trans('Next, enter your email address') }}"
        />
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
