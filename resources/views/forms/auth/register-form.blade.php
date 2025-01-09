<x-forms.form action="{{ route('register') }}">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')

    <fieldset class="required-fields">
        <legend>{{ trans('Required') }}</legend>

        <x-forms.input
            name="email"
            type="email"
            label="{{ trans('Email Address') }}" />

        <x-forms.input
            name="username"
            label="{{ trans('Username') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ trans('Password') }}" />

        <x-forms.input
            name="password-confirm"
            type="password"
            label="{{ trans('Confirm Password') }}" />
    </fieldset>

    <fieldset class="optional-fields">
        <legend>{{ trans('Optional') }}</legend>
        <x-forms.input
            name="name"
            required="false"
            autocomplete="true"
            label="{{ trans('Name') }}" />

        <x-forms.input
            name="website_url"
            required="false"
            autocomplete="true"
            label="{{ trans('Website URL') }}" />
    </fieldset>

    <button type="submit">
        {{ trans('Register') }}
    </button>
</x-forms.form>
