<x-forms.form action="{{ route('register') }}">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')

    <fieldset class="required-fields">
        <legend>{{ __('Required') }}</legend>

        <x-forms.input
            name="email"
            type="email"
            label="{{ __('Email Address') }}" />

        <x-forms.input
            name="username"
            label="{{ __('Username') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ __('Password') }}" />

        <x-forms.input
            name="password-confirm"
            type="password"
            label="{{ __('Confirm Password') }}" />
    </fieldset>

    <fieldset class="optional-fields">
        <legend>{{ __('Optional') }}</legend>
        <x-forms.input
            name="name"
            required="false"
            autocomplete="true"
            label="{{ __('Name') }}" />

        <x-forms.input
            name="website_url"
            required="false"
            autocomplete="true"
            label="{{ __('Website URL') }}" />
    </fieldset>

    <button type="submit">
        {{ __('Register') }}
    </button>
</x-forms.form>
