@props([
    'for',
    'label',
    'required' => true,
])

@if ($required)
    <label for="{{ $for }}" class="required">
        {{ $label }}
    </label>
@else
    <label for="{{ $for }}">
        {{ $label }}
    </label>
@endif
