@props([
    'autofocus' => false,
    'label',
    'name',
    'required' => false,
    'type',
    'note' => null,
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required"
    />

    @if (!empty($note))
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
        @if ($autofocus === true)
            autofocus
        @endif
    />

    @error($name)
        <small class="text-danger error">
            {{ $message }}
        </small>
    @enderror
</x-forms.field>
