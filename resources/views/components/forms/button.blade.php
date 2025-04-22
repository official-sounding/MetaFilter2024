@props([
    'type' => 'button',
    'onclick' => null,
])

<x-forms.field>
    <button
        @if ($onclick !== null)
            wire:click="{{ $onclick }}"
        @endif
        type="{{ $type ?? 'button' }}"
        class="button @if (isset($class)) {{ $class }} @endif"
        wire:loading.attr="disabled">
        {{ $slot }}
    </button>
</x-forms.field>
