<x-forms.form action="{{ route('contact.store') }}">
    @honeypot

    <x-forms.input
        name="name"
        label="{{ trans('Name') }}"
        required="true" />

    <x-forms.input
        name="email"
        type="email"
        label="{{ trans('Email Address') }}"
        required="true" />

    <x-forms.input
        name="subject"
        label="{{ trans('Subject') }}"
        required="true" />

    <x-forms.textarea
        name="message"
        label="{{ trans('Message') }}"
        required="true"  />

    <x-forms.button>
        {{ trans('Send') }}
    </x-forms.button>
</x-forms.form>
