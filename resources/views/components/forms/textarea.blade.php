@props([
    'label',
    'name',
    'required' => true,
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label"
        :required="$required" />

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        @if ($required)
            required
        @endif>
        {{ old($name) }}
    </textarea>

    <x-forms.error name="{{ $name }}" />
</x-forms.field>
