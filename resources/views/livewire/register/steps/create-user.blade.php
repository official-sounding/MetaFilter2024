<form wire:submit="register">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <fieldset class="required-fields">
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

    <fieldset class="optional-fields">
        <legend>{{ __('Optional fields') }}</legend>

        <small>{{ __('Shown on your public profile page') }}</small>

        <x-forms.input
            name="name"
            type="text"
            label="{{ __('First and Last Name') }}"
            required="false" />

        <x-forms.input
            name="last-name"
            type="text"
            label="{{ __('Homepage URL') }}"
            required="false" />
    </fieldset>

    <x-forms.button>
        {{ __('Register') }}
    </x-forms.button>
</form>
