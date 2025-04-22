<form class="has-steps" wire:submit.prevent="submitEmailAddress()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset class="required-fields">
        <x-forms.input
            :label="'Next, enter your email address'"
            :name="'email'"
            :type="'text'"
            :note="''"
            :autofocus="true"
            :required="false"
        />
    </fieldset>

    <div class="level">
        <x-forms.button
            class="secondary-button previous-step"
            onclick="goToStep(2)"
            type="button">
            {{ trans('Previous') }}
        </x-forms.button>

        <x-forms.button
            type="submit"
            class="primary-button next-step">
            {{ trans('Next') }}
        </x-forms.button>
    </div>
</form>
