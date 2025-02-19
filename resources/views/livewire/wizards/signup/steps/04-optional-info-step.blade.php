<form class="has-steps" wire:submit.prevent="submitOptionalInfo()">
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')

    <fieldset>
        <legend>
            {{ trans('Optional Info') }}
        </legend>

        <small class="space">
            {!! trans('These will be shown on your public profile, but it&rsquo;s fine to skip this.') !!}
        </small>

        <x-forms.input
            :label="'Name'"
            :name="'name'"
            :type="'text'"
            :note="''"
            :autofocus="true"
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

    <div class="level">
        <x-forms.button
            class="secondary-button previous-step"
            type="button">
            {{ trans('Previous') }}
        </x-forms.button>

        <x-forms.button
            type="submit"
            class="primary-button next-step">
            {{ trans('Next') }}
        </x-forms.button>
    </div>
</form>
