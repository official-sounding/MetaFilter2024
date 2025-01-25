
<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required"
    />

    @if (isset($note) && $note)
        <small class="form-note">
            {!! $note !!}
        </small>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        wire:model.live="{{ $name }}"
        @if (isset($autofocus) && $autofocus)
            autofocus
        @endif
    />

    @error($name)
        <small class="text-danger error">
            {{ $message }}
        </small>
    @enderror
</x-forms.field>
