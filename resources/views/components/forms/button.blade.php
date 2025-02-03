<x-forms.field>
    <button type="{{ $type ?? 'button' }}" class="button primary-button" wire:loading.attr="disabled">
        {{ $slot }}
    </button>
</x-forms.field>
