<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset class="required-fields">
        <x-forms.input
            :label="'Next, enter your email address'"
            :name="'email'"
            :type="'text'"
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
