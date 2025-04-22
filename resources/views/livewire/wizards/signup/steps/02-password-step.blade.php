<form class="has-steps" wire:submit.prevent="submitPassword()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            :name="'password'"
            :type="'password'"
            :label="'Next, pick your password'"
            :autofocus="true"
            :required="true"
        />
        <x-forms.input
            :name="'password_confirmation'"
            :type="'password'"
            :label="'And confirm your password'"
            :autofocus="false"
            :required="true"
        />
    </fieldset>

    <div class="level">
        <x-forms.button
            class="secondary-button previous-step"
            onclick="goToStep(1)"
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
