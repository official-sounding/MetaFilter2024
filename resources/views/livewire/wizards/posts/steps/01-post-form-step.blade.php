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

    <fieldset class="optional">
        <legend>{{ trans('Optional') }}</legend>

        <x-forms.input
            name="link_url"
            type="url"
            :required="false"
            label="{{ trans('URL') }}"
        />

        <x-forms.input
            name="link_text"
            type="text"
            :required="false"
            note="{{ trans('These will be the first words of your post, and will be a clickable link to the URL') }}"
            label="{{ trans('Link text') }}"
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
        <x-forms.button
            type="submit"
            class="primary-button next-step">
            {{ trans('Next') }}
        </x-forms.button>
    </div>
</form>
