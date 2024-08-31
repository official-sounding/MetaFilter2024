@props([
    'type' => 'submit',
])

<x-forms.field>
    <button type="{{ $type }}" wire:loading.attr="disabled">
        {{ $slot }}
    </button>
</x-forms.field>
