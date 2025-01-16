<form wire:submit="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <x-forms.input
            name="username"
            type="text"
            note="Your username will be displayed on the site with your posts and comments and can&rsquo;t be changed.
                    Usernames may consist of English letters, numbers, and most punctuation."
            label="{{ trans('First, pick your username') }}" />
    </fieldset>

    @include('livewire.wizards.partials.previous-next')
</form>
