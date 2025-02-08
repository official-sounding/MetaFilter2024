<form>
    @include('forms.partials.validation-summary')
    @include('forms.partials.csrf-token')
    <section>
        preview
    </section>

    <fieldset class="level">
        <x-forms.button type="button">
            {{ trans('Save as Draft') }}
        </x-forms.button>

        <x-forms.button type="button">
            {{ trans('Post') }}
        </x-forms.button>
    </fieldset>
</form>
