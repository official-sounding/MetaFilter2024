@props([
    'label',
    'name',
])

<x-forms.field>
    <x-forms.label
        :for="$name"
        :label="$label" />

    <input type="checkbox">
</x-forms.field>
