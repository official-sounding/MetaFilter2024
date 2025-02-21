<x-forms.form
    :action=""
    role="search"
    :showRequiredFieldsNote="false">

    <label class="sr-only" for="{{ $formId }}-query">
        {{ trans('Search') }}  {{ config('app.name') }}
    </label>

    <div class="input-add-on">
        <input
            type="search"
            name="q"
            id="{{ $formId }}-query"
            placeholder="{{ trans('Search') }}&hellip;">

        <button class="button icon-search" type="submit">
            <span class="sr-only">
                {{ trans('Search') }}
            </span>
        </button>
    </div>
</x-forms.form>
