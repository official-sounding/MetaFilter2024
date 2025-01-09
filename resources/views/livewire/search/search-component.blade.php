<search>
    <form action="">
        <label for="{{ $inputId }}" class="sr-only">Search</label>
        <input id="{{ $inputId }}" name="q" type="search">
        <button type="submit">
            {{ trans('Go') }}
        </button>
    </form>
</search>
