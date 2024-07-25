@props([
    'type' => 'submit',
])

<x-forms.field>
    <button type="{{ $type }}">
        {{ $slot }}
    </button>
</x-forms.field>
