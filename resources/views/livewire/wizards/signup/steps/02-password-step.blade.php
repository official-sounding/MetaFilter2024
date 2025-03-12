<form class="has-steps" wire:submit.prevent="submitPassword()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <livewire:auth.input-password-component
            name="password"
            label="Next, enter a password"
        />

        <livewire:auth.input-password-component
            name="password_confirmation"
            label="And confirm your password"
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
