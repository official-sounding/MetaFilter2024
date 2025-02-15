<div class="search-and-results">
    <search>
        <form>
            <label for="search-terms" class="sr-only">
                {{ trans('Search') }}
            </label>

            <input
                class="search-terms"
                id="search-terms"
                name="q"
                type="search">
            <button
                type="button"
                class="button primary-button">
                {{ trans('Go') }}
            </button>
        </form>

        <div class="search-results">
        </div>
    </search>
</div>
