<form method="POST" action="{{ route('login') }}">
    @include('forms.partials.csrf-token')

    <fieldset>
        @include('forms.partials.validation-summary')
        @include('forms.partials.required-fields-note')

        <x-forms.input
            name="username"
            type="text"
            :autofocus="true"
            :required="true"
            label="{{ trans('Username') }}" />

        <livewire:auth.input-password-component />

        <x-forms.field>
            <button type="submit" class="button primary-button">
                {{ trans('Log In') }}
            </button>
        </x-forms.field>

        <p>
            {!! trans('Don&rsquo;t have an account?') !!}
            <a href="{{ route('signup') }}">
                {{ trans('Sign up here') }}
            </a>
        </p>
        {{--
        TODO: Fix errors on forgot password page
        <p>
            <a href="{{ route('forgot-password') }}">
                {{ trans('Forgot your password?') }}
            </a>
        </p>
        --}}
        <p>
            {{ trans('Need help?') }}
            <a href="{{ route('contact.create') }}">
                {{ trans('Contact the admins.') }}
            </a>
        </p>
    </fieldset>
</form>
