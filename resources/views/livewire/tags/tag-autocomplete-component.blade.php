<form
    x-data='{
        tagSelected(event) {
            let value = event.target.value
            let id = document.body.querySelector("datalist [value=\""+value+"\"]").dataset.value
        }
    }'
>
    <input
        type="text"
        list="availableTags"
        wire:model="searchTag"
        x-on:change.debounce="tagSelected($event)"
    >

    <datalist id="availableTags">
        @foreach($searchResults as $tag)
            <option
                wire:key="{{ $tag->id }}"
                data-value="{{ $tag->id }}"
                value="{{ $tag->name }}">
                {{ $tag->name }}
            </option>
        @endforeach
    </datalist>
</form>
