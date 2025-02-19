<form class="has-steps" wire:submit.prevent="submitPassword()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            :label="'Next, enter a password'"
            :name="'password'"
            :type="'password'"
            :note="'Minimum 8 characters'"
            :autofocus="true"
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

    <div class="level">
        <x-forms.button
            class="secondary-button previous-step"
            type="button">
            {{ trans('Previous') }}
        </x-forms.button>

        <x-forms.button
            class="primary-button next-step"
            type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </div>
</form>
