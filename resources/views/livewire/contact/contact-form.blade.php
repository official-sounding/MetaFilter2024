<div>
    @if (!empty($this->status))
        <div class="notification @if ($this->status === 'failure') is-danger @else is-success @endif">
            @if ($this->status === 'failure')
                {{ trans('There was a problem sending your message. Please try again.') }}
            @else
                {{ trans('Your message has been sent!') }}
            @endif
        </div>
    @else
        <form wire:submit="store()">
            @include('forms.partials.validation-summary')
            @include('forms.partials.required-fields-note')

            @honeypot

            <x-forms.input
                name="name"
                type="text"
                label="{{ trans('Name') }}" />

            <x-forms.input
                name="email"
                type="email"
                label="{{ trans('Email address') }}" />

            <x-forms.input
                name="subject"
                type="text"
                label="{{ trans('Subject') }}" />

            <x-forms.textarea
                name="message"
                label="{{ trans('Message') }}" />

            <x-forms.button>
                {{ trans('Send') }}
            </x-forms.button>
        </form>
   @endif
</div>
