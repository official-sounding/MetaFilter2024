<form wire:submit="login">
    @csrf
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <x-forms.input
        name="username"
        type="text"
        autofocus="true"
        label="{{ __('Username') }}"/>

    <x-forms.input
        name="password"
        type="password"
        label="{{ __('Password') }}"/>

    <x-forms.button>
        {{ __('Log In') }}
        <span wire:loading>
            {{ __('Logging in...') }}
        </span>
    </x-forms.button>

    <div>
        {!! __('Don&rsquo;t have an account?') !!}
        <a href="{{ route($registerCreateRoute) }}">
            <strong>
                {{ __('Sign up here') }}
            </strong>
        </a>
    </div>

    <div>
        <a href="{{ route($forgotPasswordRoute) }}">
            {{ __('Forgot your password?') }}
        </a>
    </div>

    <div>
        {{ __('Need help?') }}
        <a href="{{ route($contactFormRoute) }}">
            {{ __('Contact the admins.') }}
        </a>
    </div>
</form>
