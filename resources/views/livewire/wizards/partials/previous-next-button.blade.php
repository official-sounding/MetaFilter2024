@php
    $goToStep = isset($goToStep) ?? 1;
    $type = isset($direction) && $direction === 'Next' ? 'submit' : 'button';
@endphp

<button type="{{ $type }}"
        class="button primary-button {{ mb_strtolower($direction) }}"
        wire:click="goToStep({{ $goToStep }})">
    <span>
        {{ trans($direction) }}
    </span>
</button>
