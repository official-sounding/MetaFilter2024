<form wire:submit.prevent="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <legend>
            {{ trans('Optional Info') }}
        </legend>

        <small>{!! trans('These will be shown on your public profile, but it&rsquo;s fine to skip this.') !!}</small>

        <x-forms.input
            :label="'Name'"
            :name="'name'"
            :type="'text'"
            :note="''"
            :autofocus="false"
            :required="false"
        />

        <x-forms.input
            :label="'Home page URL'"
            :name="'homepage_url'"
            :type="'url'"
            :note="''"
            :autofocus="false"
            :required="false"
        />
    </fieldset>

    <fieldset class="level">
        <x-forms.button type="submit">
            {{ trans('Next') }}
        </x-forms.button>
    </fieldset>
</form>
