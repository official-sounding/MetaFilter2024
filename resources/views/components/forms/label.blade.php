@props([
    'for',
    'label',
    'required' => true,
])

<label for="{{ $for }}" @if ($required) class="required" @endif>
    {{ $label }}
</label>
