<x-forms.field>
    <button
        type="{{ $type ?? 'button' }}"
        class="button @if (isset($class)) {{ $class }} @endif"
        wire:loading.attr="disabled">
        {{ $slot }}
    </button>
</x-forms.field>
