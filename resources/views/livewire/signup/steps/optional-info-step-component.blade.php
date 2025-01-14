<form wire:submit="submit">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <legend>
            {{ trans('Optional Info') }}
        </legend>

        <p>{!! trans('These will be shown on your public profile, but it&rsquo;s fine to skip this.') !!}</p>

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

    <div class="previous-next">
        <button type="button" class="button primary-button previous" wire:click="previousStep">
            {{ trans('Previous') }}
        </button>

        <button type="submit" class="button primary-button next">
            {{ trans('Next') }}
        </button>
    </div>
</form>
