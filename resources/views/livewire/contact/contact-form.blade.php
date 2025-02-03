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

            <fieldset>
                <x-forms.input
                    name="name"
                    type="text"
                    label="{{ trans('Name') }}"
                    :required="true"
                    {{--
                        @auth
                            value="{{ auth()->user()->username }}"
                        @endauth
        --}}
                />

                <x-forms.input
                    name="email"
                    type="email"
                    label="{{ trans('Email address') }}"
                    :required="true"
    {{--
                    @auth
                        value="{{ auth()->user()->email }}"
                    @endauth
    --}}
                />

                <x-forms.input
                    name="subject"
                    type="text"
                    label="{{ trans('Subject') }}"
                    :required="true"
                />

                <x-forms.textarea
                    name="message"
                    label="{{ trans('Message') }}"
                    :required="true"
                />
    {{--
                @auth
                    <x-forms.checkbox
                        name="copy_sender"
                        label="{{ trans('Send a copy to my verified email address (' . auth()->user()->email . ')' }}" />
                @endauth
    --}}
                <x-forms.button type="submit">
                    {{ trans('Send') }}
                </x-forms.button>
            </fieldset>
        </form>
   @endif
</div>
