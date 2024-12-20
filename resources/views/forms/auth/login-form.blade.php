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
        <button type="submit">
            {{ __('Log In') }}
        </button>
    </x-forms.field>

    <div>
        {!! __('Don&rsquo;t have an account?') !!}
        <a href="{{ session('registerCreateRoute') }}">
            <strong>
                {{ __('Sign up here') }}
            </strong>
        </a>
    </div>

    <div>
        <a href="{{ session('forgotPasswordRoute') }}">
            {{ __('Forgot your password?') }}
        </a>
    </div>

    <div>
        {{ __('Need help?') }}
        <a href="{{ session('contactFormRoute') }}">
            {{ __('Contact the admins.') }}
        </a>
    </div>
</form>
