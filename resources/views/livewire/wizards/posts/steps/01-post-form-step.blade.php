<form class="has-steps" wire:submit.prevent="saveAsPending()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            :required="true"
            label="{{ trans('First, enter a title') }}"
        />
    </fieldset>

    <div wire:ignore>
        <x-forms.textarea
            name="body"
            label="{{ trans('Body') }}"
            :required="true"
        />
    </div>

    <div wire:ignore>
        <x-forms.textarea
            name="more_inside"
            label="{{ trans('More Inside') }}"
            :required="false"
        />
    </div>

    <div class="level">
        <x-buttons.link-button
            buttonText="Cancel"
            url="{{ url()->previous() }}">
        </x-buttons.link-button>

        <x-forms.button
            type="submit"
            class="primary-button next-step">
            {{ trans('Next') }}
        </x-forms.button>
    </div>

    <script>
        document.getElementById('title').focus();
    </script>
</form>
