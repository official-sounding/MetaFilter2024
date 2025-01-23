<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <legend>
            {{ trans('Optional Info') }}
        </legend>

        <small>{!! trans('These will be shown on your public profile, but it&rsquo;s fine to skip this.') !!}</small>

        <x-forms.input
            name="name"
            required="false"
            autocomplete="true"
            label="{{ trans('Name') }}"
        />

        <x-forms.input
            name="homepage_url"
            required="false"
            autocomplete="true"
            label="{{ trans('Home page URL') }}"
        />
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
