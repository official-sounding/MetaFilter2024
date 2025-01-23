<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            :label="'Next, enter a password'"
            :name="'password'"
            :type="'password'"
            :note="''"
            :autofocus="false"
            :required="false"
        />

        <x-forms.input
            :label="'And confirm your password'"
            :name="'password_confirmation'"
            :type="'password'"
            :note="''"
            :autofocus="false"
            :required="false"
        />
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
