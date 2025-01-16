<form>
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="title"
            type="text"
            label="{{ trans('First, enter a title') }}" />
    </fieldset>

    <fieldset>
        <small>{{ trans('Optional if building links in the description') }}</small>

        <x-forms.input
            name="link_url"
            type="url"
            label="{{ trans('Link URL') }}" />

        <x-forms.input
            name="link_text"
            type="text"
            note="{{ trans('These will be the first words of your posts, and will be a clickable link to the Link URL') }}"
            label="{{ trans('Link text') }}" />
    </fieldset>

    @include('livewire.wizards.partials.previous-next')
</form>
