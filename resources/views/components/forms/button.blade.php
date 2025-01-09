@props([
    'loading' => false,
    'type' => 'submit',
])

<x-forms.field>
    <button type="{{ $type }}" class="button primary-button" wire:loading.attr="disabled">
        @if ($loading && $target = $attributes->wire('click')->value())
            <span wire:loading.remove wire:target="{{ $target }}">
                {{ $slot }}
            </span>
            <span wire:loading wire:target="{{ $target }}">
                {{ $loading }}
            </span>
        @else
            {{ $slot }}
        @endif
    </button>
</x-forms.field>
