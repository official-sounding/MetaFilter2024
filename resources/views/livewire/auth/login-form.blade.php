<form wire:submit="login">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <x-forms.input
        name="username"
        type="text"
        label="{{ __('Username') }}"/>

    <x-forms.input
        name="password"
        type="password"
        label="{{ __('Password') }}"/>

    <x-forms.button>
        {{ __('Login') }}
    </x-forms.button>

    <div>
        Don't have account? <a wire:click.prevent="register">
            <strong>
                Register Here
            </strong>
        </a>
    </div>
    <div>
        Forgot your password?
    </div>
    <div>
        Need help? contact the admins.
    </div>
</form>
