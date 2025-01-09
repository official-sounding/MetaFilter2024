<x-forms.form action="{{ route('password.update') }}">
    <x-forms.input
        name="email"
        type="email"
        autocomplete="true"
        text="{{ trans('Email Address') }}" />

    <x-forms.input
        name="password"
        type="password"
        text="{{ trans('Password') }}" />

    <x-forms.input
        name="password_confirmation"
        type="password"
        text="{{ trans('Confirm Password') }}" />

    <x-forms.button>
        {{ trans('Reset Password') }}
    </x-forms.button>
</x-forms.form>
