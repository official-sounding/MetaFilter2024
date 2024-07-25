@props([
    'label',
    'name',
    'autofocus' => false,
    'note' => null,
    'required' => true,
    'type' => 'text',
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required"/>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        wire:model="{{ $name }}"
        @if ($autofocus)
            autofocus
        @endif
    >

    @if ($note !== null)
        <small>{!! $note !!}</small>
    @endif

    @error($name)
    <small class="text-danger error">
        {{ $message }}
    </small>
    @enderror
</x-forms.field>
