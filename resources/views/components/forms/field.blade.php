@props([
    'note' => null,
])

<div class="field">
    {{ $slot }}

    @if ($note !== null)
        <p class="note">{{ $note }}</p>
    @endif
</div>
