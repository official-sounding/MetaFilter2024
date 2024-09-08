@props([
    'label',
    'name',
    'required' => true,
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="(bool) $required" />

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="wysiwyg"
        wire:model.live="{{ $name }}">
        {{ old($name) }}
    </textarea>

    <x-forms.error name="{{ $name }}" />
</x-forms.field>
