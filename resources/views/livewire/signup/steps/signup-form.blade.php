<form wire:submit="store">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')

    <fieldset class="required-fields">
        <legend>{{ trans('Required fields') }}</legend>

        <x-forms.input
            name="username"
            type="text"
            note="Your username will be displayed on the site and can&rsquo;t be changed. Usernames may consist of English letters, numbers, and most punctuation."
            label="{{ trans('Username') }}" />

        <x-forms.input
            name="email"
            type="email"
            note="Required. We won&rsquo;t spam you, and we&rsquo;ll <strong>never</strong> give away your address to anyone. By default this address is hidden from users and the public."
            label="{{ trans('Email address') }}" />

        <x-forms.input
            name="password"
            type="password"
            label="{{ trans('Password') }}" />

        <x-forms.input
            name="confirm-password"
            type="password"
            label="{{ trans('Confirm password') }}" />
    </fieldset>

    <fieldset class="optional-fields">
        <legend>{{ trans('Optional fields') }}</legend>

        <small>{!! trans('Shown on your public members page; it&rsquo;s fine to leave these blank') !!}</small>

        <x-forms.input
            name="name"
            type="text"
            label="{{ trans('First and Last Name') }}"
            required="false" />

        <x-forms.input
            name="homepage_url"
            type="text"
            label="{{ trans('Homepage URL') }}"
            required="false" />
    </fieldset>

    <x-forms.button>
        {{ trans('Sign Up') }}
    </x-forms.button>

    <button class="button" wire:click="previousStep">
        &laquo; Go to the previous step
    </button>
</form>
