<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ trans('First, enter a title') }}" />
    </fieldset>

    <fieldset>
        <legend>{{ trans('Optional') }}</legend>

        <x-forms.input
            name="url"
            type="url"
            :required="false"
            label="{{ trans('URL') }}" />

        <x-forms.input
            name="link_text"
            type="text"
            :required="false"
            note="{{ trans('These will be the first words of your post, and will be a clickable link to the URL') }}"
            label="{{ trans('Link text') }}" />
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
