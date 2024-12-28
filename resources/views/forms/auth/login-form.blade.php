<form method="POST" action="{{ route('auth.login.store') }}">
    @include('forms.partials.csrf-token')
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

    <x-forms.field>
        <button type="submit" class="button primary-button">
            {{ __('Log In') }}
        </button>
    </x-forms.field>

    <p>
        {!! __('Don&rsquo;t have an account?') !!}
        <a href="{{ route($registerCreateRoute) }}">
            <strong>
                {{ __('Sign up here') }}
            </strong>
        </a>
    </p>

    <p>
        <a href="{{ route($forgotPasswordRoute) }}">
            {{ __('Forgot your password?') }}
        </a>
    </p>

    <p>
        {{ __('Need help?') }}
        <a href="{{ route($contactFormRoute) }}">
            {{ __('Contact the admins.') }}
        </a>
    </p>
</form>
