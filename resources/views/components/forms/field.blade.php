@props([
    'note' => null,
])

<div class="field">
    {{ $slot }}
</div>

@if ($note !== null)
    <p class="note">{!! $note !!}</p>
@endif
