<form wire:submit="register">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <fieldset>
        <legend>{{ __('Required fields') }}</legend>

        <x-forms.input
            name="username"
            type="text"
            label="{{ __('Username') }}" />

        <x-forms.input
            name="email"
            type="email"
            label="{{ __('Email address') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ __('Password') }}" />

        <x-forms.input
            name="confirm-password"
            type="password"
            label="{{ __('Confirm password') }}" />
    </fieldset>

    <x-forms.button>
        {{ __('Register') }}
    </x-forms.button>
</form>
