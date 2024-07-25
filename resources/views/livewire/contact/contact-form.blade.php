<form wire:submit="save">
    @include('forms.partials.validation-summary')
    @include('forms.partials.required-fields-note')
    @honeypot

    <x-forms.input
        name="name"
        type="text"
        label="{{ __('Name') }}" />

    <x-forms.input
        name="email"
        type="email"
        label="{{ __('Email address') }}" />

    <x-forms.input
        name="subject"
        type="text"
        label="{{ __('Subject') }}" />

    <x-forms.textarea
        name="message"
        type="text"
        label="{{ __('Message') }}" />

    <x-forms.button>
        {{ __('Send') }}
    </x-forms.button>
</form>
