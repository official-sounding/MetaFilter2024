<x-forms.form action="{{ route('password.email') }}">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')

    <x-forms.input
        name="email"
        type="email"
        autocomplete="true"
        label="{{ trans('Email Address') }}" />

    <x-forms.button>
        {{ trans('Send Password Reset Link') }}
    </x-forms.button>
</x-forms.form>
