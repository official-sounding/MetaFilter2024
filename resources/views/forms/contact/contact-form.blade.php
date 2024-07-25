<x-forms.form action="{{ route('contact.store') }}">
    @honeypot

    <x-forms.input
        name="name"
        label="{{ __('Name') }}" />

    <x-forms.input
        name="email"
        type="email"
        label="{{ __('Email Address') }}" />

    <x-forms.input
        name="subject"
        label="{{ __('Subject') }}" />

    <x-forms.textarea
        name="message"
        label="{{ __('Message') }}" />

    <x-forms.button>
        {{ __('Send') }}
    </x-forms.button>
</x-forms.form>
