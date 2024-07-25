@props([
    'name',
    'required' => true,
])

<x-forms.field>
    <x-forms.label
        :name="$name"
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
