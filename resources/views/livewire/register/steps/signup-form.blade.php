<form wire:submit="register">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <fieldset class="required-fields">
        <legend>{{ __('Required fields') }}</legend>

        <x-forms.input
            name="username"
            type="text"
            note="Your username will be displayed on the site and can&nbsp;t be changed. Usernames may consist of English letters, numbers, and most punctuation."
            label="{{ __('Username') }}" />

        <x-forms.input
            name="email"
            type="email"
            note="Required. We won&nbsp;t spam you, and we&nbsp;ll <strong>never</strong> give away your address to anyone. By default this address is hidden from users and the public."
            label="{{ __('Email address') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ __('Password') }}" />

        <x-forms.input
            name="confirm-password"
            type="password"
            label="{{ __('Confirm password') }}" />
    </fieldset>

    <fieldset class="optional-fields">
        <legend>{{ __('Optional fields') }}</legend>

        <small>{{ __('Shown on your public profile page; it&nbsp;s fine to leave these blank') }}</small>

        <x-forms.input
            name="name"
            type="text"
            label="{{ __('First and Last Name') }}"
            required="false" />

        <x-forms.input
            name="homepage_url"
            type="text"
            label="{{ __('Homepage URL') }}"
            required="false" />
    </fieldset>

    <x-forms.button>
        {{ __('Sign Up') }}
    </x-forms.button>

    <div wire:click="previousStep">
        Go to the previous step
    </div>
</form>
