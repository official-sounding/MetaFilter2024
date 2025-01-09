@php
    $emailNote = <<<EOT
    Please use a working address. We won&rsquo;t spam you, and we&rsquo;ll <strong>never</strong> give away your address to anyone.
    By default this address is hidden from users and the public, but in you can choose to show it publicly. [Privacy policy]
    EOT;

    $nameNote = <<<EOT
    If you enter a name here, it&rsquo;s shown on your public profile page, but it&rsquo;s fine to leave this blank.
    EOT;

    $homepageUrlNote = <<<EOT
    If you enter a URL here, it&rsquo;s shown on your public profile page, but it&rsquo;s fine to leave this blank.
    EOT;
@endphp

<form>
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')
    @honeypot

    <x-forms.input
        name="username"
        type="text"
        autofocus="true"
        label="{{ trans('Username') }}" />

    <x-forms.input
        name="email"
        type="email"
        label="{{ trans('Email address') }}"
        :note="$emailNote" />

    <x-forms.input
        name="password"
        type="password"
        label="{{ trans('Password') }}" />

    <x-forms.input
        name="confirm-password"
        type="password"
        label="{{ trans('Confirm password') }}" />

    <x-forms.button>
        {{ trans('Register') }}
    </x-forms.button>
</form>
