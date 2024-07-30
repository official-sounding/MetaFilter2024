<x-forms.form
    action=""
    role="search"
    showRequiredFieldsNote="false">

    <label class="sr-only" for="{{ $formId }}-query">
        Search {{ config('app.name') }}…
    </label>

    <div class="input-add-on">
        <input
            type="search"
            name="q"
            id="{{ $formId }}-query"
            placeholder="Search…">

        <button class="button icon-search" type="submit">
            <span class="sr-only">
                Search
            </span>
        </button>
    </div>
    {{-- TODO: Add site --}}
    <input name="site" value="mefi" type="hidden">
</x-forms.form>
