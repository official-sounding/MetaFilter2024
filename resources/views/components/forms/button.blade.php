@props([
    'type' => 'submit',
])

<x-forms.field>
    <button type="{{ $type }}" class="button primary-button" wire:loading.attr="disabled">
        {{ $slot }}
    </button>
</x-forms.field>
