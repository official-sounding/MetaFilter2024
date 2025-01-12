@props([
    'label',
    'name',
    'autofocus' => false,
    'icon' => null,
    'note' => null,
    'required' => true,
    'type' => 'text',
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="(bool) $required"
    />

    @if ($note)
        <small class="form-note">
            {!! $note !!}
        </small>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        wire:model="{{ $name }}"
        @if ($autofocus)
            autofocus
        @endif
    />

    @error($name)
        <small class="text-danger error">
            {{ $message }}
        </small>
    @enderror
</x-forms.field>
