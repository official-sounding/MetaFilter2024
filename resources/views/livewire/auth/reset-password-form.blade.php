<form wire:submit="save">
    <x-forms.input
        name="email"
        type="email"
        autocomplete="true"
        autofocus="true"
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
</form>
