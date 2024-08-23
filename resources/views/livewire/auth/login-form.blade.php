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
        {{ __('Log In') }}
    </x-forms.button>

    <div>
        Don&rsquo;t have an account? <a href="{{ route($registerCreateRoute) }}">
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
