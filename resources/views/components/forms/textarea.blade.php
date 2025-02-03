@props([
    'label',
    'name',
    'required',
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required" />

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="wysiwyg"
        wire:model.live="{{ $name }}">
        {{ old($name) }}
    </textarea>

    <x-forms.error name="{{ $name }}" />
</x-forms.field>
