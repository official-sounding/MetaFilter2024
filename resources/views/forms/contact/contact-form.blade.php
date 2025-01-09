<x-forms.form action="{{ route('contact.store') }}">
    @honeypot

    <x-forms.input
        name="name"
        label="{{ trans('Name') }}" />

    <x-forms.input
        name="email"
        type="email"
        label="{{ trans('Email Address') }}" />

    <x-forms.input
        name="subject"
        label="{{ trans('Subject') }}" />

    <x-forms.textarea
        name="message"
        label="{{ trans('Message') }}" />

    <x-forms.button>
        {{ trans('Send') }}
    </x-forms.button>
</x-forms.form>
